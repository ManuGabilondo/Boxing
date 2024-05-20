<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Rutina;
use App\Models\Post;
use DataTables;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function create(Request $request)
{
    // Validar los datos de entrada
    $validatedData = $request->validate([
        'name' => 'required|string|min:4|max:20',
        'email' => 'required|email|unique:users,email|max:255',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password' => 'required|string|min:6|max:20',
    ]);

    try {
    
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $validatedData['avatar'] = $file->storeAs('images', $filename, 'public');
        }

        // Crear el usuario
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->avatar = $validatedData['avatar'] ?? null;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('login')->with('success', 'Usuario creado con éxito');
    } catch (\Exception $e) {
  
        if ($e instanceof \Illuminate\Database\QueryException) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1062) { 
                return redirect()->back()->withErrors(['email' => 'El email ya está registrado.']);
            }
        }

        // Error general
        return redirect()->back()->withErrors(['general' => 'Ocurrió un error al crear el usuario.']);
    }
}
    public function table()
    {
        return view('usuarios');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:20',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|email|unique:users|max:20',
            'password' => 'required|min:6|max:20',
        ]);

        User::create($request->all());
    }
    public function rutinas()
    {
        $userId = auth()->id();

        // Busca todos los entrenamientos para este usuario
        $rutinas = Rutina::where('user_id', $userId)->get();

        // Pasa los entrenamientos a la vista
        return view('entrenamientos', ['rutinas' => $rutinas]);
    }
    public function data()
    {
        return DataTables::of(User::query())
            ->addColumn('actions', function ($user) {
                return '<a href="' . route('users.edit', $user->id) . '" class="badge badge-secondary">Editar Usuario</a> ' 
                // .
                //     '<form class="badge badge-danger" action="' . route('users.delete', $user->id) . '" method="POST" style="display:inline;">
                //     ' . csrf_field() . '
                //     ' . method_field('DELETE') . '
                //     <button type="submit" class="badge badge-danger" style="border:none; background:none;">Delete</button>
                // </form>'
                ;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back();
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('edit-user', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'avatar' => 'nullable|image',
        ]);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $data['avatar'] = $file->storeAs('images', $filename, 'public');
        }

        $user->update($data);
        return view('edit-user', ['user' => $user]);
    }

    public function subscribir()
    {
        return view('pagos');
    }
    public function subscribirUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->premium = 1;
        $user->save();
        return view('subscripcion');
    }
}

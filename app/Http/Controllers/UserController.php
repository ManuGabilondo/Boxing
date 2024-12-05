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
            // Procesar el avatar si se proporciona
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $filename = $file->getClientOriginalName();
                $validatedData['avatar'] = $file->storeAs('images', $filename, 'public');
            } else {
                // Establecer el avatar predeterminado si no se proporciona
                $validatedData['avatar'] = 'images/default.jpg';
            }
    
            // Crear el usuario
            $user = new User;
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->avatar = $validatedData['avatar'];
            $user->password = Hash::make($request->password);
    
            $user->save();
    
            return redirect()->route('login')->with('success', 'Usuario creado con éxito');
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    return redirect()->back()->withErrors(['email' => 'Email registrado,por favor ingrese otro o inicie sesión.']);
                }
            }
    
            // Error general
            return redirect()->back()->withErrors(['general' => 'Ocurrió un error al crear el usuario.']);
        }
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:20',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6|max:20',
        ]);
    
        // Procesar el avatar si se proporciona
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $avatar = $file->storeAs('images', $filename, 'public');
        } else {
            $avatar = 'images/default.jpg';
        }
    
        // Crear el usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $avatar,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Usuario creado con éxito');
    }
    public function table()
    {
        return view('usuarios');
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
            return '<a href="' . route('users.edit', $user->id) . '" class="badge bg-black white">Editar</a> ' 
            . '<button type="button" class="badge badge-danger" data-id="' . $user->id . '" onclick="showDeleteModal(this)">Dar de baja</button>';
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
        // dd($request);
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

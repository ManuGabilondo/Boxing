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

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->avatar = $data['avatar'] ?? null;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('login');
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
                return '<a href="' . route('users.edit', $user->id) . '" class="badge badge-primary">Edit</a> ' .
                    '<a href="' . route('users.delete', $user->id) . '" class="badge badge-danger">Delete</a>';
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

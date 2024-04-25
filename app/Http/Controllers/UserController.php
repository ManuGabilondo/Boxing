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

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        // $this->reset(['name', 'email', 'password', 'level']);

    }

    public function store(Request $request)
    {
        $this->validate([
            'name' => 'required|string|min:4|max:20',
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
}

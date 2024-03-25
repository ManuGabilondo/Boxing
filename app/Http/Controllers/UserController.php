<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view ('auth.register');
    }
    public function create(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        // $this->reset(['name', 'email', 'password', 'level']);
       
    }

    public function store(Request $request){
        $this->validate([
            'name' => 'required|string|min:4|max:20',
            'email' => 'required|email|unique:users|max:20',
            'password' => 'required|min:6|max:20',
        ]);
        
        User::create($request->all());
    }
}

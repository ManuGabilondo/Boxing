<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'text' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;
        if ($request->foto) {
            $imageName = $request->foto->store('images', 'public');
        }

        $post = new Post;
        $post->titulo = $request->titulo;
        $post->text = $request->text;
        $post->foto = $imageName;
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->back()->with('success', 'Post creado con éxito!');
    }
}

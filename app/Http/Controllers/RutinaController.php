<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutina;

class RutinaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->imagen->extension();
        $request->imagen->move(public_path('images'), $imageName);

        $rutina = new Rutina;
        $rutina->descripcion = $request->descripcion;
        $rutina->imagen = $imageName;
        $rutina->user_id = auth()->id();
        $rutina->save();

        return back()
            ->with('success', 'Entrenamiento creado correctamente.')
            ->with('image', $imageName);
    }
}

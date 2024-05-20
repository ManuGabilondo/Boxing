<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutina;
use Illuminate\Support\Facades\Auth;

class RutinaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;
        if ($request->imagen) {
            $imageName = $request->imagen->store('images', 'public');
        }

        $rutina = new Rutina;
        $rutina->titulo = $request->titulo;
        $rutina->descripcion = $request->descripcion;
        $rutina->imagen = $imageName;
        $rutina->user_id = Auth::id();
        $rutina->save();

        return redirect()->back()->with('success', 'Entrenamiento creado con éxito!');
    }
    public function destroy($id)
    {
        $rutina = Rutina::find($id);
        $rutina->delete();
        return redirect()->back()->with('success', 'Entrenamiento eliminado con éxito!');
    }

    public function update(Request $request, $id)
    {
        $rutina = Rutina::findOrFail($id);
    
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $rutina->titulo = $request->titulo;
        $rutina->descripcion = $request->descripcion;
    
        if ($request->hasFile('imagen')) {
            $imageName = $request->imagen->store('images', 'public');
            $rutina->imagen = $imageName;
        }
    
        $rutina->user_id = auth()->id();
        $rutina->save();
    
        return redirect()->back()->with('success', 'Entrenamiento actualizado con éxito!');
    }
}

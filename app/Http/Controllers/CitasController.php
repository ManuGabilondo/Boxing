<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasController extends Controller
{

    public function index()
    {
        return view('citas');
    }
    public function create()
    {
        $citas = \App\Models\Cita::all();
        return view('createcita', compact('citas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'fecha_cita' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $citaExistente = Cita::where('fecha_cita', $request->fecha_cita)->first();

        if ($citaExistente) {
            return back()->withErrors(['fecha_cita' => 'Esta fecha ya ha sido reservada.']);
        }

        $cita = new Cita;
        $cita->asunto = $request->asunto;
        $cita->fecha_cita = $request->fecha_cita;
        $cita->user_id = $request->user_id;
        $cita->save();

        return back()->with('success', 'Cita reservada con éxito.');
    }
}

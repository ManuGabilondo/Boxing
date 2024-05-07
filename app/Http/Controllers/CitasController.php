<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $cita = new \App\Models\Cita;

        $cita->user_id = $request->user_id;
        $cita->asunto = $request->asunto;
        $cita->fecha_cita = $request->fecha_cita;

        $cita->save();
        return redirect()->route('citas');
    }
}

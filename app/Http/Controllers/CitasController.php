<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use Carbon\Carbon;
use App\Models\User;

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
    
        $user = User::find($request->user_id);
        if (!$user) {
            return back()->withErrors(['user_id' => 'Usuario no encontrado.']);
        }
        if (!$user->premium && Cita::where('user_id', $user->id)->count() >= 2) {
            return back()->withErrors(['user_id' => 'Los usuarios no premium no pueden reservar más de dos citas. Considera pasarte a premium.']);
        }
    
        $fechaCita = Carbon::createFromFormat('d-m-Y', $request->fecha_cita);
        $fechaActual = Carbon::now();
        if ($fechaCita->lt($fechaActual->addDays(3))) {
            return back()->withErrors(['fecha_cita' => 'La fecha de la cita debe ser al menos 3 días posterior a la fecha actual.']);
        }
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
    public function edit($id)
    {
        $cita = Cita::find($id);
        return view('editcita', ['cita' => $cita]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_cita' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $cita = Cita::find($id);
        $cita->asunto = $request->asunto;
        $cita->fecha_cita = $request->fecha_cita;
        $cita->user_id = $request->user_id;
        $cita->save();

        return view('citas')->with('success', 'Cita actualizada con éxito.');
    }
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();
        return back()->with('success', 'Cita eliminada con éxito.');
    }
}

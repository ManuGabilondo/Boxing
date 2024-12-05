<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Reserva;
use Carbon\Carbon;
use App\Models\User;

class ReservasController extends Controller
{

    public function home()
    {
        // dd('hola');
        return view('reservas');
    }
    public function create()
    {
        $reservas = \App\Models\Reserva::all();
        return view('createreservas', compact('reservas'));
    }
    public function store(Request $request)
    {
        // Validaciones del request
        $request->validate([
            'fecha_reserva' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'personas' => 'required|integer|min:1', // Aseguramos que haya un número válido de personas
        ]);

        $user = User::find($request->user_id);
        if (!$user) {
            return back()->withErrors(['user_id' => 'Usuario no encontrado.']);
        }

        // Validamos la fecha de la cita
        $fechaReserva = Carbon::createFromFormat('d-m-Y', $request->fecha_reserva);
        $fechaActual = Carbon::now();

        // Validación para que la cita no sea el mismo día
        if ($fechaReserva->isToday()) {
            return back()->withErrors(['fecha_reserva' => 'No se puede hacer una reserva para el mismo día.']);
        }

        // Verificamos la cantidad total de personas reservadas para ese día
        $totalPersonasReservadas = Reserva::where('fecha_reserva', $request->fecha_reserva)
            ->sum('personas'); // Suma el número de personas de todas las reservas en esa fecha

        // Si el total de personas reservadas ya supera 40, no permitimos la nueva reserva
        if ($totalPersonasReservadas + $request->personas > 40) {
            return back()->withErrors(['fecha_reserva' => 'No se puede hacer la reserva, ya se han reservado 40 personas para esta fecha.']);
        }

        // Creamos la nueva cita
        $cita = new Reserva;
        $cita->nombre = $request->nombre;
        $cita->fecha_reserva = $request->fecha_reserva;
        $cita->personas = $request->personas;
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
            'fecha_reserva' => 'required|date',
            'user_id' => 'required|exists:users,id',
        ]);

        $cita = Cita::find($id);
        $cita->asunto = $request->asunto;
        $cita->fecha_reserva = $request->fecha_reserva;
        $cita->user_id = $request->user_id;
        $cita->save();

        return view('reservas')->with('success', 'Cita actualizada con éxito.');
    }
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();
        return back()->with('success', 'Cita eliminada con éxito.');
    }
}

@extends('layouts.master')
@section('title')
    Reservas del usuario
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">


        <!-- Listado de Reservas -->
        <div class="col-lg-8">
            @php
                $reservas = \App\Models\Reserva::where('user_id', Auth::id())->get();
            @endphp

            @if($reservas->count())
                @foreach($reservas as $reserva)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-black text-white d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Nombre: <strong>{{ $reserva->nombre }}</strong></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bold">Fecha de la reserva: {{ $reserva->fecha_reserva }}</p>
                            <p class="card-text text-center font-weight-bold">Personas: {{ $reserva->personas }}</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn bg-black white btn-sm">Editar</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $reserva->id }}">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $reserva->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $reserva->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $reserva->id }}">Confirmar eliminación</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ¿Estás seguro de que quieres eliminar esta reserva?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No tienes ninguna reserva.</p>
            @endif
            <a href="{{ route('reservas.create') }}" class="btn bg-black text-white">Pedir una nueva reserva +</a>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-black text-white">
                    <h5 class="card-title">Calendario de Reservas</h5>
                </div>
                <div class="card-body p-0">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.js"></script>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            locale: 'es',
            events: [
                @foreach($reservas as $reserva)
                {
                    title : '{{ $reserva->asunto }}',
                    start : '{{ \Carbon\Carbon::parse($reserva->fecha_reserva)->format('Y-m-d') }}'
                },
                @endforeach
            ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultView: 'month'
        });
    });
</script>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<style>
    #calendar {
        width: 100%;
        height: 100%;
    }
    .card-title {
        font-size: 1.25rem;
    }
    .card-text {
        font-size: 1rem;
    }
    @media (max-width: 768px) {
        .team .card {
            margin-bottom: 1rem;
        }
        .btn-outline-primary {
            margin-bottom: 0.5rem;
        }
    }
</style>
@endsection

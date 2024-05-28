@extends('layouts.master')
@section('title')
    Citas del usuario
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <!-- Calendario de Citas -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-black text-white">
                    <h5 class="card-title">Calendario de Citas</h5>
                </div>
                <div class="card-body p-0">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>

        <!-- Listado de Citas -->
        <div class="col-lg-8">
            @php
                $citas = \App\Models\Cita::where('user_id', Auth::id())->get();
            @endphp

            @if($citas->count())
                @foreach($citas as $cita)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-black text-white d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Asunto/Título: <strong>{{ $cita->asunto }}</strong></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center font-weight-bold">Fecha de la cita: {{ $cita->fecha_cita }}</p>
                            <p class="card-text text-center">Profesional en cargo: <strong>Dylan Leon</strong></p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $cita->id }}">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $cita->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $cita->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $cita->id }}">Confirmar eliminación</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ¿Estás seguro de que quieres eliminar esta cita?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
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
                <p>No tienes ninguna cita.</p>
            @endif
            <a href="{{ route('citas.create') }}" class="btn bg-black text-white">Pedir una nueva cita +</a>
        </div>
    </div>

    <section id="team" class="team py-5">
        <div class="container" data-aos="fade-up">
            <header class="section-header text-center mb-5">
                <h2>Nuestros Especialistas</h2>
                <p>Nuestro personal especializado, cada vez que pidas una cita uno de ellos se te asignará automáticamente para ponerse en contacto contigo cuando corresponda</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title">Walter White</h4>
                            <span class="text-muted">Boxeador Profesional</span>
                            <div class="m-3">
                                <img src="{{ URL::asset('images/chico.jpg') }}" alt="Walter White" class="img-fluid" style="height: 10rem; object-fit: cover; width: 100%;">
                            </div>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesentium, aliquid!</p>
                            <div>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title">Sarah Johnson</h4>
                            <span class="text-muted">Graduada de Fisioterapia</span>
                            <div class="m-3">
                                <img src="{{ URL::asset('images/fisio.jpg') }}" alt="Sarah Johnson" class="img-fluid" style="height: 10rem; object-fit: cover; width: 100%;">
                            </div>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesentium, aliquid!</p>
                            <div>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title">Dylan Leoón</h4>
                            <span class="text-muted">Experto en Artes Marciales</span>
                            <div class="m-3">
                                <img src="{{ URL::asset('images/marcial.jpg') }}" alt="William Anderson" class="img-fluid" style="height: 10rem; object-fit: cover; width: 100%;">
                            </div>
                            <p class="card-text mt-3">Te ayudará en todo tipo de problemas que puedas tener sobre tu movilidad o dolores corporales</p>
                            <div>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title">Amanda Jepson</h4>
                            <span class="text-muted">Boxeadora</span>
                            <div class="m-3">
                                <img src="{{ URL::asset('images/chica.jpg') }}" alt="Amanda Jepson" class="img-fluid" style="height: 10rem; object-fit: cover; width: 100%;">
                            </div>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesentium, aliquid!</p>
                            <div>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                @foreach($citas as $cita)
                {
                    title : '{{ $cita->asunto }}',
                    start : '{{ \Carbon\Carbon::parse($cita->fecha_cita)->format('Y-m-d') }}'
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
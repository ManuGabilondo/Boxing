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
       <div class="container">
        @php
            $citas = \App\Models\Cita::where('user_id', Auth::id())->get();
        @endphp
        @if($citas->count())
           @foreach($citas as $cita)


   <div class="card mb-4 shadow-sm">
    <div class="card-header bg-black text-white d-flex justify-content-between align-items-center">
    <h5 class="card-title ">Asunto/Título: <strong>{{ $cita->asunto }}</strong></h5>

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




     <small> Recuerda que el día de tu cita te pondrá en contacto contigo uno de nuestros profesionales por email,
       para cualquier duda o consulta no dudes en ponerte en contacto con nosotros por <a href="mngabilondo@gmail.com">nuestra dirección email</a>.
      </small> 
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
    </div>
@endforeach
        @else
            <p>No tienes ninguna cita.</p>
        @endif
        <a href="{{ route('citas.create') }}" class="btn btn-primary">Pedir una nueva cita</a>
    </div>

     <section id="team" class="team py-5">
    <div class="container" data-aos="fade-up">
        <header class="section-header text-center mb-5">
            <h2>Nuestros Especialistas</h2>
            <p>Nuestro personal especializado,cada vez que pidas una cita uno de ellos se te asignará automáticamente para ponerse en contacto contigo cuando corresponda</p>
        </header>

      
<div class="container my-4">
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

    </div>
</section>

@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
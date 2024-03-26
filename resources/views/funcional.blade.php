@extends('layouts.master')
@section('title')
    Entrenamientos Funcionales
@endsection
@section('content')
    <section class="introduccion py-5">
        <h1 class="text-center mb-4"><b>Entrenamientos funcionales</b></h1>
    </section>
    <section class="mis-entrenamientos py-5">
            <h2 class="text-center mb-4">Mis Rutinas</h2>
            <a href="entrenamientos"> 
    <div class="card">
                    <div class="card-body w-75">
                       Mis ejercicios
                        <i class="fas fa-arrow-right text-info"></i>
                    </div>
                </div>
                </a>
    </section>

    <section class="entrenamientos py-5">
        <div class="container">
        <h2 class="text-center mb-4">Rutinas para fortalecimiento y resistencia</h2>
        <div class="row">
            <!-- Primer entrenamiento -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body ">
                        <h3 class="card-title">Entrenamiento de core</h3>
                        <p class="card-text">Dedicado a zona del abdomen, repetir por 5</p>
                        <ol class="list-unstyled">
                            <li>Abdominales</li>
                            <li>Plancha Lateral</li>
                            <li>Crunch</li>
                            <li>Elevacion de rodillas</li>
                        </ol>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#coreModal">
                    Ver ejercicios
                </button>
                    </div>
                </div>
            </div>
            <!-- Segundo entrenamiento -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Entrenamiento de Tren Superior</h3>
                        <p class="card-text">Dedicado a espalda,pecho y brazos</p>
                        <ul class="list-unstyled">
                            <li>Flexiones</li>
                            <li>Fondos</li>
                            <li>Dominadas</li>
                            <li>Curl de Biceps</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#supModal">
                    Ver ejercicios
                </button>
                    </div>
                </div>
            </div>
            <!-- Tercer entrenamiento -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body ">
                        <h3 class="card-title">Entrenamiento para el Tren Inferior</h3>
                        <p class="card-text">Dedicado a piernas y glúteos</p>
                        <ul class="list-unstyled">
                            <li>Sentadilla</li>
                            <li>Comba</li>
                            <li>HipThrust</li>
                            <li>Zancadas</li>
                        </ul>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#infModal">
                    Ver ejercicios
                </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div>
        <h2 class="text-center mb-4">Videos</h2>
        
    </div>
{{-- @livewire('videos-funcional') --}}



<!-- Modals -->
@livewire('modales-funcional')
<!-- Modals -->

@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

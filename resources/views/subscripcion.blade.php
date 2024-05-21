

@extends('layouts.master')
@section('title')
    Subscripción de Usuario
@endsection
@section('content')

<h1>Tu suscripción</h1>
    @if(auth()->user()->premium == 1)
        <div class="alert alert-success" role="alert">
            ¡Tienes una suscripción activa y acceso a todos los datos!
        </div>

<hr>
            <div class="container my-5 center">
    <div class="card text-center " style="width: 15rem">
        <div class="card-header bg-black text-white">
            <h3 class="card-title">Plan Premium</h3>
            <p class="card-text">$7.99/mes</p>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Rutinas</strong> ilimitadas</li>
                <li class="list-group-item"><strong>100GB</strong> Almacenamiento</li>
                <li class="list-group-item"><strong>Acceso</strong> a todas las funciones</li>
                <li class="list-group-item"><strong>Soporte</strong> prioritario</li>
                <li class="list-group-item"><strong>Actualizaciones</strong> regulares</li>
            </ul>
        </div>
    </div>
</div>
        @else
        <div class="alert alert-warning" role="alert">
            No tienes una suscripción activa.
        </div>
        <div>
        @include('components.subs')
            
        </div>
    @endif


@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
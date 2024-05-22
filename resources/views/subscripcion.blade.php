

@extends('layouts.master')
@section('title')
    Subscripción de Usuario
@endsection
@section('content')
@php
    use App\Models\User; // Asegúrate de tener el modelo User
    $userCount = User::count();
    $premiumCount = User::where('premium', 1)->count();
    $freeCount = User::where('premium', 0)->count();
    $clientCount = User::where('nivel',3)->count();
@endphp
<h1>Tu suscripción</h1>
    @if(auth()->user()->premium == 1)
        <div class="alert alert-success" role="alert">
            ¡Tienes una suscripción activa y acceso a todos los datos!
        </div>

<hr>
<div class="container my-5 d-flex justify-content-center">
    <div class="card text-center shadow" style="width: 18rem;">
        <div class="card-header bg-dark text-white">
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

<div ">
        <div class="card" style="min-height: 150px;max-height:150px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="card-body">
                <div class="avatar-sm float-end">
                    <div class="avatar-title bg-primary-subtle text-primary rounded fs-3xl">
                        <i class="bi bi-box"></i>
                    </div>
                </div>
                <p class="fs-md text-muted mb-4">Eres uno de los usuarios <br> Premium de nuestra plataforma</p>
                <h4 class="mb-3"><span class="counter-value" data-target="{{ $premiumCount }}">0</span> Usuarios Subscritos premium contigo inluído!!</h4>
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
<script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                var $this = $(this);
                var targetValue = $this.data('target');
                var currentValue = parseInt($this.text(), 10);
                var increment = Math.ceil(targetValue / 150);

                var interval = setInterval(function() {
                    if (currentValue < targetValue) {
                        currentValue += increment;
                        $this.text(currentValue);
                    } else {
                        clearInterval(interval);
                        $this.text(targetValue);
                    }
                }, 50); 
            });
        });
    </script>
@endsection
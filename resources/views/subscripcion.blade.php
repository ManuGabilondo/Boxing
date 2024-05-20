

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
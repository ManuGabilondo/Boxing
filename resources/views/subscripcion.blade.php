

@extends('layouts.master')
@section('title')
    Subscripción de Usuario
@endsection
@section('content')

   <div>
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
            <a href="{{ route('subscripcion.edit', auth()->user()->id) }}" class="btn btn-primary">Suscríbete ahora</a>
        </div>
    @endif
</div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
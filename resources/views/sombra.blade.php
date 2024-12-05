@extends('layouts.master')
@section('title')
    Entrenamiento de Sombra
@endsection
@section('content')
    <div class="container">
        <section >
            <h3 class="m-auto text-center">Carta Restaurante</h3>

            @livewire('sombra-divs')
        </section>
    </div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

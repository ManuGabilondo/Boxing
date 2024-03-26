@extends('layouts.master')
@section('title')
    Entrenamiento de Sombra
@endsection
@section('content')
    <div class="container">
        <section>
            <h1 class="m-auto text-center">Lista de ejercicios de sombra en solitario para refinar tus movimientos</h1>
        </section>
        <section>
          @livewire('videos-sombra')  
        </section>
        <section >
            <h3 class="m-auto text-center">Recomendaciones</h3>
            
            @livewire('sombra-divs')
        </section>
    </div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
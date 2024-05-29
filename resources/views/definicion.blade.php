@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')

@section('page-title')

@endsection
<h2 class="text-center m-auto">Recetas para definición y bajada calórica</h2>

<br><hr>
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="text-center">
        <h1 class="display-4">ESTAREMOS CONTIGO PRONTO<span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>
    </div>
    <br>
    <hr>
</div>
<div class="text-center mt-4">
    <h5>Esperamos con ansías poder ofrecerte las mejores recetas para definir y bajar de peso. ¡Vuelve pronto!
    </h5>
</div>
    
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

<style>
    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
    
    .dot-1 {
        animation: blink 1.5s infinite;
    }
    
    .dot-2 {
        animation: blink 1.5s infinite 0.5s;
    }
    
    .dot-3 {
        animation: blink 1.5s infinite 1s;
    }
    </style>
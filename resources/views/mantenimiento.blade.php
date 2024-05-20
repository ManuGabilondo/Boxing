@extends('layouts.master')
@section('title')
    Dietas de mantenimiento
@endsection
@section('content')
@section('page-title')

@endsection
<h2 class="text-center m-auto">Recetas para mantenimiento y energía</h2>

<br><hr>
<div class="d-flex justify-content-center align-items-center">
    <div class="text-center">
        <h1 class="display-4">COMING SOON<span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></h1>
    </div>
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
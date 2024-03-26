@extends('layouts.master')
@section('title')
    Ejercicios de Cardio
@endsection
@section('content')

    @livewire('cardio-divs')

    @livewire('cardio-lista')
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
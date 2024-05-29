@extends('layouts.master')
@section('title')
    Dietas de volumen
@endsection
@section('content')

@section('page-title')

@endsection
@livewire('vol-recetas')
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
@section('styles')
<style>
    .card-img-top {
        height: 200px; /* Puedes ajustar la altura según tus necesidades */
        object-fit: cover;
    }

    .card {
        height: 100%;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card h4 {
        margin-bottom: 15px;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }

    .row {
        margin-bottom: 20px;
    }
</style>
@endsection
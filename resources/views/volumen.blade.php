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

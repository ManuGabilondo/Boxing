@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')

@section('page-title')

@endsection
@livewire('def-recetas')
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

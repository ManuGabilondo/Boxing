@extends('layouts.master')
@section('title')
    Usuarios
@endsection
@section('content')

@section('page-title')

@endsection
@livewire('data-users', ['model' => 'App\Models\User'])
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
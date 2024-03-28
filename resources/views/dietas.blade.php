@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')

@section('page-title')

@endsection
@livewire('dash-diet')
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

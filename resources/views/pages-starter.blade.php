@extends('layouts.master')
@section('title')
    Starter
@endsection
@section('content')

@section('page-title')
    <x-breadcrumb pagetitle="Pages" title="Starter" />
@endsection


@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

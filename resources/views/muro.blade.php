@extends('layouts.master')
@section('title')
    Muro de publicaciones
@endsection
@section('content')

@section('page-title')
Muro
@endsection
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#postModal">
  Añadir nuevo post
</button>
@livewire('modal-posts')
@livewire('divs-publicaciones')
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

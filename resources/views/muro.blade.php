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
   Publicar
</button>
@livewire('modal-posts')
<div style="display: flex;">
   <div class="row">
    <div class="col-md-9">
        @livewire('divs-publicaciones')
    </div>

    <div class="col-md-3">
        <ul>
            <li>Respete a los demás usuarios</li>
            <li>No publique contenido ofensivo</li>
            <li>No publique contenido sexual</li>
            <li>No publique contenido violento</li>
            <li>No publique contenido que incite al odio</li>
            <li>No publique contenido que incumpla derechos de autor</li>
            <li>No publique contenido falso</li>
            <li>No publique contenido que incumpla la ley</li>
        </ul>
    </div>
</div>
</div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

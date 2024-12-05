@extends('layouts.master')
@section('title')
    Muro de publicaciones
@endsection
@section('content')

@section('page-title')
    Muro
@endsection

<div class="container-fluid my-5">
    <button type="button" class="btn btn-primary btn-lg bg-black" data-toggle="modal" data-target="#postModal">
        <i class="fas fa-plus-circle"></i> Publicar
    </button>
</div>
@livewire('modal-posts')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            @livewire('divs-publicaciones')
        </div>
<!-- <a href="mantenimiento">cabezin</a> -->
        <div class="col-md-2">
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
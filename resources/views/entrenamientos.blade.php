@extends('layouts.master')
@section('title')
    Entrenamiento personalizado
@endsection
@section('content')
    <section class="introduccion mt-4 py-5">
        <h4 class="text-center mb-4">No tienes ningún entrenamiento para tí</b></h4>
    </section>
    <center>
<div class="card w-75">
                    <div class="card-body text-truncate">
                      Crear Plan de Entrenamiento Personalizado
                      <i class="fa fa-plus text-info"></i>
                    </div>
                </div>
    </center>
                
           
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

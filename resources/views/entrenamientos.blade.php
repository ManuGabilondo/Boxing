@extends('layouts.master')
@section('title')
    Entrenamiento personalizado
@endsection
@section('content')

    <section class="introduccion mt-4 py-5">
        <h4 class="text-center mb-4">No tienes ningún entrenamiento personalizado</b></h4>
    </section>

                <div class="card">
                    <div class="card-body text-truncate">
                      Crear Entrenamiento personalizado
                    </div>
                </div>
            </div>

@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

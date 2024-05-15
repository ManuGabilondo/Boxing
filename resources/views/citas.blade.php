@extends('layouts.master')
@section('title')
    Citas del usuario
@endsection
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
       <div class="container">
        @php
            $citas = \App\Models\Cita::where('user_id', Auth::id())->get();
        @endphp
        @if($citas->count())
           @foreach($citas as $cita)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Asunto/Título : {{ $cita->asunto }}</h5>
        </div>
       <b> <p class="text-center">Fecha de la cita: {{ $cita->fecha_cita }}</p></b>
     
       <p class="text-center">Profesional en cargo: Dylan Leon</p>

       <hr>
<a href="{{ route('citas.edit', $cita->id) }}" class=" edit-button ">Editar</a>
        <button type="button" class=" delete-button text-center" data-toggle="modal" data-target="#deleteModal{{ $cita->id }}">
               X
            </button>
        </div>
     <small> Recuerda que el día de tu cita te pondrá en contacto contigo uno de nuestros profesionales por email,
       para cualquier duda o consulta no dudes en ponerte en contacto con nosotros por <a href="mngabilondo@gmail.com">nuestra dirección email</a>.
      </small> 
        <!-- Modal -->
        <div class="modal fade" id="deleteModal{{ $cita->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $cita->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel{{ $cita->id }}">Confirmar eliminación</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de que quieres eliminar esta cita?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
        @else
            <p>No tienes ninguna cita.</p>
        @endif
        <a href="{{ route('citas.create') }}" class="btn btn-primary">Pedir una nueva cita</a>
    </div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
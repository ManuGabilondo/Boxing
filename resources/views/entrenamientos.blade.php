@extends('layouts.master')
@section('title')
    Entrenamiento personalizado
@endsection
@section('content')
    <section class="introduccion mt-4 py-5">
        @php
        $rutinas = \App\Models\Rutina::with('user')->get();
    @endphp
    @if($rutinas->isEmpty())
            <h2 class="text-center">No tienes rutinas personalizadas por ahora</h2>
        @else
    @foreach($rutinas as $rutina)
    <div class="card w-75 mx-auto mb-4 shadow-sm">
    @if($rutina->user)
        <div class="card-header bg-black text-white d-flex justify-content-between align-items-center">
            <span>{{ $rutina->user->name }} - {{ $rutina->titulo}}</span>
            <small class="text-light">{{ $rutina->created_at->format('d/m/Y') }}</small>
        </div>
    @endif
    <div class="card-body">
        <p class="card-text">{{ $rutina->descripcion }}</p>
        @if($rutina->imagen)
            <img src="{{ asset('storage/' . $rutina->imagen) }}" alt="Imagen de entrenamiento" class="img-fluid rounded mb-3">
        @endif
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#editRutinaModal{{ $rutina->id }}">
            Editar
        </button>
    </div>
    <form action="{{ route('rutinas.destroy', $rutina->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class=" text-muted text-right">
                        <button type="submit" class="delete-button">X</button>
                            </div>
                        </form>
</div>
                
       
        @livewire('editar-rutina', ['rutina' => $rutina])
    @endforeach
    @endif
    </section>
    <center>
        <div class="card w-75" data-toggle="modal" data-target="#crearPlanModal">
            <div class="card-body text-truncate">
                Crear Plan de Rutina Personalizado
                <i class="fa fa-plus text-info"></i>
            </div>
        </div>
    </center>

    <!-- Modal -->
    <div class="modal fade" id="crearPlanModal" tabindex="-1" role="dialog" aria-labelledby="crearPlanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="crearPlanModalLabel">Crear Plan de Rutina Personalizado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <form action="{{ route('entrenamientos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input class="form-control" id="titulo" name="titulo" rows="3"></input>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Nueva rutina</button>      </div>
    </div>
    </form>      </div>
      
  </div>
</div>
@endsection

 @section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection 
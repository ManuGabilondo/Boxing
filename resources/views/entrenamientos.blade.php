@extends('layouts.master')
@section('title')
    Entrenamiento personalizado
@endsection
@section('content')
    <section class="introduccion mt-4 py-5">
        @php
            $rutinas = \App\Models\Rutina::where('user_id', auth()->id())->get();
        @endphp
        @if($rutinas->isEmpty())
            <h4 class="text-center mb-4">No tienes ningún entrenamiento para ti</h4>
        @else
            @foreach($rutinas as $rutina)
                <div class="card w-75">
                    <img class="card-img-top" src="{{ $rutina->foto }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ $rutina->descripcion }}</p>
                    </div>
                </div>
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
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Guardar cambios</button>      </div>
    </div>
    </form>      </div>
      
  </div>
</div>
@endsection

 @section('scripts')
<!-- App js -->
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection 
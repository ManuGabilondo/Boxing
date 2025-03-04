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
                            <img src="{{ asset('storage/' . $rutina->imagen) }}" alt="Imagen de entrenamiento" class="img-fluid rounded mb-3" style="max-width: 100%; max-height: 300px;">
                        @endif
                        <br>
                        <button type="button" class="btn bg-black white btn-sm" data-toggle="modal" data-target="#editRutinaModal{{ $rutina->id }}">
                            Editar
                        </button>
                        <button type="button" class=" delete-button btn-sm" data-toggle="modal" data-target="#deleteRutinaModal{{ $rutina->id }}">
                            X
                        </button>
                    </div>
                </div>
                @livewire('editar-rutina', ['rutina' => $rutina])

                <!-- Modal de Confirmación de Eliminación -->
               <!-- Modal de Confirmación de Eliminación -->
               <div class="modal fade" id="deleteRutinaModal{{ $rutina->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteRutinaModalLabel{{ $rutina->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="col-2 text-center">
                        <i class="fas fa-trash-alt fa-2x"></i>
                    </div>
                    <h5 class="modal-title col-10 text-left" id="deleteRutinaModalLabel{{ $rutina->id }}">Confirmar Eliminación</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body text-center">
                <p class="lead">¿Estás seguro de que quieres eliminar esta rutina?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <form action="{{ route('rutinas.destroy', $rutina->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-black white">Eliminar</button>
                </form>
            </div>
        </div>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="custom-modal">
                    <div class="modal-left">
                        <div class="text-center">
                            <i class="fas fa-dumbbell fa-5x"></i>
                            <h4 class="mt-3 white">Planea tus actividades y controla tus progresos online</h4>
                        </div>
                    </div>
                    <div class="modal-right">
                        <h5 class="modal-title" id="crearPlanModalLabel">Crear Plan de Rutina Personalizado</h5>
                        <form action="{{ route('entrenamientos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen">
                            </div>
                            <div class="mb-3">
                                <label for="dias" class="form-label">Días a la semana</label>
                                <input type="number" class="form-control" id="dias" name="dias" placeholder="Cuantos días a la semana sigues esta rutina">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Nueva rutina</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('styles')
<style>
    .custom-modal {
        display: flex;
    }
    .modal-left {
        background-color: #76C7C0;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 1;
        padding: 20px;
    }
    .modal-left img {
        max-width: 100px;
    }
    .modal-right {
        padding: 40px;
        flex: 1;
        background-color: #23395B;
        color: white;
    }
    .modal-right .form-control, .modal-right .form-control-file {
        background-color: #23395B;
        color: white;
        border: 1px solid #fff;
    }
    .modal-right .form-control::placeholder {
        color: #ccc;
    }
    .modal-right .btn-primary {
        background-color: #76C7C0;
        border: none;
    }
    .custom-checkbox .form-check-input {
        background-color: #23395B;
        border: 1px solid #fff;
    }
</style>
@endsection
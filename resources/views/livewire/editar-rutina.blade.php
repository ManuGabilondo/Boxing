<div class="modal fade" id="editRutinaModal{{ $rutina->id }}" tabindex="-1" role="dialog" aria-labelledby="editRutinaModalLabel{{ $rutina->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="editRutinaModalLabel{{ $rutina->id }}">Editar Rutina</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center bg-dark text-white">
                <i class="fas fa-pencil-alt fa-3x mx-3"></i>
                <div class="flex-grow-1">
                    <form action="{{ route('rutinas.update', $rutina->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $rutina->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $rutina->descripcion }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen" name="imagen">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary bg-black">Guardar cambios</button>
                        </div>
                    </form>
                </div>
                <i class="fas fa-dumbbell fa-3x mx-3"></i>
            </div>
        </div>
    </div>
</div>
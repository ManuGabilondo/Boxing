<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title white" id="postModalLabel">Nuevo Post - ¡Comparte lo que piensas!</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark text-white">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center align-items-center">
              <i class="fas fa-comments" style="font-size: 6rem; color: white;"></i>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
              </div>
              <div class="form-group">
                <label for="text">Texto</label>
                <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
              </div>
              <div class="form-group">
                <label for="foto">Sube una imagen o foto para acompañar!</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary bg-black">Guardar cambios</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
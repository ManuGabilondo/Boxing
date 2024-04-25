<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Nuevo Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="titulo">Título</label>
            <input class="form-control" id="titulo" name="titulo" rows="3">
          </div>
          <div class="form-group">
            <label for="text">Texto</label>
            <textarea class="form-control" id="text" name="text" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
          </div>
          <button type="submit" class="btn btn-danger">Guardar cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>
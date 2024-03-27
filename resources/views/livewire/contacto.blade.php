<div class="card my-5">
    <div class="row g-0">
        <div class="col-md-7">
            <div class="card-body">
                <h3 class="display-4">CONTÁCTANOS</h3>
                <hr>
                <form wire:submit.prevent="submitForm">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="30">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required maxlength="30">
    </div>
    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required maxlength="100"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">ENVIAR</button>
</form>
            </div>
        </div>
        <div class="col-md-5" style="background: url('{{ URL::asset('images/contacto.jpg') }}') no-repeat center center; background-size: cover;" aria-label="Contacto">
        </div>
    </div>
</div>
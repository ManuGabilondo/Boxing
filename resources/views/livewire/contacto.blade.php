<div class="card my-5">
    <div class="row g-0">
        <div class="col-md-7">
            <div class="card-body">
                <h3 class="display-4">CONTÁCTANOS</h3>
                <hr>
                <form action="mailto:mngabilondo@gmail.com" method="POST" onsubmit="return validateAndSendEmail()">

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="30" pattern="[a-zA-Z0-9\s\-]+">
        <small class="form-text text-muted">Solo letras y números</small>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" name="email" required maxlength="30">
        <small class="form-text text-muted">Utiliza un email válido</small>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" pattern="^\d{7,10}$" maxlength="10">
        <small class="form-text text-muted">Solo números válidos</small>
    </div>
    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje<span class="text-danger">*</span></label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required maxlength="300"></textarea>
    </div>
    <button type="submit" class="btn btn-primary bg-black">ENVIAR</button>
</form>



            </div>
        </div>
        <div class="col-md-5" style="background: url('{{ URL::asset('images/contacto.jpg') }}') no-repeat center center; background-size: cover;" aria-label="Formulario de contacto">
        </div>
    </div>
</div>
<div class="card my-5">
    <div class="row g-0">
        <div class="col-md-7">
            <div class="card-body">
                <h3 class="display-4">CONTÁCTANOS</h3>
                <hr>
                <form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="30" pattern="[a-zA-Z0-9\s\-]+">
        Solo letras y números
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email<span
                                                            class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" name="email" required maxlength="30">
        Utiliza un email válido
    </div>
    <div class="mb-3">
    <label for="telefono" class="form-label">Teléfono<span class="text-danger"></span></label>
    <input type="tel" class="form-control" id="telefono" name="telefono"  pattern="^\d{7,10}$" maxlength="10">
    Solo números válidos
</div>
    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje<span
                                                            class="text-danger">*</span></label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required maxlength="300"></textarea>
    </div>
    <button type="submit" class="btn button">ENVIAR</button>
</form>
            </div>
        </div>
        <div class="col-md-5" style="background: url('{{ URL::asset('images/contacto.jpg') }}') no-repeat center center; background-size: cover;" aria-label="Contacto">
        </div>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $destinatario = "mngabilondo@gmail.com"; // Tu dirección de correo electrónico

    $asunto = "Nuevo mensaje de contacto desde el sitio web";
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo.= "Email: $email\n";
    $cuerpo.= "Teléfono: $telefono\n";
    $cuerpo.= "Mensaje: $mensaje\n";

    $headers = "From: $email\r\n";
    $headers.= "Reply-To: $email\r\n";
    $headers.= "X-Mailer: PHP/". phpversion();

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado exitosamente.');</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar el mensaje.');</script>";
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes de Suscripción</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-subscription {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin: 20px;
            padding: 20px;
            transition: transform 0.2s;
        }
        .card-subscription:hover {
            transform: scale(1.05);
        }
        .card-subscription-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 20px;
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .card-subscription-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-subscription-price {
            font-size: 1.25rem;
            color: #007bff;
        }
        .card-subscription-body {
            padding: 20px;
        }
        .card-subscription-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 10px 20px;
            border-radius: 0 0 0.25rem 0.25rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <!-- Plan Gratuito -->
        <div class="col-md-4">
            <div class="card card-subscription">
                <div class="card-subscription-header text-center">
                    <h3 class="card-subscription-title">Plan Gratuito</h3>
                    <p class="card-subscription-price">Gratis</p>
                </div>
                <div class="card-subscription-body">
                    <ul class="list-unstyled">
                        <li><strong>1</strong> Proyecto</li>
                        <li><strong>2 reservas</strong>  Máximo al mes</li>
                        <li><strong>Acceso</strong> a funciones básicas</li>
                        <li><strong>Soporte</strong> limitado</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Plan de Pago -->
        <div class="col-md-4">
            <div class="card card-subscription">
                <div class="card-subscription-header text-center">
                    <h3 class="card-subscription-title">Plan Premium</h3>
                    <p class="card-subscription-price">$7.99/mes</p>
                </div>
                <div class="card-subscription-body">
                    <ul class="list-unstyled">
                        <li><strong>Rutinas</strong> ilimitadas</li>
                        <li><strong>Sin Máximo </strong> de reservas</li>
                        <li><strong>Acceso</strong> a todas las funciones</li>
                        <li><strong>Soporte</strong> prioritario</li>
                        <li><strong>Actualizaciones</strong> regulares</li>
                    </ul>
                </div>
                <div class="card-subscription-footer text-center">
                <a href="{{ route('subscripcion.edit', auth()->user()->id) }}" class="btn btn-primary">Suscríbete ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

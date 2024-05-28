<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Entrenamiento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .dash-card {
            transition: transform 0.3s ease;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dash-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-size: 1.5rem;
        }
        .card i {
            font-size: 3rem;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container mt-3">
    <div class="row mb-4">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <a href="entrenamientos" class="text-decoration-none w-100">
                <div class="card dash-card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">Entrenamiento funcional</h2>
                        <p class="card-text flex-grow-1">Actividades y ejercicios para fortalecer y ejercitar</p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <a href="sombra" class="text-decoration-none w-100">
                <div class="card dash-card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">Sombra</h2>
                        <p class="card-text flex-grow-1">Videos, ejemplos y movimientos para realización de entrenamiento de sombra</p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-user-ninja"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <a href="cardio" class="text-decoration-none w-100">
                <div class="card dash-card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">Cardio</h2>
                        <p class="card-text flex-grow-1">Ideas y ejemplos para tu entrenamiento de cardio saludable!</p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <a href="../dietas" class="text-decoration-none w-100">
                <div class="card dash-card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">Dietas</h2>
                        <p class="card-text flex-grow-1">Las mejores dietas para un eficaz rendimiento físico</p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-carrot"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <a href="muro" class="text-decoration-none w-100">
                <div class="card dash-card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">Muro</h2>
                        <p class="card-text flex-grow-1">Consulta qué han colgado en su muro otros usuarios</p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <a href="#sobre-nosotros" class="text-decoration-none w-100">
                <div class="card dash-card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title">Nosotros</h2>
                        <p class="card-text flex-grow-1">Conoce sobre nuestra empresa</p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
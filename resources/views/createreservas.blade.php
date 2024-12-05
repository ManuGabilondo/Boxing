@extends('layouts.master')
@section('title')
Reservas del usuario
@endsection
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<h2>NUEVA RESERVA</h2>

<div class="container mt-5">
    <div class="row contact-section">
        <div class="col-md-6 contact-form">
            <h4>Reserva una cita</h4>
            <form action="{{ route('reservas.store') }}" method="POST">
                   @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                         <label for="asunto">Nombre</label>*
                    <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre de la reserva">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha_reserva">Fecha de la reserva</label>*
    <input type="text" id="fecha_reserva" class="form-control" name="fecha_reserva" autocomplete="nope" required placeholder="Fecha de la reserva">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Teléfono</label>
                        <input type="number" class="form-control" maxlength="11" id="phone" placeholder="Número de teléfono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" inputmode="numeric">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="company">Personas</label>
                        <input type="number" class="form-control" id="personas" name="personas" placeholder="Numero de Personas">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Alergias </label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Alergias a tener en cuenta por nuestros especialistas"></textarea>
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <button type="submit" class="btn btn-primary white">Guardar +</button>
            </form>
        </div>
        <div class="col-md-6 contact-info text-dark">
            <h5>Inormación conveniente</h5>
            <p>Las reservas se deben realizar con al menos un día de antelación. Cada usuario puede realizar tantas reservas como desee. Recuerda que el número máximo de personas por cita es 40. ¡Reserva tu lugar con tiempo y asegura tu cita!</p>
            <p><i class="fas fa-map-marker-alt"></i> C de Sant Domènec Savio, 39, Rascanya, 46019 València, Valencia</p>
            <p><i class="fas fa-phone"></i> +34 (639) 209 697</p>
            <p><i class="fas fa-envelope"></i> contacto@Malkebien.com</p>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>

<!-- jQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="{{ URL::asset('js/jquery-ui/jquery-ui.min.js') }}"></script>

<script>
$( function() {
    $( "#fecha_reserva" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "2024:2025",
        dateFormat: "dd-mm-yy"
    });
} );
</script>

@endsection
@section('styles')
<style>
  .contact-section {
            display: flex;
            flex-wrap: wrap;
            background: #f8f9fa;
        }
        .contact-form {
            flex: 1;
            padding: 30px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contact-info {
            flex: 1;
            padding: 30px;
            background:  blue;
            color: black;
        }
        .contact-info h5, .contact-info p, .contact-info a {
            color: #fff;
        }
        </style>
@endsection

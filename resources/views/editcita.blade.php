@extends('layouts.master')
@section('title')
Editar Cita
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

<h2>EDITAR CITACIÓN</h2>

<div class="container mt-5">
    <div class="row contact-section">
        <div class="col-md-6 contact-form">
            <h4>Editar una cita</h4>
            <form action="{{ route('reservas.update', $cita->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required value="{{$cita->asunto}}">
                </div>
                <div class="form-group">
                    <label for="fecha_reserva">Fecha de la cita</label>
                    <input type="text" id="fecha_reserva" autocomplete="nope" name="fecha_reserva" required value="{{$cita->fecha_reserva}}">
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col-md-6 contact-info">
            <h5>Información conveniente</h5>
            <p>Las reservas que pidas significan un periodo de tiempo en el cual uno de nuestros profesionales se pondrá en contacto con usted para llevar acabo un monitoreo,al pedir su cita obtendremos su información de contacto para solamente ese fin</p>
            <p><i class="fas fa-map-marker-alt"></i> 37 Carrer de la Virgen de la Purificacion, VLC 46900</p>
            <p><i class="fas fa-phone"></i> +34 (603) 873 147</p>
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

<!-- jQuery UI -->
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
            background: #343a40;
            color: #fff;
        }
        .contact-info h5, .contact-info p, .contact-info a {
            color: #fff;
        }
</style>
@endsection

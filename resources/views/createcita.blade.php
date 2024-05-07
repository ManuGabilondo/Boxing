@extends('layouts.master')
@section('title')
Citas del usuario
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
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('citas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required>
                </div>
                <div class="form-group">
    <label for="fecha_cita">Fecha de la cita</label>
    <input type="text" id="fecha_cita" name="fecha_cita" required>
</div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
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
    $( "#fecha_cita" ).datepicker({
        showButtonPanel: true, // Muestra un panel con botones para ir al día de hoy y cerrar el datepicker
        changeMonth: true, // Permite al usuario cambiar el mes usando un menú desplegable
        changeYear: true, // Permite al usuario cambiar el año usando un menú desplegable
        yearRange: "2020:2030", // Establece el rango de años disponibles en el menú desplegable del año
        dateFormat: "dd-mm-yy" // Establece el formato de la fecha
    });
} );
</script>

@endsection
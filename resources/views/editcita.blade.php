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
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('citas.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required value="{{$cita->asunto}}">
                </div>
                <div class="form-group">
    <label for="fecha_cita">Fecha de la cita</label>
    <input type="text" id="fecha_cita" name="fecha_cita" required value="{{$cita->fecha_cita}}">
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
         changeMonth: true, 
        changeYear: true, 
        yearRange: "2024:2025", 
        dateFormat: "dd-mm-yy" 
    });
} );
</script>

@endsection
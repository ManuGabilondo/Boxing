@extends('layouts.master')
@section('title')
Citas del usuario
@endsection
@section('content')
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

@endsection
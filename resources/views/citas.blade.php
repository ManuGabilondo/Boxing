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
       <div class="container">
        @php
            $citas = \App\Models\Cita::where('user_id', Auth::id())->get();
        @endphp
        @if($citas->count())
           @foreach($citas as $cita)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $cita->asunto }}</h5>
        </div>
        <p class="">{{ $cita->fecha_cita }}</p>
        <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('citas.destroy', $cita->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </div>
@endforeach
        @else
            <p>No tienes ninguna cita.</p>
        @endif
        <a href="{{ route('citas.create') }}" class="btn btn-primary">Pedir una nueva cita</a>
    </div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
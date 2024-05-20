
@extends('layouts.master')
@section('title')
    Perfil de usuario
@endsection
@section('content')

@section('page-title')

@endsection
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#info-perfil">Información de perfil</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#plan-cuenta">Plan de la cuenta</a>
        </li> -->
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="info-perfil">
        <div class="card p-4">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ $user->avatar ? URL::asset('storage/' . $user->avatar) : URL::asset('images/default-avatar.png') }}" alt="Avatar" class="img-fluid rounded-circle mb-2">
            <h4>{{ $user->name }}</h4>
        </div>
        <div class="col-md-8">
            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar:</label>
                    <input type="file" id="avatar" name="avatar" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar perfil</button>
            </form>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
.img-fluid {
    width: 60%; 
    height: 80%;
    object-fit: cover; 
}
</style>
        </div>
        <div class="tab-pane" id="plan-cuenta">
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

@extends('layouts.master')
@section('title')
    Perfil de usuario
@endsection
@section('content')

@section('page-title')

@endsection
<div class="container">



        <div class="tab-pane active" id="info-perfil">

<div class="container my-5">
    <div class="row">
        <!-- Avatar Section -->
        <div class=" mb-4">
            <div class="card p-4">
<div class="row">
                <div class="col-md-3">
                <h4>{{ $user->name }}</h4>
                    <img src="{{ $user->avatar ? URL::asset('storage/' . $user->avatar) : URL::asset('images/default-avatar.png') }}" alt="Avatar" class="img-fluid rounded-circle mb-2" style="object-fit: cover";
                    >

            </div>

<div class="col-md-9">

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
                        <label for="avatar" class="form-label">Foto de perfil:</label>
                        <input type="file" id="avatar" name="avatar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary bg-black">Actualizar perfil</button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fab fa-twitter"></i> <span>@the{{ $user->name }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fab fa-instagram"></i> <span>@cool{{ $user->name }}_</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <i class="fab fa-facebook"></i> <span>face{{ $user->name }}</span>
                    </li>
                </ul>
            </div>
        </div>
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
.pricing .box {
            padding: 5%;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .pricing .box.featured {
            background: #f7f7f7;
            border: 2px solid #007bff;
        }
        .pricing .box h3 {

            margin: 2%;
        }
        .pricing .box h4 {

            margin-bottom: 2%;
        }
        .pricing .box ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }
        .pricing .box ul li {
            padding: 10px 0;
            border-bottom: 1px solid #f1f1f1;
        }
        .pricing .box ul .na {
            color: #ccc;
            text-decoration: line-through;
        }
        .pricing .btn-buy {
            background: #007bff;
            color: #fff;

            text-transform: uppercase;
            transition: 0.3s;
        }
        .pricing .btn-buy:hover {
            background: #0056b3;
            color: #fff;
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

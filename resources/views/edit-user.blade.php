
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
         <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#plan-cuenta">Plan de la cuenta</a>
        </li> 
    </ul>

    <div class="tab-content">
<div class="tab-pane " id="plan-cuenta">
        <div class="card p-4">
    <div class="row">
      <section id="pricing" class="pricing section-bg py-5">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="box" data-aos="fade-up" data-aos-delay="100">
                    <h3>Gratis</h3>
                    <h4><sup></sup>0<span> €/ mes</span></h4>
                    <ul>
                        <li>Máximo 4 rutinas</li>
                        <li>2 posts diarios</li>
                        <li>Máximo 3 citas al mes</li>
                        <li class="na">Acceso a vídeos</li>
                        <li class="na">Citas ilimitadas</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="{{route('subscripcion')}}" class="btn btn-buy">Pasarse Ahora</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                    <h3>Premium</h3>
                    <h4><sup>€</sup>7'<span>99 €/ mes</span></h4>
                    <ul>
                        <li>Rutinas ilimitadas</li>
                        <li>Citas ilimitadas</li>
                        <li>Sin máximo de posts</li>
                        <li>Acceso a videos</li>
                        <li >Citas ilimitadas</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="{{route('subscripcion')}}" class="btn btn-buy">Pasarse Ahora</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
    </div>
</div>
</div>


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

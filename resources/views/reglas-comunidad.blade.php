 @extends('layouts.master')
@section('title')
    Reglas de Comunidad
@endsection
@section('content')df
@section('page-title')
    <x-breadcrumb pagetitle="Pages" title="Reglas de Comunidad" />
@endsection
 <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="m-auto text-center">Normas de la Comunidad</h1>
                <p>Bienvenido a nuestra comunidad. Para mantener un ambiente seguro y respetuoso para todos los usuarios, hemos establecido las siguientes normas:</p>
                <ul>
                    <li><i class="fas fa-check"></i> Se amable y respetuoso con los demás usuarios.</li>
                    <li><i class="fas fa-check"></i> No compartas contenido ofensivo, violento o discriminatorio.</li>
                    <li><i class="fas fa-check"></i> Respeta la privacidad de otros usuarios. No compartas información personal sin permiso.</li>
                    <li><i class="fas fa-check"></i> Evita publicar spam o contenido no relacionado con el tema del muro.</li>
                    <li><i class="fas fa-check"></i> No promociones productos o servicios sin autorización previa.</li>
                    <li><i class="fas fa-check"></i> Reporta cualquier comportamiento inapropiado a los administradores.</li>
                </ul>
                <p>Estas normas están diseñadas para crear una experiencia positiva para todos los miembros de la comunidad. El incumplimiento de estas normas puede resultar en la eliminación de contenido, la suspensión de la cuenta o la prohibición permanente.</p>
                <p>Gracias por ser parte de nuestra comunidad y ayudarnos a mantener un ambiente seguro y agradable para todos.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <img src="https://via.placeholder.com/200" alt="Logo de la Comunidad" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

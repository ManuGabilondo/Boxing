@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')

@section('page-title')

@endsection
@livewire('carousel')
@livewire('dash-divs')
@include('cabezon')
<hr>
@livewire('sobre-nosotros')
@livewire('contacto')
@livewire('sayings')
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>


<script>function validateAndSendEmail() {
  var nombre =document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var mensaje = document.getElementById("mensaje").value;

    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/;
    if (!emailPattern.test(email)) {
        iziToast.error({
            title: 'Error',
            message: 'Por favor, introduce una dirección de correo válida.',
            position: 'topRight'
        });
        return false;
    }

    if (telefono.trim() === "" || mensaje.trim() === "") {
        iziToast.error({
            title: 'Error',
            message: 'Todos los campos son obligatorios.',
            position: 'topRight'
        });
        return false;
    }

    var mailtoLink = `mailto:mngabilondo@gmail.com?subject=Contacto de Cliente Malkebien&body=Nombre: ${nombre}%0D%0AEmail: ${email}%0D%0ATeléfono: ${telefono}%0D%0A%0D%0AMensaje:%0D%0A${mensaje}`;

    window.location.href = mailtoLink;

    return false;
}
</script>

@endsection
@section('styles')
<!-- App css -->
    <style>
        .header-image {
            background-image: url('{{ URL::asset('images/login/03.jpeg') }}');
            height: 25rem;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .header-content{
            position: absolute;
            bottom: 5%;
            left: 2%;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }
        .testimonials .testimonial-item {
  box-sizing: content-box;
  padding: 30px;
  /* margin: 40px 30px; */
  box-shadow: 0px 0 20px rgba(1, 41, 112, 0.1);
  background: #fff;
  min-height: 10rem;
  display: flex;
  flex-direction: column;
  text-align: center;
  transition: 0.3s;
}

.testimonials .testimonial-item .stars {
  margin-bottom: 15px;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50%;
  border: 4px solid #fff;
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #4154f1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #4154f1;
}



@media (max-width: 1199px) {
  .testimonials .swiper-slide-active {
    opacity: 1;
  }

  .testimonials .swiper-pagination {
    margin-top: 0;
  }
}

@media (min-width: 1200px) {
  .testimonials .swiper-slide-next {
    opacity: 1;
    transform: scale(1.12);
  }
}

section {
  padding: 60px 0;
  overflow: hidden;
}

.section-header {
  text-align: center;
  padding-bottom: 40px;
}

.section-header h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  margin: 0;
  color: #4154f1;
  text-transform: uppercase;
}

.section-header p {
  margin: 10px 0 0 0;
  padding: 0;
  font-size: 38px;
  line-height: 42px;
  font-weight: 700;
  color: #012970;
}

@media (max-width: 768px) {
  .section-header p {
    font-size: 28px;
    line-height: 32px;
  }
}
    </style>
@endsection

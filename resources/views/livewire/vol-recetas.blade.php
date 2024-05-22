<section>
    <h1 class="text-center m-auto">Recetas para ganancia y volumen</h1>

    <h3 class="text-center m-4">Para los que quieren masa y músculo a toneladas</h3>
<br><hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Chorizo y longaniza a la barbacoa</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta1">
                <img  src='{{ URL::asset('images/dietas/chorizo.jpg') }}' alt="chorizo a la barbacoa" class="img-responsive img-fluid">
       
              
            </div>
        </div>
        <div class="col-md-4">
            <h3>Legumbres con carne</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta2">
                <img  src='{{ URL::asset('images/dietas/legumbres.jpg') }}' alt="legumbres con carne"  class="img-responsive img-fluid">
                  
            </div>
        </div>
        <div class="col-md-4" >
            <h3>Batido protéico</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta3">
                        <img  src='{{ URL::asset('images/dietas/batido.jpg') }}' alt="batido de proteínas"  class="img-responsive">
              
            </div>
        </div>
        <!-- Repite el código anterior para las columnas 2 y 3 -->
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Espaguetis con hamburgesa</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta4">
                <img  src='{{ URL::asset('images/dietas/pastacarne.jpg') }}' alt="pasta con carne"  class="img-responsive img-fluid">
               
            </div>
        </div>
        <div class="col-md-4">
            <h3>Burguer con chips</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta5">
                <img  src='{{ URL::asset('images/dietas/hamburgesa.jpg') }}' alt="burguer con patatas"  class="img-responsive img-fluid">
               
            </div>
        </div>
        <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#receta6">
            <h3>Arroz con pollo</h3>
            <div class="card dash-card">
                <img  src='{{ URL::asset('images/dietas/pollo.jpg') }}' alt="arroz con pollo" class="img-responsive img-fluid">
             
            </div>
        </div>
        <!-- Repite el código anterior para las columnas 5 y 6 -->
    </div>
</div>
@livewire('def-modales')
</section>
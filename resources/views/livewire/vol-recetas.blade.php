<section>
    <h1 class="text-center m-auto">Recetas para ganancia y volumen</h1>

    <h3 class="text-center m-4">Para los que quieren masa y músculo a toneladas</h3>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta1">
                <img  src='{{ URL::asset('images/dietas/ensalada.jpg') }}'  class="img-responsive">
       
              
            </div>
        </div>
        <div class="col-md-4">
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta2">
                <img  src='{{ URL::asset('images/dietas/legumbres.jpg') }}'  class="img-responsive">
                  
            </div>
        </div>
        <div class="col-md-4" >
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta3">
                        <img  src='{{ URL::asset('images/dietas/ensaladilla.jpg') }}'  class="img-responsive">
              
            </div>
        </div>
        <!-- Repite el código anterior para las columnas 2 y 3 -->
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta4">
                <img  src='{{ URL::asset('images/dietas/pasta.jpg') }}'  class="img-responsive">
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta5">
                <img  src='{{ URL::asset('images/dietas/sandwich.jpeg') }}'  class="img-responsive">
               
            </div>
        </div>
        <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#receta6">
            <div class="card dash-card">
                <img  src='{{ URL::asset('images/dietas/desayuno.jpg') }}' class="img-responsive">
             
            </div>
        </div>
        <!-- Repite el código anterior para las columnas 5 y 6 -->
    </div>
</div>
@livewire('def-modales')
</section>
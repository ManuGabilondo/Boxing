<section>
    <h1 class="text-center m-auto">Recetas para definición corporal</h1>

    <h3 class="text-center m-4">Porque no solo es importante un control del peso,sino una buena alimentación que aporte nutrientes,vitaminas,y energía para prácticar deporte</h3>
<hr>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Ensalada césar</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta1">
                <img  src='{{ URL::asset('images/dietas/ensalada.jpg') }}'  class="img-responsive img-fluid">
       
              
            </div>
        </div>
        <div class="col-md-4">
            <h3>Garbanzo vegano</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta2">
                <img  src='{{ URL::asset('images/dietas/legumbres.jpg') }}'  class="img-responsive img-fluid">
                  
            </div>
        </div>
        <div class="col-md-4" >
            <h3>Ensaladilla rusa vegetariana</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta3">
                        <img  src='{{ URL::asset('images/dietas/ensaladilla.jpg') }}'  class="img-responsive img-fluid">
              
            </div>
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-4">
        <h3>Pasta vegana</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta4">
                <img  src='{{ URL::asset('images/dietas/pasta.jpg') }}'  class="img-responsive img-fluid">
            </div>
        </div>
        <div class="col-md-4">
            <h3>Sandwich crunchy</h3>
            <div class="card dash-card" data-bs-toggle="modal" data-bs-target="#receta5">
                <img  src='{{ URL::asset('images/dietas/sandwich.jpeg') }}'  class="img-responsive img-fluid">
               
            </div>
        </div>
        <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#receta6">
            <h3>Desayuno de definición</h3>
            <div class="card dash-card">
                <img  src='{{ URL::asset('images/dietas/desayuno.jpg') }}' class="img-responsive img-fluid">
             
            </div>
        </div>
        <!-- Repite el código anterior para las columnas 5 y 6 -->
    </div>
</div>
@livewire('def-modales')
</section>
<section>
    <h1 class="text-center m-auto">Recetas para ganancia y volumen</h1>
    <h3 class="text-center m-4">Para los que quieren masa y músculo a toneladas</h3>
    <br><hr>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                
                <div class="card dash-card h-100" data-bs-toggle="modal" data-bs-target="#receta1">
                    <img src='{{ URL::asset('images/dietas/chorizo.jpg') }}' alt="chorizo a la barbacoa" class="card-img-top img-fluid img-cover">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">Deliciosa combinación de chorizo y longaniza a la barbacoa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
              
                <div class="card dash-card h-100" data-bs-toggle="modal" data-bs-target="#receta2">
                    <img src='{{ URL::asset('images/dietas/legumbres.jpg') }}' alt="legumbres con carne" class="card-img-top img-fluid img-cover">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">Nutritivas legumbres acompañadas de carne.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                
                <div class="card dash-card h-100" data-bs-toggle="modal" data-bs-target="#receta3">
                    <img src='{{ URL::asset('images/dietas/batido.jpg') }}' alt="batido de proteínas" class="card-img-top img-fluid img-cover">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">Batido lleno de proteínas para ganar músculo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                
                <div class="card dash-card h-100" data-bs-toggle="modal" data-bs-target="#receta4">
                    <img src='{{ URL::asset('images/dietas/pastacarne.jpg') }}' alt="pasta con carne" class="card-img-top img-fluid img-cover">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">Espaguetis deliciosos con hamburguesa jugosa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
             
                <div class="card dash-card h-100" data-bs-toggle="modal" data-bs-target="#receta5">
                    <img src='{{ URL::asset('images/dietas/hamburgesa.jpg') }}' alt="burguer con patatas" class="card-img-top img-fluid img-cover">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">Hamburguesa con crujientes chips.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
              
                <div class="card dash-card h-100" data-bs-toggle="modal" data-bs-target="#receta6">
                    <img src='{{ URL::asset('images/dietas/pollo.jpg') }}' alt="arroz con pollo" class="card-img-top img-fluid img-cover">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">Arroz nutritivo con pollo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('def-modales')
</section>
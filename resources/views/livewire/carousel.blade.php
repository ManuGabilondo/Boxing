<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="height: 300px; top: 0; width: 100%;">
 <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
 </div>
 <div class="carousel-inner">
    <div class="carousel-item active">
<img src="{{ URL::asset('build/images/box1.webp') }}" style="height: 300px;width:100%">    </div>
    <div class="carousel-item">
     <img src="{{ URL::asset('build/images/box2.jpg') }}" style="height: 300px;width:100%">
    </div>
    <div class="carousel-item">
<img src="{{ URL::asset('images/login/05.jpg') }}" style="height: 300px;width:100%">    </div>
    <div class="carousel-item">
<img src="{{ URL::asset('images/login/03.jpg') }}" style="height: 300px;width:100%">    </div>
 </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
 </button>
</div>
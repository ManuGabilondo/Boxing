<div>
<!--CORE-->
<div class="modal fade" id="coreModal" tabindex="-1" aria-labelledby="coreModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="coreModalLabel">Entrenamiento de core</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel de ejercicios de core -->
        <div id="coreCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ URL::asset('images/ejercicios/ab.jpg') }}" class="d-block w-100" alt="Abdominales">
              <div class="carousel-caption d-none d-md-block">
                <h5>Abdominales</h5>
              </div>
            </div>
            <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h5>Plancha Lateral</h5>
              </div>
              <img src="{{ URL::asset('images/ejercicios/plat.jpg') }}" class="d-block w-100" alt="Plancha Lateral">
              
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/crunch.jpg') }}" class="d-block w-100" alt="Crunch">
              <div class="carousel-caption d-none d-md-block">
                <h5>Crunch</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/elro.jpg') }}" class="d-block w-100" alt="Elevación de rodillas">
              <div class="carousel-caption d-none d-md-block">
                <h5>Elevación de rodillas</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#coreCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#coreCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--SUPERIOR-->
<div class="modal fade" id="supModal" tabindex="-1" aria-labelledby="supModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supModalLabel">Ejercicios para ejercitar Tren Superior</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel de ejercicios de tren superior -->
        <div id="supCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ URL::asset('images/ejercicios/flex.jpg') }}" class="d-block w-100" alt="Flexiones">
              <div class="carousel-caption d-none d-md-block">
                <h5>Flexiones</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/fond.jpg') }}" class="d-block w-100" alt="Fondos de triceps">
              <div class="carousel-caption d-none d-md-block">
                <h5>Fondos</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/dom.jpg') }}" class="d-block w-100" alt="Dominadas">
              <div class="carousel-caption d-none d-md-block">
                <h5>Dominadas</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/curl.jpg') }}" class="d-block w-100" alt="Curl de biceps con peso">
              <div class="carousel-caption d-none d-md-block">
                <h5>Curl de biceps</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#supCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#supCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="infModal" tabindex="-1" aria-labelledby="infModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="infModalLabel">Entrenamiento de Tren Inferior</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel de ejercicios de tren inferior -->
        <div id="infCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ URL::asset('images/ejercicios/sent.jpg') }}" class="d-block w-100" alt="Sentadilla">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sentadilla</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/comba.jpeg') }}" class="d-block w-100" alt="Comba">
              <div class="carousel-caption d-none d-md-block">
                <h5>Comba</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/hip.webp') }}" class="d-block w-100" alt="HipThrust">
              <div class="carousel-caption d-none d-md-block">
                <h5>HipThrust</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ URL::asset('images/ejercicios/zanc.webp') }}" class="d-block w-100" alt="Zancadas">
              <div class="carousel-caption d-none d-md-block">
                <h5>Zancadas</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#infCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#infCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</div>

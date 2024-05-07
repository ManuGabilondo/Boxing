<div class="menu-wrapper" >
    <header id="page-topbar" style="background-color: rgb(29, 26, 26)" >
        <div class="layout-width">
            <div class="navbar-header" id="navbar-header">
                <div class="d-flex" id="header-logo">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="https://img.themesbrand.com/judia/logo-sm.png" alt="SYPHUS" height="22">
                            </span>
                            <span class="logo-lg">
                                
                                <h2 class="text-white mt-3">SYPHUS</h2>
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 header-item vertical-menu-btn topnav-hamburger shadow-none"
                        id="topnav-hamburger-icon">
                        <span class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                </div>
                <!-- ========== App Menu ========== -->
                <div class="app-menu navbar-menu mx-auto opacity-0">
                    <div id="scrollbar">
                        <ul class="navbar-nav" id="navbar-nav">
                                <a class="nav-link menu-link collapsed" href="../index"
                                    role="button" >
                                    <i class="fa fa-house"></i> <span>Inicio</span>
                                </a>
                                
                                
                          

                            <li class="nav-item">
                                <a class="nav-link menu-link collapsed" href="#sidebarPages"
                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                    aria-controls="sidebarPages">
                                    <i class="ph-address-book"></i> <span>Físico</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                 
                                        <li class="nav-item">
                                            <a class="nav-link collapsed" href="#sidebarAuth"
                                                data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="sidebarAuth">
                                                <span>Actividad</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAuth">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{route('funcional')}}" class="nav-link" role="button">
                                                            Entrenamiento funcional </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('sombra')}}" class="nav-link" role="button">
                                                            Sombra </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="{{route('cardio')}}" class="nav-link" role="button">
                                                            Cardio
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarErrors">
                                                Dietas </a>
                                            <div class="collapse menu-dropdown" id="sidebarErrors">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{route('definicion')}}"
                                                            class="nav-link">Dietas de definición</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('volumen')}}" class="nav-link">Dietas para volumen</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{route('mantenimiento')}}" class="nav-link">Dietas para mantenimiento</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                    <i class="bi bi-share"></i> <span>Usuarios</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('muro')}}" class="nav-link"><b>Muro</b></a>
                                        </li>
                                        @if(Auth::user()->level == 1)
                                        <li class="nav-item">
                                            <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="sidebarAccount">Usuarios
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                                <ul class="nav nav-sm flex-column">
                                                   
                                                   <li class="nav-item">
                                                                    <a href="#" class="nav-link">
                                                                        Premium
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{route('table')}}" class="nav-link">
                                                                        Todos</a>
                                                                </li>
                                                </ul>
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="d-flex align-items-center opacity-0" id="header-items">

                    
                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar rounded-circle mode-layout"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-sun align-middle fs-3xl"></i>
                        </button>
                        <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                            <a href="#!" class="dropdown-item" data-mode="light"><i
                                    class="bi bi-sun align-middle me-2"></i> Por defecto (Claro)</a>
                            <a href="#!" class="dropdown-item" data-mode="dark"><i
                                    class="bi bi-moon align-middle me-2"></i> Oscuro</a>
                        </div>
                    </div>

                    

                    <div class="dropdown topbar-head-dropdown ms-2 header-item">
                        <button type="button" class="btn btn-icon rounded-circle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('storage/' . @Auth::user()->avatar) }}" alt="avatar" class="avatar">                        </button>
                        <div class="dropdown-menu p-2 dropdown-menu-end">
                            <div class="d-flex gap-2 mb-3 topbar-profile">
                                <div>
                                     <h6 class="mb-1 fs-sm user-name">{{ @Auth::user()->name }}</h6>
                                    <p class="mb-0 fw-medium fs-xs"><a href="{{ @Auth::user()->email }}" target="_blank">{{ @Auth::user()->email }}</a></p>
                                </div>
                            </div>
                            <a href="{{route('users.edit',Auth::user()->id)}}" class="dropdown-item"><i
                                    class="bi bi-person align-middle me-2"></i> Perfil</a>

                            <a href="javascript:void(0)" class="dropdown-item"><i class="bi bi-gem align-middle me-2"></i>
                                Mi Subscripción</a>
                            <a href="{{route('citas')}}" class="dropdown-item"><i class="bi bi-calendar align-middle me-2"></i>
                                Citas</a>

                            <a href="javascript:void(0)" class="dropdown-item" href="javascript:void();"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="bi bi-box-arrow-right align-middle me-2"></i>Cerrar sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

  
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtén los botones de cambio de tema
    const lightModeButton = document.querySelector('[data-mode="light"]');
    const darkModeButton = document.querySelector('[data-mode="dark"]');

    // Función para cambiar el tema
    function changeTheme(theme) {
        // Cambia el tema en el CSS (aquí necesitas implementar tu lógica para cambiar el tema)
        // Por ejemplo, cambiar la clase del body o modificar variables CSS
        document.body.classList.remove('dark-theme', 'light-theme');
        document.body.classList.add(theme);

        // Almacena la preferencia en LocalStorage
        localStorage.setItem('theme', theme);
    }

    // Event listener para el botón de modo claro
    lightModeButton.addEventListener('click', function() {
        changeTheme('light-theme');
    });

    // Event listener para el botón de modo oscuro
    darkModeButton.addEventListener('click', function() {
        changeTheme('dark-theme');
    });

    // Carga el tema guardado en LocalStorage al cargar la página
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        changeTheme(savedTheme);
    }
});
</script>

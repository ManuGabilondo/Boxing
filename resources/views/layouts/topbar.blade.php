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
                        
                                <a class="nav-link menu-link collapsed" href="#sidebarDashboards"
                                    data-bs-toggle="collapse" role="button" aria-expanded="false">
                                    <i class="ph-gauge"></i> <span>Inicio</span>
                                </a>
                          

                            <li class="nav-item">
                                <a class="nav-link menu-link collapsed" href="#sidebarPages"
                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                    aria-controls="sidebarPages">
                                    <i class="ph-address-book"></i> <span>Fisico</span>
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
                                                        <a href="auth-signin" class="nav-link" role="button">
                                                            Entrenamiento funcional </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signup" class="nav-link" role="button">
                                                            Sombra </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset" class="nav-link" role="button">
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
                                                        <a href="auth-404"
                                                            class="nav-link">Dietas de definición</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-500" class="nav-link">Dietas para volumen</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-503" class="nav-link">Dietas para mantenimiento</a>
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
                                            <a href="#" class="nav-link"><b>Muro</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="sidebarAccount">Usuarios
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Administradores
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarCrm" class="nav-link"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebarCrm">
                                                            Clientes
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarCrm">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link">
                                                                        Premium
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link">
                                                                        Todos</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="d-flex align-items-center opacity-0" id="header-items">

                    <div class="dropdown ms-1 topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar rounded-circle"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-search align-middle fs-3xl"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown ms-1 topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar rounded-circle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch(Session::get('lang'))
                              

                                @case('sp')
                                    <img src="{{ URL::asset('build/images/flags/spain.svg') }}" class="rounded"
                                        alt="Header Language" height="20">
                                @break
                                @default
                                    <img src="{{ URL::asset('build/images/flags/us.svg') }}" class="rounded"
                                        alt="Header Language" height="20">
                            @endswitch
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="{{ url('index/en') }}" class="dropdown-item notify-item py-2" data-lang="en"
                                title="English">
                                <img src="https://img.themesbrand.com/judia/flags/us.svg" alt="user-image"
                                    class="me-2 rounded" height="18">
                                <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a href="{{ url('index/sp') }}" class="dropdown-item notify-item" data-lang="sp"
                                title="Spanish">
                                <img src="https://img.themesbrand.com/judia/flags/spain.svg" alt="user-image"
                                    class="me-2 rounded" height="18">
                                <span class="align-middle">Española</span>
                            </a>
                        </div>
                    </div>

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
                                <i class="fas fa-user-circle text-white user-circle"></i>
                        </button>
                        <div class="dropdown-menu p-2 dropdown-menu-end">
                            <div class="d-flex gap-2 mb-3 topbar-profile">
                                <div class="position-relative">
                                     <i class="fas fa-user-circle user-circle"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success"><span
                                            class="visually-hidden">unread messages</span></span>
                                </div>
                                <div>
                                    <h6 class="mb-1 fs-sm user-name">{{ @Auth::user()->name }}</h6>
                                    <p class="mb-0 fw-medium fs-xs"><a href="#!">{{ @Auth::user()->email }}</a></p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="dropdown-item"><i
                                    class="bi bi-person align-middle me-2"></i> Profile</a>
                            <a href="javascript:void(0)" class="dropdown-item"><i
                                    class="bi bi-chat-right-text align-middle me-2"></i> Messages</a>
                            <a href="javascript:void(0)" class="dropdown-item"><i class="bi bi-gem align-middle me-2"></i>
                                My Subscription</a>
                            <a href="javascript:void(0)" class="dropdown-item"><i
                                    class="bi bi-person-gear align-middle me-2"></i> Account Settings</a>
                            <a href="javascript:void(0)" class="dropdown-item" href="javascript:void();"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="bi bi-box-arrow-right align-middle me-2"></i> Sign Out</a>
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

    <!-- removeNotificationModal -->
    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="NotificationModalbtn-close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4 fs-base">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                            It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- removeCartModal -->
    <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-cartmodal"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-5"></i>
                        </div>
                        <div class="mt-4">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                            It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

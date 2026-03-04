<nav class="navbar col-lg-12 col-12 p-0  @auth fixed-top @endauth d-flex flex-row default-layout-navbar">

    {{-- BRAND DESCRIPTION --}}
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand" href="index-2.html"><img src="{{ asset('images/logo.svg') }}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo"/></a>
    </div>

    {{-- NAV MENU --}}
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
        @auth
            {{-- LEFT TOGGLE MENU BUTTON --}}
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="fas fa-bars"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">
                {{-- NOTIFICATIONS INDICATOR --}}
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="fas fa-bell mx-0"></i>
                    <span class="count">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left">Tens 4 notificatições
                        </p>
                        <span class="badge badge-pill badge-warning float-right">Ver todos</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                        <div class="preview-icon bg-danger">
                            <i class="fas fa-exclamation-circle mx-0"></i>
                        </div>
                        </div>
                        <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-medium">Erro de Nota</h6>
                        <p class="font-weight-light small-text">
                            Agora
                        </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                            <i class="fas fa-wrench mx-0"></i>
                        </div>
                        </div>
                        <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-medium">Definições</h6>
                        <p class="font-weight-light small-text">
                            Mesangens privada
                        </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                            <i class="far fa-envelope mx-0"></i>
                        </div>
                        </div>
                        <div class="preview-item-content">
                        <h6 class="preview-subject font-weight-medium">Novos Usuários registrados</h6>
                        <p class="font-weight-light small-text">
                            2 dias  atrás
                        </p>
                        </div>
                    </a>
                    </div>
                </li>

                {{-- USER PROFILE --}}
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset('images/faces/face5.jpg') }}" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="fas fa-user-lock text-primary"></i>
                            {{ __('Perfil') }}
                        </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-door-closed text-primary"></i>
                            {{ __('Terminar sessão') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

            {{-- RIGHT TOGGLE MENU BUTTON --}}
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="fas fa-bars"></span>
            </button>
        @else
            <ul class="navbar-nav navbar-nav-right">
                @if(Route::currentRouteName()=='welcome')
                    @if(App\Models\User::count() == 0)
                        <li class="nav-item btn btn-warning"> 
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-plus"></i> {{__('Cadastrar')}}
                            </a>
                        </li>
                        @else 
                        <li class="nav-item btn btn-info"> 
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-door-open"></i> {{ __('Login') }}
                            </a>
                        </li>
                    @endif
                @endif
                
            </ul>
        @endauth
    </div>
</nav>
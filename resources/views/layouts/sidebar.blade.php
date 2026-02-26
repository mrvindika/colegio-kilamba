<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- USER PROFILE --}}
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{ asset('images/faces/face5.jpg') }}" alt="image"/>
                </div>
                <div class="profile-name">
                    <p class="name">Asenath Vindica</p>
                    <p class="designation">Administrador</p>
                </div>
            </div>
        </li>

        {{-- HOME --}}
        <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fa fa-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- SYSTEM  --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings-menu" aria-expanded="false" aria-controls="settings-menu">
                <i class="fas fa-cog menu-icon"></i>
                <span class="menu-title">Definições</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Instituição</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Direcção</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Boas vindas</a></li>
                </ul>
            </div>
        </li>

        {{-- SECURITY --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#security-menu" aria-expanded="false" aria-controls="security-menu">
                <i class="fas fa-user-lock menu-icon"></i>
                <span class="menu-title">Segurança</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="security-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Editar Perfil</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Mudar Senha</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Adicionar Usuário</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Todos Usuários</a></li>
                </ul>
            </div>
        </li>

        {{-- FUNCIONÁRIO --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#funcionario-menu" aria-expanded="false" aria-controls="funcionario-menu">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Funcionário</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="funcionario-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Novo</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Docentes</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Administrativos</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Força de Trabalho</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Todos</a></li>
                </ul>
            </div>
        </li>

        {{-- ESTUDANTE --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#estudante-menu" aria-expanded="false" aria-controls="estudante-menu">
                <i class="fas fa-graduation-cap menu-icon"></i>
                <span class="menu-title">Estudante</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="estudante-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Novo</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Actuais</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Finalistas</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Todos</a></li>
                </ul>
            </div>
        </li>

        {{-- TURMA --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#turma-menu" aria-expanded="false" aria-controls="turma-menu">
                <i class="fa fa-chalkboard menu-icon"></i>
                <span class="menu-title">Turma</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="turma-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Actuais</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">EJA</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Regular</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Todas</a></li>
                </ul>
            </div>
        </li>

        {{-- ANO LECTIVO --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ano-lectivo-menu" aria-expanded="false" aria-controls="ano-lectivo-menu">
                <i class="fas fa-calendar-alt menu-icon"></i>
                <span class="menu-title">Ano Lectivo</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ano-lectivo-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Novo</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Actual</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Anterior</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="">Todos</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
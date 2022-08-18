<div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 sidebar">
    <a href="/" class="d-flex d-none d-sm-block align-items-center pb-sm-3 mb-md-0 me-md-auto  text-decoration-none">
        <x-application-logo width="100" />
    </a>
    <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
        id="menu">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
        </x-nav-link>
        
        @hasanyrole('Super Admin|Administrador')
                <x-dropdown id="optionsDropdown" :active="request()->routeIs('usuarios*')">
                    <x-slot name="trigger">
                        <i class="fs-5 bi bi-archive"></i>
                        Outros
                    </x-slot>

                    <x-slot name="content">

                        @can('ver_usuarios')
                        <x-dropdown-link href="{{ route('usuarios.index') }}">
                            <i class="bi bi-people"></i>
                            Usuários do Sistema
                        </x-dropdown-link>
                        @endcan

                    </x-slot>
                </x-dropdown>
                @endhasanyrole
    </ul>
    
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav">

        <!-- Settings Dropdown -->
        @auth
        <x-dropdown id="settingsDropdown">
            <x-slot name="trigger">
                {{ Auth::user()->name }}
            </x-slot>

            <x-slot name="content">
                <!-- Alterar Senha -->
                <x-dropdown-link :href="route('change.password')">
                    Alterar Senha
                </x-dropdown-link>

                <!-- Ajuda -->
                <x-dropdown-link :href="route('ajuda')">
                    Ajuda
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Sair
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        @endauth
    </ul>
</div>
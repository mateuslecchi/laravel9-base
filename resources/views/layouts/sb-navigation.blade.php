<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <!--INICIO-->
            <x-nav-divider title="Início" />

            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                icon="bi bi-speedometer2">
                Dashboard
            </x-nav-link>

            <x-nav-divider title="Outros" />

            <x-dropdown id="dropDownTeste" icon="bi bi-people" :active="request()->routeIs('usuarios*')">
                <x-slot name="title">
                    Usuários
                </x-slot>

                <x-nav-link href="{{ route('usuarios.index') }}" :active="request()->routeIs('usuarios.index')" icon="bi bi-card-list">
                    Todos
                </x-nav-link>

                <x-nav-link href="{{ route('usuarios.create') }}" :active="request()->routeIs('usuarios.create')" icon="bi bi-plus-lg">
                    Novo
                </x-nav-link>

            </x-dropdown>

        </div>
    </div>

    @auth
    <div class="sb-sidenav-footer">
        <div class="small">Logado como:</div>
        <i class="bi bi-person fa-fw"></i>
        {{ Auth::user()->name }}
    </div>
    @endauth

</nav>
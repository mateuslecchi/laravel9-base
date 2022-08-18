<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
    <div class="container-xl">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <x-application-logo width="100" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    Dashboard
                </x-nav-link>

                @hasanyrole('Super Admin|Administrador|Empréstimos - Consultar|Empréstimos - Consultar|Usuários -
                Consultar|Usuários - Editar')
                <x-dropdown id="optionsDropdown" :active="request()->routeIs('emprestimos*','usuarios*')">
                    <x-slot name="trigger">
                        Outros
                    </x-slot>

                    <x-slot name="content">

                        @can('ver_usuarios')
                        <x-dropdown-link href="{{ route('usuarios.index') }}">
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
    </div>
</nav>
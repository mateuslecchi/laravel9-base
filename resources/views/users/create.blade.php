<x-app-layout>
    @include('users.menu')
    <div class="bg-white shadow rounded p-2">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <div>
                    <p class="fs-5 mt-2">
                        Dados do Usuário:
                    </p>
                </div>
                <div class=" ">
                    <button form="form" type="submit" class="btn btn-success btn-sm ">
                        Salvar
                    </button>
                </div>
            </div>
            <form id="form" method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <x-input-group name="nome" type="text" required>
                            Nome:
                        </x-input-group>
                    </div>
                    <div class="col-12 col-sm-6">
                        <x-input-group name="email" type="email" required>
                            Email:
                        </x-input-group>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <x-input-group name="password" type="password" required>
                            Senha:
                        </x-input-group>
                    </div>
                    <div class="col-12 col-sm-6">
                        <x-input-group name="confirm_password" type="password" required>
                            Confirmar Senha:
                        </x-input-group>
                    </div>
                </div>
            </form>
        </div>
</x-app-layout>
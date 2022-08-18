<x-app-layout>
    <x-slot name="header">
        <h3 class="">
            {{ __('Alterar Senha') }}
        </h3>
    </x-slot>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card w-50 mx-auto my-3">
        <div class="card-body">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('update.password') }}">
                @csrf

                <!-- Password -->
                <div class="form-group">
                    <x-label for="password" :value="__('Nova Senha')" />

                    <x-input id="password" class="block mt-1 mb-2 w-full" type="password" name="password" required />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-label for="password_confirmation" :value="__('Confirmar Nova Senha')" />

                    <x-input id="password_confirmation" class="block mt-1 mb-2 w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="d-flex justify-content-end align-items-baseline">
                    <x-button class="btn-sm bg-primary text-white">
                        Alterar Senha
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
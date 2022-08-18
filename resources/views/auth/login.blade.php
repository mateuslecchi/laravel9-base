<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo width="300" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="my-3" :errors="$errors" />

        <div class="card-body">
            <div class="row">
                <div class="col d-flex aligns-items-center">
                    <img src="{{ asset('assets/login.svg') }}" alt="">
                </div>
                <div class="col">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-3" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3">
                            <div class="form-check">
                                <x-checkbox id="remember_me" name="remember" />

                                <label class="form-check-label" for="remember_me">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex justify-content-end align-items-baseline">
                                @if (Route::has('password.request'))
                                <a class="text-muted me-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif

                                <x-button class="btn-success">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
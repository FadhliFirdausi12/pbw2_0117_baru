<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <div class="container">
        <!-- Left Section -->
        <div class="left">
            <img src="{{ asset('images/background1.png') }}" alt="Office Illustration">
        </div>

        <!-- Right Section -->
        <div class="right">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1 class="title">Account Sign Up</h1>
                <p class="subtitle">Become a member and enjoy the feature</p>

                <!-- Name -->
                <div class="form-group">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="error-message" />
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="error-message" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
                </div>

                <!-- Footer -->
                <div class="form-footer">
                    <x-primary-button class="button">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                <a class="link" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
            </form>
        </div>
    </div>
</x-guest-layout>

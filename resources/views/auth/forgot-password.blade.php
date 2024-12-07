<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">

    <div class="x-guest-layout">
    <h1 style="font-size: 45px; text-align:center">Forgot your password?</h1><br>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="x-auth-session-status mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="x-input-label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="x-text-input">
                @error('email')
                    <div class="x-input-error mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="x-primary-button">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>

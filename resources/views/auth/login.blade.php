<x-guest-layout>
    <!-- Tambahkan file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="login-form">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <h1 style="font-size: 45px; text-align:center">Login</h1><br>
                <label class="block font-medium text-sm text-white-700 dark:text-black-300" for="email"
                    style="font-size:25px"> Email address </label>
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <x-text-input style="color: black; background-color:white" id="email" class="block mt-1 w-full"
                    type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <br>
            <!-- Password -->
            <div class="mt-4">
                <label class="block font-medium text-sm text-white-700 dark:text-black-300" for="password"
                    style="font-size: 25px"> Password </label>
                <x-text-input style="color: black; background-color:white" id="password" class="block mt-1 w-full"
                    type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-white-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
    


            <button type="submit"
                class="  items-center px-4 py-2
            bg-gray-800
            dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs
            text-white
            dark:text-gray-800 uppercase tracking-widest
            hover:bg-gray-700
            dark:hover:bg-white
            focus:bg-gray-700
            dark:focus:bg-white
            active:bg-gray-900
            dark:active:bg-gray-300 focus:outline-none focus:ring-2
            focus:ring-indigo-500 focus:ring-offset-2
            dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 block mt-1 w-full"
                style="background-color:#701414; height:3rem; text-align:center">
                Log in
            </button>
            {{-- <div class="tombol">
                <!-- Submit -->
                <x-primary-button class="ms-3" style="background-color:#701414; height:3rem"
                    class="block mt-1 w-full">
                    {{ __('Log in') }} 
                </x-primary-button>
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white-600 dark:text-white-400 hover:text-white-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif


            </div>
        </form>
    </div>
</x-guest-layout>

<x-guest-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-t from-gray-200 via-teal-200 to-teal-500">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-center text-green-600" :status="session('status')" />

            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Iniciar Sesión</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-2 w-full border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Contraseña')" class="text-gray-700" />
                    <x-text-input id="password" class="block mt-2 w-full border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <label for="remember_me" class="inline-flex items-center text-gray-600">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-teal-600 shadow-sm focus:ring-teal-500" name="remember">
                        <span class="ms-2 text-sm">{{ __('Recuérdame') }}</span>
                    </label>
                </div>

                <!-- Forgot Password and Submit -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-teal-600 hover:text-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-500 rounded-md" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    <x-primary-button class="px-6 py-2 bg-teal-600 text-white font-semibold rounded-md shadow-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                        {{ __('Iniciar Sesión') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

<x-guest-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-t from-gray-200 via-teal-200 to-teal-500">
        <form method="POST" action="{{ route('register') }}" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            @csrf

            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Registro</h1>

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Nombre')" class="text-gray-700 font-semibold" />
                <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none" 
                              type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700 font-semibold" />
                <x-text-input id="email" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none" 
                              type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Contraseña')" class="text-gray-700 font-semibold" />
                <x-text-input id="password" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none" 
                              type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="text-gray-700 font-semibold" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-teal-400 focus:outline-none" 
                              type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 text-sm mt-1" />
            </div>

            <!-- Links and Button -->
            <div class="flex items-center justify-between">
                <a class="text-sm text-teal-600 hover:text-teal-800 font-medium transition duration-300" 
                   href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-primary-button class="bg-teal-500 hover:bg-teal-600 text-white font-semibold px-4 py-2 rounded-md shadow-lg focus:ring-2 focus:ring-teal-400">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>

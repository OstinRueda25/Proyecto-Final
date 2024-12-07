<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-6">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg p-6">
                <div class="text-gray-900">
                    <p class="text-lg">{{ __("You're logged in!") }}</p>
                    
                    <!-- Enlace a "Crear Categoría" -->
                    <a href="{{ route('home') }}" class="inline-block mt-6">
                        <section class="bg-teal-500 text-white p-4 rounded-lg shadow-md hover:bg-teal-600 transition duration-300">
                            <h2 class="text-xl font-semibold text-center">Agregar producto</h2>
                        </section>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

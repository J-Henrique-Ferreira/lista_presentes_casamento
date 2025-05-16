<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-white py-12 px-4 sm:px-6 lg:px-8">

        <!-- Logo -->
        <div class="mb-8 text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto h-24 w-auto">
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-left text-lg tracking-wide font-medium text-gray-800 uppercase">Nome:</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    class="w-full mt-1 rounded-full bg-gray-200 border border-gray-300 text-gray-900 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-left text-lg tracking-wide font-medium text-gray-800 uppercase">Senha:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full mt-1 rounded-full bg-gray-200 border border-gray-300 text-gray-900 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Botão de login -->
            <div class="flex items-center justify-center">
                <x-primary-button class="px-6 py-2 rounded-full bg-gray-800 hover:bg-gray-700 text-white">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 tracking-wider uppercase">
                Lista de Presentes
            </h2>


            <!-- verifique se o usiário não é admin para exiibir o botão de logout -->
            @if(!request()->is('dashboard*'))
            <x-logout-buttom />
            @endif
        </div>

    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($products as $product)
                <div class="bg-gray-50 border border-gray-300 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between">

                    <!-- Imagem do produto -->
                    <div class="h-48 w-full overflow-hidden">
                        <img src="{{ $product['image_url'] ?? 'https://www.shutterstock.com/image-vector/default-ui-image-placeholder-wireframes-600nw-1037719192.jpg' }}"
                            alt="{{ $product['name'] ?? '' }}"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Conteúdo -->
                    <div class="p-4 flex-1 flex flex-col">
                        <p class="text-center font-semibold text-lg uppercase text-gray-700 mb-2">
                            {{ $product['name'] }}
                        </p>

                        <p class="text-sm text-gray-600 flex-1 mb-2">
                            {{ $product['description'] }}
                        </p>

                        <p class="text-xs text-gray-500 mb-4 italic">
                            {{ $product['address_store'] }}
                        </p>

                        <form action="{{ route('select-product') }}" method="POST" class="mt-auto">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                            <button type="submit"
                                class="w-full bg-gray-800 text-white uppercase font-semibold text-sm py-2 rounded-full hover:bg-gray-700 transition">
                                Dar Presente
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <x-modal-casamento-paleta />
</x-app-layout>
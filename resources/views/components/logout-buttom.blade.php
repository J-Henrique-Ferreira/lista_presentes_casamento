<div class="flex gap-4">
    <div class=" w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 focus:outline-none transition duration-150 ease-in-out">
        Olá {{Auth::user()->name}}
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
         this.closest('form').submit();">
            {{ __('Sair') }}
        </x-dropdown-link>

    </form>
</div>
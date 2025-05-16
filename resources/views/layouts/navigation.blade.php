@php

$linksNavigation = [
['name'=>'Dashboard', 'route'=> 'dashboard'],
['name'=>'Convidados', 'route'=> 'dashboard.convidados'],
['name'=>'Presentes', 'route'=> 'dashboard.presentes'],
]

@endphp

@if(request()->is('dashboard*'))
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 pb-1">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center ">
                    <a href="{{ route('dashboard') }}" class="h-16 w-16">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                @can('admin')
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @foreach ($linksNavigation as $link)
                    <x-nav-link :href="route($link['route'])" :active="request()->routeIs($link['route'])">
                        {{ __($link['name']) }}
                    </x-nav-link>
                    @endforeach
                </div>
                @endcan
            </div>

            <!-- Settings Dropdown -->

            <div class="my-auto">
                <x-logout-buttom />
            </div>
        </div>
    </div>
</nav>
@endif
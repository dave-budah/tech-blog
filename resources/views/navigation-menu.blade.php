
<nav class="flex justify-between items-center w-full container mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div>
        <x-application-logo></x-application-logo>
    </div>
    <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[30vh] z-10 left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
        <ul class="flex md:flex-row flex-col md:items-center md:gap-x-[2vw] gap-4 text-sm font-medium w-full">
            <li>
                <a wire:navigate class="text-gray-500 transition hover:text-blue-950" href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="text-gray-500 transition hover:text-blue-950" href="#about">About</a>
            </li>
            <li>
                <a class="text-gray-500 transition hover:text-blue-950" href="#projects">Projects</a>
            </li>
            <li>
                <a class="text-gray-500 transition hover:text-blue-950" href="#contact">Contact</a>
            </li>
            <li>
                <a wire:navigate class="text-gray-500 transition hover:text-blue-950" href="{{ route('posts.index') }}">Blog</a>
            </li>
        </ul>
    </div>
    <div class="flex items-center gap-6">
        @auth
         @include('layouts.partials.header-right-auth')
        @else
         @include('layouts.partials.header-right-guest')
        @endauth
          <button onclick="onToggleMenu(this)" name="menu" data-collapse-toggle="navbar-default" type="button" class="cursor-pointer rounded bg-transparent p-2 text-gray-600 transition hover:text-gray-600/75 md:hidden" aria-controls="navbar-default" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</nav>


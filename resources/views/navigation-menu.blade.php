<header class="fixed left-0 top-0 w-full z-9999 bg-white py-7 lg:py-0 transition-all ease-in-out duration-300"
        :class="{ 'shadow !py-4 lg:!py-0' : stickyMenu }"
        @scroll.window="stickyMenu = (window.scrollY > 0) ? true : false">
    <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 lg:flex items-center justify-between relative">
        <div class="w-full lg:w-3/12 flex items-center justify-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png')}}" alt="Logo" width="60"/>
            </a>

            <button id="menuToggler" aria-label="button for menu toggle" class="lg:hidden block"
                    @click="navigationOpen = !navigationOpen">
<span class="block relative cursor-pointer w-5.5 h-5.5">
<span class="du-block absolute right-0 w-full h-full">
<span class="block relative top-0 left-0 bg-dark rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-[0]"
      :class="{ '!w-full delay-300': !navigationOpen }"></span>
<span class="block relative top-0 left-0 bg-dark rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-150"
      :class="{ '!w-full delay-400': !navigationOpen }"></span>
<span class="block relative top-0 left-0 bg-dark rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-200"
      :class="{ '!w-full delay-500': !navigationOpen }"></span>
</span>
<span class="du-block absolute right-0 w-full h-full rotate-45">
<span class="block bg-dark rounded-sm ease-in-out duration-200 delay-300 absolute left-2.5 top-0 w-0.5 h-full"
      :class="{ '!h-0 delay-[0]': !navigationOpen }"></span>
<span class="block bg-dark rounded-sm ease-in-out duration-200 delay-400 absolute left-0 top-2.5 w-full h-0.5"
      :class="{ '!h-0 dealy-200': !navigationOpen }"></span>
</span>
</span>
            </button>

        </div>
        <div class="w-full lg:w-9/12 h-0 lg:h-auto invisible lg:visible lg:flex items-center justify-between"
             :class="{ '!visible bg-white shadow-lg relative !h-auto max-h-[400px] overflow-y-scroll rounded-md mt-4 p-7.5': navigationOpen }">

            <nav>
                <ul class="flex lg:items-center flex-col lg:flex-row gap-5 lg:gap-10">
                    <li class="nav__menu lg:py-6.5" :class="{ 'lg:!py-4' : stickyMenu }">
                        <a href="{{ route('home') }}" class="group leading-none flex text-[#1b334b] text-custom-md ease-in duration-200 hover:text-dark">
                             <span class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Home</span>
                        </a>
                    </li>
                    <li class="nav__menu lg:py-6.5" :class="{ 'lg:!py-4' : stickyMenu }">
                        <a href="#about" class="group leading-none flex text-[#1b334b] text-custom-md ease-in duration-200 hover:text-dark">
                            <span class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">About</span>
                        </a>
                    </li>
                    <li class="nav__menu lg:py-6.5" :class="{ 'lg:!py-4' : stickyMenu }">
                        <a href="#projects" class="group leading-none flex text-[#1b334b] text-custom-md ease-in duration-200 hover:text-dark">
                             <span class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Projects</span>
                        </a>
                    </li>
                   <li class="nav__menu lg:py-6.5" :class="{ 'lg:!py-4' : stickyMenu }">
                        <a href="{{ route('posts.index') }}" class="group leading-none flex text-[#1b334b] text-custom-md ease-in duration-200 hover:text-dark">
                             <span class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Blog</span>
                        </a>
                    </li>
                    <li class="nav__menu lg:py-6.5" :class="{ 'lg:!py-4' : stickyMenu }">
                        <a href="#contact" class="group leading-none flex text-[#1b334b] text-custom-md ease-in duration-200 hover:text-dark">
                             <span class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>


            <div class="flex flex-wrap items-center gap-8.5 mt-7 lg:mt-0">
                <div class="flex items-center gap-1.5">
                    @auth
                        @include('layouts.partials.header-right-auth')
                    @else
                        @include('layouts.partials.header-right-guest')
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>



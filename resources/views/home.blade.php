<x-app-layout title="Home">
<!-- Hero Start  -->
<section class="text-gray-600 body-font bg-[#eef5fc] bg-no-repeat" style="background-image: url({{ asset('images/background.jpg') }}); background-size: cover; background-position:center center; min-height: 50svh;">
 <div class="container flex py-24 md:flex-row flex-col items-center mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="hero-text lg:flex-grow md:w-1/3 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-blue-950">Welcome!</h1>
            <p class="mb-8 font-medium text-base leading-relaxed">I'm a developer dedicated to building web solutions that drive results.
                Check out my portfolio to see how I've helped businesses like yours succeed online. Let's talk about what I can achieve for you.</p>
            <div class="flex justify-center space-x-2.5">
                 <a href="#about" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                    Learn more
                </a>
                <a href="#contact" class="inline-flex items-center px-4 py-2 bg-transparent border border-gray-800 rounded-full font-semibold text-xs text-gray-800 hover:text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                    Contact
                </a>
            </div>
        </div>
        <div class="hero-image lg:max-w-lg lg:w-full md:w-1/2 w-5/6"></div>
    </div>
</section>
<!-- Hero End  -->

<!-- Services Start  -->
<section id="services" class="text-gray-600 body-font">
    <div class="container py-24 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 services-title">
            <h1 class="sm:text-3xl text-2xl font-bold title-font text-blue-950 mb-4">What I offer</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Here are my top services</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-blue-950 inline-flex"></div>
            </div>
        </div>
        <div class="services-block flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div
                    class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-950 mb-5 flex-shrink-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-braces" viewBox="0 0 16 16">
                      <path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6M13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-blue-950 text-lg title-font font-medium mb-3">Web Development</h2>
                    <h4 class="text-blue-70 text-base title-font font-medium mb-3">Custom Web Solutions That Work for You</h4>
                    <p class="leading-relaxed font-medium text-base"> From sleek websites to complex web applications,
                        I build tailored solutions that match your unique needs.
                        I leverage modern technologies to deliver exceptional user experiences and drive your business forward.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div
                    class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-950 mb-5 flex-shrink-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                      <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-blue-950 text-lg title-font font-medium mb-3">Maintenance</h2>
                    <h4 class="text-blue-70 text-base title-font font-medium mb-3">Keep Your Website Running Smoothly</h4>
                    <p class="leading-relaxed font-medium text-base">Don't let technical issues or outdated content slow you down.
                        I provide ongoing maintenance services to ensure your website is secure, up-to-date, and performing at its best.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                <div
                    class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-950 mb-5 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-blue-950 text-lg title-font font-medium mb-3">SEO</h2>
                    <h4 class="text-blue-70 text-base title-font font-medium mb-3">Get Found Online with Strategic SEO</h4>
                    <p class="leading-relaxed font-medium text-base">I'll optimize your website to rank higher on search engines like Google.
                        This means more visibility, targeted traffic, and increased leads for your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End  -->

<!-- About Start  -->
<section id="about" class="text-gray-600 body-font bg-[#eef5fc]">
 <div class="container flex py-24 md:flex-row flex-col items-center mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
      <div class="hero-image lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/dave.png') }}">
        </div>

        <div class="hero-text lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-blue-950">Who am I?</h1>
            <p class="mb-8 font-medium text-base leading-relaxed">A versatile developer with 5+ years of expertise in both frontend and backend technologies.
                Proficient in Java, JavaScript, PHP, Angular, Laravel, Rust, and Node.js. Successfully delivered projects for
                <a href="https://absp.online/about" target="_blank" class="decoration-0 text-blue-600">ABSP</a> over a 4-year period.</p>
            <p>With my expertise in software development, I strive to deliver exceptional products that are not only user-friendly but also scalable and secure.
                I stay up-to-date with the latest industry trends to ensure my work exceeds expectations and stands out in a competitive market.</p>
            <div class="flex justify-center mt-4">
                <a href="#contact" class="inline-flex items-center px-4 py-2 bg-transparent border border-gray-800 rounded-full font-semibold text-xs text-gray-800 hover:text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                    Get In touch
                </a>
            </div>
        </div>

    </div>
</section>
<!-- About End  -->

<!-- Projects Start  -->
<section id="projects" class="text-gray-600 body-font">
    <div class="container py-24 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
         <div class="projects-title text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-bold title-font text-blue-950 mb-4">My Portfolio</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Some of my recent work</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-blue-950 inline-flex"></div>
            </div>
        </div>
        <div class="projects-block flex flex-wrap -m-4">
            @foreach ($featuredProject as $project)
                <x-projects.project-card :project="$project"/>
            @endforeach

        </div>
    </div>
</section>
<!-- Projects end  -->

<!-- Blog Start  -->
<section id="blog" class="text-gray-600 body-font bg-[#eef5fc]">
    <div class="container py-24 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
         <div class="text-center mb-20 articles-title">
            <h1 class="sm:text-3xl text-2xl font-bold title-font text-blue-950 mb-4">Featured Articles</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">I also write articles here and there.</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-blue-950 inline-flex"></div>
            </div>
        </div>
        <div class="articles-block flex flex-wrap -m-4">
            @if($featured)
                 @foreach($featured as $post)
                    <x-posts.post-card :post="$post"/>
                @endforeach
            @endif

        </div>
    </div>
</section>
<!-- Blog End  -->

<!-- Contact Start  -->
<section id="contact" class="text-gray-600 body-font relative">
    <div class="container py-24 max-w-screen-xl px-4 sm:px-6 lg:px-8 mx-auto flex sm:flex-nowrap flex-wrap">
        <div class="contact-details lg:w-1/2 md:w-1/2 bg-[#eef5fc] rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
           <div>
            <h1 class="text-3xl text-blue-950 font-extrabold">Let's Talk</h1>
            <p class="text-base font-medium text-gray-500 mt-3">Have some big idea or brand to develop and need help? Then reach out I'd love to hear about your project  and provide help.</p>
            <div class="mt-12">
                <h2 class="text-lg text-blue-950 font-extrabold">Email</h2>
                <ul class="mt-3">
                    <li class="flex items-center">
                        <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                viewBox="0 0 479.058 479.058">
                                <path d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" data-original="#000000" />
                            </svg>
                        </div>
                        <a target="blank" href="mailto:info@selvigtech.com" class="text-[#007bff] text-sm ml-3">
                            <small class="block">Mail</small>
                            <strong>info@selvigtech.com</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-12">
                <h2 class="text-lg text-blue-950 font-extrabold">Socials</h2>
                <ul class="flex mt-3 space-x-4">
                    <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a>
                    </li>
                    <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                        <a href="https://www.linkedin.com/in/dave-budah/" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" class="bi bi-linkedin" viewBox="0 0 16 16">
                             <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                           </svg>
                        </a>
                    </li>
                    <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                        <a href="https://twitter.com/dave_budah" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                          </svg>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>

        <form action="{{ route('home.send') }}" method="POST" class="message-box lg:w-1/2 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            @csrf
            @if (session()->has('success'))
                <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-3 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
                    <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                        <div class="text-green-500">
                            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-base text-gray-500 font-medium ml-3">Success!.</div>
                    </div>
                    <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
                    <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </div>
                </div>
            @endif
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm font-medium text-blue-950">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('name')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm font-medium text-blue-950">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('email')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm font-medium text-blue-950">Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                @error('message')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full mx-auto">
                <x-button> Submit </x-button>
            </div>
            <p class="text-xs text-gray-500 mt-3">Your email will never be shared with anyone.</p>
        </form>
    </div>
</section>
<!-- End Contact  -->
</x-app-layout>

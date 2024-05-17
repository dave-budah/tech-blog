<x-app-layout title="Home">
<!-- Hero Start  -->
<section>
<div class="mx-auto max-w-[1170px] px-4 sm:px-8 xl:px-0 pb-12.5 pt-34">
<div class="rounded-[20px] relative overflow-hidden z-10">

<div>
<div class="absolute bottom-0 left-0 rounded-[20px] w-full h-full bg-gray"></div>
<div class="absolute bottom-0 left-0 rounded-[20px] w-full h-full">
<img class="absolute bottom-0" src="{{ asset('images/hero-bg-02.svg') }}" alt="hero" />
</div>
</div>


<div class="max-w-[880px] mx-auto px-4 sm:px-8 lg:px-0 py-7.5 sm:py-10 lg:py-15 relative z-1">
<div class="flex flex-col sm:flex-row items-center gap-7.5 lg:gap-15">
    <div class="max-w-[593px] w-full">
<h1 class="text-2xl sm:text-4xl lg:text-heading-3 xl:text-heading-2 text-[#4A5C6A] mb-3.5">
Hey! I’m <span class="font-bold text-[#1b334b]"> Dave</span>
</h1>
<p class="text-[#728495]">
A passionate software developer committed to delivering innovative and elegant digital solutions. Explore my portfolio to see the breadth of my work and discover how I can help bring your ideas to life in the digital realm.
</p>

<div class="flex items-center gap-5 mt-7">
<a href="https://www.facebook.com/profile.php?id=100089976131524" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
<svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11 9.53985V6.75185C11 5.67256 11.8954 4.79763 13 4.79763H15V1.86631L12.285 1.67682C9.9695 1.51522 8 3.30709 8 5.57532V9.53985H5V12.4712H8V18.3334H11V12.4712H14L15 9.53985H11Z" fill />
</svg>
</a>
<a href="https://x.com/_d4vie" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
<svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5312 4.78125L18.7188 3.28125C19.0625 2.875 19.1563 2.5625 19.1875 2.40625C18.25 2.96875 17.375 3.15625 16.8125 3.15625H16.5937L16.4688 3.03125C15.7188 2.375 14.7812 2.03125 13.7812 2.03125C11.5937 2.03125 9.875 3.84375 9.875 5.9375C9.875 6.0625 9.875 6.25 9.90625 6.375L10 7L9.34375 6.96875C5.34375 6.84375 2.0625 3.40625 1.53125 2.8125C0.65625 4.375 1.15625 5.875 1.6875 6.8125L2.75 8.5625L1.0625 7.625C1.09375 8.9375 1.59375 9.96875 2.5625 10.7187L3.40625 11.3437L2.5625 11.6875C3.09375 13.2813 4.28125 13.9375 5.15625 14.1875L6.3125 14.5L5.21875 15.25C3.46875 16.5 1.28125 16.4063 0.3125 16.3125C2.28125 17.6875 4.625 18 6.25 18C7.46875 18 8.375 17.875 8.59375 17.7813C17.3438 15.7188 17.75 7.90625 17.75 6.34375V6.125L17.9375 6C19 5 19.4375 4.46875 19.6875 4.15625C19.5937 4.1875 19.4688 4.25 19.3438 4.28125L17.5312 4.78125Z" fill />
</svg>
</a>
<a href="https://www.linkedin.com/in/dave-budah/" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
<svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.78357 4.16663C5.78326 4.84522 5.37157 5.45587 4.74262 5.71063C4.11367 5.9654 3.39306 5.8134 2.92059 5.32631C2.44811 4.83922 2.31813 4.11431 2.59192 3.49341C2.86572 2.87251 3.48862 2.4796 4.1669 2.49996C5.06779 2.527 5.78398 3.26533 5.78357 4.16663ZM5.83357 7.06663H2.50024V17.4999H5.83357V7.06663ZM11.1003 7.06663H7.78357V17.4999H11.0669V12.0249C11.0669 8.97494 15.0419 8.6916 15.0419 12.0249V17.4999H18.3336V10.8916C18.3336 5.74996 12.4503 5.94163 11.0669 8.4666L11.1003 7.06663Z" fill />
</svg>
</a>
<a href="https://www.instagram.com/kamranfarhann/" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
<svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.99967 6.45831C8.04367 6.45831 6.45801 8.04397 6.45801 9.99998C6.45801 11.956 8.04367 13.5416 9.99967 13.5416C11.9557 13.5416 13.5413 11.956 13.5413 9.99998C13.5413 8.04397 11.9557 6.45831 9.99967 6.45831Z" fill />
<path d="M1.66699 5.83335C1.66699 3.53217 3.53248 1.66669 5.83366 1.66669H14.167C16.4682 1.66669 18.3337 3.53217 18.3337 5.83335V14.1667C18.3337 16.4679 16.4682 18.3334 14.167 18.3334H5.83366C3.53248 18.3334 1.66699 16.4679 1.66699 14.1667V5.83335ZM5.20866 10C5.20866 12.6464 7.35396 14.7917 10.0003 14.7917C12.6467 14.7917 14.792 12.6464 14.792 10C14.792 7.35365 12.6467 5.20835 10.0003 5.20835C7.35396 5.20835 5.20866 7.35365 5.20866 10ZM15.0003 5.83335C15.4606 5.83335 15.8337 5.46025 15.8337 5.00002C15.8337 4.53979 15.4606 4.16669 15.0003 4.16669C14.5401 4.16669 14.167 4.53979 14.167 5.00002C14.167 5.46025 14.5401 5.83335 15.0003 5.83335Z" fill />
</svg>
</a>
</div>

</div>
<div class="max-w-[277px] w-full h-[277px] rounded-full flex items-center justify-center border border-gray-3">
<div class="max-w-[165px] w-full h-[165px] shadow-img rounded-full overflow-hidden">
<img src="{{ asset('images/dave.png') }}" alt="user" />
</div>
</div>

</div>
</div>

</div>
</div>
</section>
<!-- Hero End  -->

<!-- Services Start  -->
<section id="services" class="text-gray-600 body-font">
    <div class="container py-24 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20 services-title">
            <h1 class="sm:text-3xl text-2xl font-bold text-[#4A5C6A] mb-4">What I offer</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-[#1b334b]">Here are my top services</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-[#1b334b] inline-flex"></div>
            </div>
        </div>
        <div class="services-block grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5">
            <div class="text-center items-center border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all">
                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-950 mb-5 flex-shrink-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4A5C6A" class="bi bi-braces" viewBox="0 0 16 16">
                      <path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6M13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-[#4A5C6A] text-lg title-font font-bold mb-3">Web Development</h2>
                    <h4 class="text-[#1b334b] text-base title-font font-medium mb-3">Web Solutions That Work for You</h4>
                    <p class="leading-relaxed font-medium text-base text-[#728495] text-justify">As a web developer, I specialize in creating responsive and visually appealing websites. From single-page applications to complex e-commerce platforms, I ensure that each site I develop is user-friendly, fast, and optimized for all devices. Let's work together to build a website that not only meets your needs but also exceeds your expectations.</p>
                </div>
            </div>
            <div class="text-center items-center border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all">
                <div
                    class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-950 mb-5 flex-shrink-0">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4A5C6A" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                      <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-[#4A5C6A] text-lg title-font font-bold mb-3">Maintenance</h2>
                    <h4 class="text-[#1b334b] text-base title-font font-medium mb-3">Keep Your Systems Running Smoothly</h4>
                    <p class="leading-relaxed font-medium text-base text-[#728495] text-justify">I offer comprehensive maintenance and support services to ensure your digital solutions remain up-to-date and perform optimally. From regular updates and security patches to troubleshooting and enhancements, I'm committed to keeping your systems running smoothly. Let me take care of the technical details so you can focus on growing your business.</p>
                </div>
            </div>
            <div class="text-center items-center border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all">
                <div
                    class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-950 mb-5 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4A5C6A" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </div>
                <div class="flex-grow">
                    <h2 class="text-[#4A5C6A] text-lg title-font font-bold mb-3">Custom Software Solutions</h2>
                    <h4 class="text-[#1b334b] text-base title-font font-medium mb-3">Personalised Solutions For You</h4>
                    <p class="leading-relaxed font-medium text-base text-[#728495] text-justify">I provide tailored software solutions designed to address your unique business challenges. By understanding your specific requirements, I create custom applications that streamline your operations and improve efficiency. From initial concept to deployment, I'm dedicated to delivering software that empowers your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End  -->

<!-- About Start  -->
<section id="about" class="text-gray-600 body-font bg-[#f5f6fb]">
 <div class="container flex py-24 md:flex-row flex-col items-center mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
      <div class="hero-image lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-5">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/davie.png') }}">
        </div>

        <div class="hero-text lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-[#4A5C6A]">Who am I?</h1>
            <p class="mb-8 font-medium text-base leading-relaxed text-[#728495]">A versatile developer with 5+ years of expertise in both frontend and backend technologies.
                Proficient in Java, JavaScript, PHP, Angular, Laravel, Rust, and Node.js. Successfully delivered projects for
                <a href="https://absp.online/about" target="_blank" class="decoration-0 text-green-600 font-medium">ABSP</a> over a 4-year period.</p>
            <p class="text-[#728495] font-medium text-base leading-relaxed">With my expertise in software development, I strive to deliver exceptional products that are not only user-friendly but also scalable and secure.
                I stay up-to-date with the latest industry trends to ensure my work exceeds expectations and stands out in a competitive market.</p>
            <div class="flex justify-center mt-4">
                <a href="#contact" class="inline-flex items-center px-4 py-2.5 bg-transparent border border-gray-800 rounded-lg font-semibold text-xs text-gray-800 hover:text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
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
            <h1 class="sm:text-3xl text-2xl font-bold title-font text-[#4A5C6A] mb-4">My Portfolio</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-[#1b334b]">Some of my recent work</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-[#1b334b] inline-flex"></div>
            </div>
        </div>
        <div class="projects-block flex flex-wrap gap-x-7.5 gap-y-9">
            @foreach ($featuredProject as $project)
                <x-projects.project-card :project="$project"/>
            @endforeach

        </div>
    </div>
</section>
<!-- Projects end  -->

<!-- Blog Start  -->
<section id="blog" class="text-gray-600 body-font bg-[#f5f6fb]">
    <div class="container py-24 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
         <div class="text-center mb-20 articles-title">
            <h1 class="sm:text-3xl text-2xl font-bold title-font text-[#4A5C6A] mb-4">Featured Articles</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-[#1b334b]">I also write articles here and there.</p>
            <div class="flex mt-6 justify-center">
                <div class="w-16 h-1 rounded-full bg-[#1b334b] inline-flex"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5">
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
        <div class="contact-details lg:w-1/2 md:w-1/2 bg-[#f5f6fb] rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
           <div>
            <h1 class="text-3xl text-[#4A5C6A] font-extrabold">Let's Talk</h1>
            <p class="text-base font-medium text-[#728495] mt-3">Do you have an idea or brand to develop and need help? Then reach out I'd love to hear about your project  and provide help.</p>
            <div class="mt-12">
                <h2 class="text-lg text-blue-950 font-extrabold">Email</h2>
                <ul class="mt-3">
                    <li class="flex items-center">
                        <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill='#4A5C6A'
                                viewBox="0 0 479.058 479.058">
                                <path d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" data-original="#000000" />
                            </svg>
                        </div>
                        <a target="blank" href="mailto:info@selvigtech.com" class="text-blue-950 text-sm ml-3">
                            <strong>info@selvigtech.com</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-12">
                <h2 class="text-lg text-blue-950 font-extrabold">Socials</h2>
                <div class="flex items-center gap-5 mt-7">
                <a href="https://www.facebook.com/profile.php?id=100089976131524" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9.53985V6.75185C11 5.67256 11.8954 4.79763 13 4.79763H15V1.86631L12.285 1.67682C9.9695 1.51522 8 3.30709 8 5.57532V9.53985H5V12.4712H8V18.3334H11V12.4712H14L15 9.53985H11Z" fill />
                </svg>
                </a>
                <a href="https://x.com/_d4vie" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5312 4.78125L18.7188 3.28125C19.0625 2.875 19.1563 2.5625 19.1875 2.40625C18.25 2.96875 17.375 3.15625 16.8125 3.15625H16.5937L16.4688 3.03125C15.7188 2.375 14.7812 2.03125 13.7812 2.03125C11.5937 2.03125 9.875 3.84375 9.875 5.9375C9.875 6.0625 9.875 6.25 9.90625 6.375L10 7L9.34375 6.96875C5.34375 6.84375 2.0625 3.40625 1.53125 2.8125C0.65625 4.375 1.15625 5.875 1.6875 6.8125L2.75 8.5625L1.0625 7.625C1.09375 8.9375 1.59375 9.96875 2.5625 10.7187L3.40625 11.3437L2.5625 11.6875C3.09375 13.2813 4.28125 13.9375 5.15625 14.1875L6.3125 14.5L5.21875 15.25C3.46875 16.5 1.28125 16.4063 0.3125 16.3125C2.28125 17.6875 4.625 18 6.25 18C7.46875 18 8.375 17.875 8.59375 17.7813C17.3438 15.7188 17.75 7.90625 17.75 6.34375V6.125L17.9375 6C19 5 19.4375 4.46875 19.6875 4.15625C19.5937 4.1875 19.4688 4.25 19.3438 4.28125L17.5312 4.78125Z" fill />
                </svg>
                </a>
                <a href="https://www.linkedin.com/in/dave-budah/" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.78357 4.16663C5.78326 4.84522 5.37157 5.45587 4.74262 5.71063C4.11367 5.9654 3.39306 5.8134 2.92059 5.32631C2.44811 4.83922 2.31813 4.11431 2.59192 3.49341C2.86572 2.87251 3.48862 2.4796 4.1669 2.49996C5.06779 2.527 5.78398 3.26533 5.78357 4.16663ZM5.83357 7.06663H2.50024V17.4999H5.83357V7.06663ZM11.1003 7.06663H7.78357V17.4999H11.0669V12.0249C11.0669 8.97494 15.0419 8.6916 15.0419 12.0249V17.4999H18.3336V10.8916C18.3336 5.74996 12.4503 5.94163 11.0669 8.4666L11.1003 7.06663Z" fill />
                </svg>
                </a>
                <a href="https://www.instagram.com/kamranfarhann/" target="_blank" class="flex lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.99967 6.45831C8.04367 6.45831 6.45801 8.04397 6.45801 9.99998C6.45801 11.956 8.04367 13.5416 9.99967 13.5416C11.9557 13.5416 13.5413 11.956 13.5413 9.99998C13.5413 8.04397 11.9557 6.45831 9.99967 6.45831Z" fill />
                <path d="M1.66699 5.83335C1.66699 3.53217 3.53248 1.66669 5.83366 1.66669H14.167C16.4682 1.66669 18.3337 3.53217 18.3337 5.83335V14.1667C18.3337 16.4679 16.4682 18.3334 14.167 18.3334H5.83366C3.53248 18.3334 1.66699 16.4679 1.66699 14.1667V5.83335ZM5.20866 10C5.20866 12.6464 7.35396 14.7917 10.0003 14.7917C12.6467 14.7917 14.792 12.6464 14.792 10C14.792 7.35365 12.6467 5.20835 10.0003 5.20835C7.35396 5.20835 5.20866 7.35365 5.20866 10ZM15.0003 5.83335C15.4606 5.83335 15.8337 5.46025 15.8337 5.00002C15.8337 4.53979 15.4606 4.16669 15.0003 4.16669C14.5401 4.16669 14.167 4.53979 14.167 5.00002C14.167 5.46025 14.5401 5.83335 15.0003 5.83335Z" fill />
                </svg>
                </a>
                </div>
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
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-2.5 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('name')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm font-medium text-blue-950">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2.5 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('email')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm font-medium text-blue-950">Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-2.5 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
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

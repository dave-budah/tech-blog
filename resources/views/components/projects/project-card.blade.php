@props(['project'])
<div class="p-4 lg:w-1/2">
    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
        <a href="{{ $project->getThumbnailUrl() }}" class="w-48 h-48 sm:mb-0 mb-4 flex-shrink-0" data-lightbox="{{ $project->getThumbnailUrl() }}" data-title="{{ $project->title }}">
             <img alt="team" class="rounded-lg w-full h-full object-cover object-center"
             src="{{ $project->getThumbnailUrl() }}">
        </a>

        <div class="flex-grow sm:pl-8">
            <h2 class="title-font mb-3 font-medium text-lg text-blue-950">{{ $project->title }}</h2>
            <p class="mb-4 font-medium text-base">{{ $project->description }}</p>
            <span class="inline-flex">
              <a href="{{ $project->url }}" class="text-gray-500">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007bff" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
                </svg>
              </a>
              <a href="{{ $project->source }}" class="ml-2 text-gray-500">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007bff" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>
                </svg>
              </a>
            </span>
        </div>
    </div>
</div>

@props(['post'])
<div class="p-4 md:w-1/3" {{ $attributes }}>
    <div class="h-full border-gray-200 rounded-lg overflow-hidden">
        <img class="lg:h-48 md:h-36 w-full object-cover rounded-lg object-center" src="{{ $post->getThumbnailUrl() }}" alt="blog">
        <div class="px-2 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-x-2">
                    <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier"> <path d="M11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H8.4M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#4b5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g>
                    </svg>
                    <p class="text-sm text-gray-700">{{ $post->author->name }}</p>
                </div>
                <p class="text-xs font-light text-gray-500">{{ $post->published_at->format('d M Y') }}</p>
            </div>
            <a href="{{ route('posts.show', $post->slug) }}" class=" block title-font text-lg font-medium text-blue-950 my-3">{{ $post->title }}</a>
            <div class="flex items-center flex-wrap mt-4">
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}" class="text-blue-950 hover:text-indigo-600 inline-flex items-center md:mb-2 lg:mb-0">Read More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span
                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm py-1">
                <livewire:like-button :key="'like-' . $post->id.now()" :$post/>
              </span>
            </div>
        </div>
    </div>
</div>

@props(['project'])
<div class="p-4 lg:w-1/2">
<div class="rounded overflow-hidden flex flex-col max-w-xl mx-auto">
    <a href="#">
        <img class="w-full h-80" src="{{ $project->getThumbnailUrl() }}" alt="Sunset in the mountains">
    </a>
    <div class="relative -mt-16 px-10 pt-5 pb-16 m-10 bg-[#eef5fc]">
        <a href="#" class="font-semibold text-lg inline-block text-blue-950 hover:text-indigo-600 transition duration-500 ease-in-out mb-2">
            {{ $project->title }}
        </a>
        <p class="text-gray-600 font-medium text-base">
            {{ $project->description }}
        </p>
        <p class="mt-5 text-sm">
            <a href="{{ $project->url }}" class="text-sm text-indigo-600 transition duration-500 ease-in-out hover:text-blue-950">
                Visit site
            </a> | <a href="{{ $project->source }}" class="text-sm text-indigo-600 transition duration-500 ease-in-out hover:text-blue-950">
                View source
            </a>
        </p>
    </div>
</div>
</div>


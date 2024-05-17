@props(['post'])
<div class="group" {{ $attributes }}>
    <div class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105">
        <a href="{{ route('posts.show', $post->slug) }}">
            <img src="{{ $post->getThumbnailUrl() }}" alt="image" class="w-full"/>
        </a>
    </div>
    <h3>
        <a href="{{ route('posts.show', $post->slug) }}" class="block text-[#4A5C6A] font-bold text-xl mb-3.5">
        <span class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500">
        {{ Str::limit($post->title) }}
        </span>
        </a>
    </h3>
    <p class="text-[#728495] font-medium text-base leading-relaxed">{{ $post->excerpt() }}</p>
    <div class="flex flex-wrap gap-3 items-center justify-between mt-4.5">
        <div class="flex items-center gap-2.5">
            <x-posts.author :author="$post->author"/>
            <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
            <p class="text-sm">{{ $post->publishedDate() }}</p>
        </div>
        @if($category = $post->categories()->first())
            <a href="{{ route('posts.index', ['category' => $category->title]) }}" class="inline-flex text-blue-800 bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full">{{ $category->title }}</a>
        @endif
    </div>
</div>



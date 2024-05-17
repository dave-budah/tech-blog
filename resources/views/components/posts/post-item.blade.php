@props(['post'])
<article {{ $attributes->merge(['class' => '[&:not(:last-child)]:border-b border-gray-100 pb-10 sm:pb-20]']) }}>
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-12 lg:col-span-4 flex items-center">
            <a href="{{ route('posts.show', $post->slug) }}">
                <img class="mw-100 mx-auto rounded-xl" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-12 lg:col-span-8">
            <div class="article-meta flex items-center gap-2.5 py-1 text-sm">
                <x-posts.author :author="$post->author"/>
                <span class="flex w-[3px] h-[3px] rounded-full bg-gray-600"></span>
                <span class="text-gray-500 text-xs"> {{ $post->publishedDate() }}</span>
            </div>
            <h2 class="md:text-xl sm:text-base font-bold text-[#4A5C6A]">
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
            </h2>

            <p class="mt-2 leading-relaxed font-medium text-base text-[#728495]">{{ $post->excerpt() }}</p>

            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex items-center gap-2.5 text-sm">
                    @foreach ($post->categories as $category)
                       <x-posts.category-badge :category="$category"/>
                     @endforeach
                    <span class="flex w-[3px] h-[3px] rounded-full bg-gray-600"></span>
                    <span class="text-gray-500 text-sm">{{ $post->human_read_time }}</span>
                </div>
                <div>
                    <livewire:like-button :key="'like-' . $post->id.now()" :$post/>
                </div>
            </div>
        </div>
    </div>
</article>

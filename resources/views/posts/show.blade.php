<x-app-layout :title="$post->title">
    <div class="container mx-auto max-w-screen-lg px-4 sm:px-6 lg:px-8">
        <div class="show-title-block px-4 lg:px-0 pt-20">
            <h2 class="text-2xl font-semibold text-blue-950 leading-tight text-center">
                {{ $post->title }}
            </h2>
             <div class="flex py-2 items-center justify-center">
                <img src="{{ $post->author->profile_photo_url }}"
                     class="h-12 w-12 rounded-full mr-2 object-cover" alt="{{ $post->author->name }}"/>
                <div>
                    <p class="font-semibold text-gray-700 text-sm"> {{ $post->author->name }} </p>
                    <p class="font-semibold text-gray-600 text-xs"> Author </p>
                </div>
             </div>
            <div class="mt-1 mb-3 flex items-center justify-center gap-1.5 text-xs">
                <h5 class="py-0 text-gray-700 inline-flex items-center justify-center border-e-gray-700">{{ $post->readTime() }} min read</h5>
                <span class="flex w-[3px] h-[3px] rounded-full bg-gray-700"></span>
                <p class="text-gray-700 inline-flex items-center justify-center">Published: {{ $post->published_at->diffForHumans() }}</p>
            </div>
        </div>

        <img src="{{ $post->getThumbnailUrl() }}" class="w-full object-cover lg:rounded" style="height: 28em;"
             alt="{{ $post->title }}"/>

        <div class="flex flex-col lg:flex-row lg:space-x-8 mb-8 mx-auto max-w-screen-md">

            <div class="lg:px-0 mt-6 text-gray-700 font-medium text-base leading-relaxed w-full">
                {!! $post->body !!}

                <hr class="my-8 h-0.5 bg-gray-300 border-0 rounded">
                <div class="my-4 flex justify-between">
                    <livewire:like-button :key="'like-' . $post->id.now()" :$post/>

                    @foreach ($post->categories as $category)
                        <x-posts.category-badge :category="$category"/>
                    @endforeach
                </div>

            <!-- Comments  -->
                <livewire:post-comments :key="'comments' . $post->id.now()" :$post/>
            </div>
              <!-- Sidebar start here  -->

        </div>
    </div>
</x-app-layout>

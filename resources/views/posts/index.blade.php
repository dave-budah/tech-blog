<x-app-layout title="Blog">
    <div class="container mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8" style="margin-top: 8rem;">
        <div class="w-full grid grid-cols-4 gap-10">
            <div class="md:col-span-3 col-span-4">
                <livewire:post-list/>
            </div>
            <div id="side-bar"
                 class="border-t bg-indigo-50 border-t-gray-100 md:border-t-none col-span-4 md:col-span-1 px-3 md:px-6  space-y-10 py-6 pt-10 md:border-l border-gray-100 h-screen sticky top-0">
                <livewire:search-box/>
                @include('posts.category-box')
            </div>
        </div>
    </div>
</x-app-layout>

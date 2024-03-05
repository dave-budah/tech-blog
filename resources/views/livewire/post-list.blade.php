<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-600 font-bold text-xs">
            @if($this->activeCategory)
               <x-badge wire:navigate href="{{ route('posts.index', ['category'=>$this->activeCategory->slug]) }}" :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color">
                   {{ $this->activeCategory->title }}
               </x-badge>
            @endif
            @if($search)  Seaching {{ $search }} @endif
            @if($this->activeCategory || $search)
                <button wire:click="clearFilters()" type="reset" class="cursor-pointer text-blue-950 bg-gray-200 px-2 py-1 text-xs rounded-full">X</button>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light">
            <x-label>Trending</x-label>
            <x-checkbox wire:model.live="popular"/>
            <button class="{{ $sort === 'desc' ? 'text-gray-900 font-medium text-sm border-b border-gray-700' : 'text-gray-500'}} py-4" wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 font-medium text-sm border-b border-gray-700' : 'text-gray-500'}} text-gray-900 py-4 border-gray-700" wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach($this->posts as $post)
            <x-posts.post-item wire:key="{{$post->id}}" :post="$post"/>
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>

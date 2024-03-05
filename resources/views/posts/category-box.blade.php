<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Categories</h3>
    <div class="topics flex flex-wrap gap-0.5 justify-start">
       @foreach ($categories as $category)
           <x-posts.category-badge :category="$category"/>
       @endforeach
    </div>
</div>

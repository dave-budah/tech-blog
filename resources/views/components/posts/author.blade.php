@props(['author'])
<a href="#" class="flex items-center gap-3">
<div class="flex w-6 h-6 rounded-full overflow-hidden">
<img src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}" />
</div>
<p class="text-sm font-bold text-[#1b334b]">{{ $author->name }}</p>
</a>


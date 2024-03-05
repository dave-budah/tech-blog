<div class="w-full">
    <h4 class="text-2xl my-6 font-semibold text-blue-950 leading-tight">Comments</h4>

    @auth
     <div class="">
        <label for="message" class="block mb-2 text-md font-medium text-gray-900">Your comment</label>
        <textarea wire:model="comment" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-none rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your message..."></textarea>
        <button wire:click="postComment" class="py-2 px-5 me-2 mb-2 mt-3 text-sm font-medium focus:outline-none rounded-lg border border-gray-200 hover:bg-gray-400 hover:text-gray-700 focus:z-10 focus:ring-none focus:ring-none bg-gray-800 text-gray-400">Submit</button>
    </div>
    @else
    <div class="my-4">
        <a wire:navigate href="{{ route('login') }}" class="block mb-2 text-md text-blue-800 font-medium">Login to post your comment.</a>
    </div>
    @endauth




    <div class="user-comments">
        @forelse($this->comments as $comment)
            <article class="p-6 rounded-lg bg-indigo-50 my-4">
    <div class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-700 font-semibold">
                <x-posts.author :author="$comment->user"/>
            <p class="text-xs text-gray-500">
                {{ $comment->created_at->diffForHumans() }}
            </p>
        </div>
    </div>
    <p class="text-gray-600 font-medium text-base">{{ $comment->comment }}</p>
    </article>
        @empty
         <div class="my-4">
            <h5 class="block mb-2 text-md font-medium text-gray-500">No comments posted</h5>
         </div>
        @endforelse
    </div>
    <div class="pagination">
        {{ $this->comments->links() }}
    </div>
</div>

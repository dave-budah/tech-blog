<div class="w-full mt-6">
    @auth
        <div x-data="{ focused: false }">
            <label for="message" class="block mb-2 text-md font-medium text-gray-900"></label>
            <textarea wire:model="comment" @click="focused = true" id="message" :rows="focused ? '4' : '1'" class="block p-2.5 w-full text-sm text-gray-900 bg-none rounded-lg border border-gray-300 focus:ring-blue-500 resize-none focus:border-blue-500 transition ease-in-out duration-150" placeholder="Leave a comment"></textarea>

           <div :class="focused ? '' : 'hidden'">
               <button wire:click="postComment" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-800 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                    Submit
                </button>
               <button wire:click="cancelCreating" @click="focused = false" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-500 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-600 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                        Cancel
                    </button>
           </div>
        </div>
    @else
        <div class="my-4">
            <a wire:navigate href="{{ route('login') }}" class="block mb-2 text-md text-[#253745] font-medium">
                <span class="text-red-600 text-base">*</span>Login to post your comment.</a>
        </div>
    @endauth

    <div class="user-comments">
        <h4 class="text-2xl my-6 font-semibold text-[#4A5C6A] leading-tight">Comments</h4>
        @forelse($this->comments as $comment)
            @if($editingCommentId === $comment->id)
            <textarea wire:model="comment" @click="focused = true" id="message" :rows="focused ? '4' : '1'" class="block p-2.5 w-full text-sm text-gray-900 bg-none rounded-lg border border-gray-300 focus:ring-blue-500 resize-none focus:border-blue-500 transition ease-in-out duration-150" placeholder="Edit your comment"></textarea>
            <div>
                <button wire:click="postComment" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-800 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                    Save
                </button>
                <button wire:click="cancelEditing" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-500 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-600 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                    Cancel
                </button>
            </div>
            @else
             <article class="p-6 rounded-lg my-4">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center gap-2.5">
                        <x-posts.author :author="$comment->user"/>
                         <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                        <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <p class="text-[#728495] font-medium text-base ml-9">{{ $comment->comment }}</p>

                <div class="flex justify-end items-center gap-2 5 mt-4">
                    @if (\Illuminate\Support\Facades\Auth::id() == $comment->user_id)
                        <button wire:click="startEditingComment({{$comment->id}})"
                        class="inline-flex items-center px-2 py-2 bg-gray-100 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-100 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4A5C6A" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </button>
                        <button wire:click="deleteComment({{ $comment->id }})" class="inline-flex items-center px-2 py-2 bg-gray-100 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-100 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3" viewBox="0 0 16 16">
                              <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>

                        @endif
                    @if(auth()->check())
                         <button wire:click="startReplyingToComment({{$comment->id}})"
                        class="inline-flex items-center px-2 py-2 bg-gray-100 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-100 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4A5C6A" class="bi bi-reply-fill" viewBox="0 0 16 16">
                              <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                            </svg>
                        </button>
                    @endif
                </div>
            </article>
                @if($replyingToCommentId === $comment->id)
                    <div class="mt-2 ml-4">
                        <textarea wire:model="comment" @click="focused = true" id="message" :rows="focused ? '4' : '1'" class="block p-2.5 w-full text-sm text-gray-900 bg-none rounded-lg border border-gray-300 focus:ring-blue-500 resize-none focus:border-blue-500 transition ease-in-out duration-150" placeholder="Write a reply"></textarea>
                        <button wire:click="postComment" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-800 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                            Reply
                        </button>
                        <button wire:click="cancelReplying" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-500 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-600 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                            Cancel
                        </button>
                    </div>
                @endif
<!--                Replies start here -->
            @if($comment->replies)
                        <div class="ml-6">
                            @foreach($comment->replies as $reply)
                                @if($editingCommentId === $reply->id)
                                    <textarea wire:model="comment" @click="focused = true" id="message" :rows="focused ? '4' : '1'" class="block p-2.5 w-full text-sm text-gray-900 bg-none rounded-lg border border-gray-300 focus:ring-blue-500 resize-none focus:border-blue-500 transition ease-in-out duration-150" placeholder="Edit your comment"></textarea>
                                        <div>
                                            <button wire:click="postComment" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-800 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                                                Save
                                            </button>
                                            <button wire:click="cancelEditing" class="inline-flex items-center my-5 px-6 py-2.5 bg-gray-500 border border-transparent  rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-600 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                                                Cancel
                                            </button>
                                        </div>
                                @else
                                <article class="p-6 rounded-lg my-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center gap-2.5">
                                            <x-posts.author :author="$reply->user"/>
                                             <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                                            <p class="text-xs text-gray-500">{{ $reply->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <p class="text-[#728495] font-medium text-base ml-9">{{ $reply->comment }}</p>
                                    <div class="flex justify-end items-center gap-2 5 mt-4">
                                    @if($reply->user_id === auth()->id())
                                        <button wire:click="startEditingComment({{ $reply->id }})" class="inline-flex items-center px-2 py-2 bg-gray-100 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-100 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4A5C6A" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                        </button>
                                        <button wire:click="deleteComment({{ $reply->id }})" class="inline-flex items-center px-2 py-2 bg-gray-100 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-200 focus:bg-gray-100 active:bg-gray-900 outline-none focus:outline-none focus:ring-2 transition ease-in-out duration-150">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash3" viewBox="0 0 16 16">
                                              <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                            </svg>
                                        </button>
                                    @endif
                                    </div>
                                </article>
                                @endif
                            @endforeach
                        </div>
                    @endif
<!--                Replies end here -->
            @endif
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

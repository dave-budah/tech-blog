<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class PostComments extends Component
{
    use WithPagination;

    public Post $post;

    #[Rule('required|min:3|max:500')]
    public string $comment = '';
    public ?int $editingCommentId = null;
    public ?int $replyingToCommentId = null;

    public function postComment()
    {
        if (auth()->guest())
        {
            return;
        }
        $this->validateOnly('comment');
       if ($this->editingCommentId) {
            // Update existing comment
            $comment = Comment::find($this->editingCommentId);

            if ($comment && $comment->user_id === auth()->id()) {
                $comment->update([
                    'comment' => $this->comment,
                ]);
                $this->reset('editingCommentId', 'comment');
            }
        } else {
            // Create new comment
            $this->post->comments()->create([
                'comment' => $this->comment,
                'user_id' => auth()->id(),
                'parent_id' => $this->replyingToCommentId,
            ]);

            $this->reset('comment', 'replyingToCommentId');
        }
    }


     #[Computed()]
    public function comments() {
         return $this->post->comments()->with('user', 'replies')->whereNull('parent_id')->latest()->paginate(10);
    }

     public function deleteComment($commentId)
    {
        $comment = Comment::find($commentId);

        if ($comment && $comment->user_id === auth()->id()) {
            $comment->delete();
        }
    }

    public function startEditingComment($commentId)
    {
        $comment = Comment::find($commentId);

        if ($comment && $comment->user_id === auth()->id()) {
            $this->editingCommentId = $commentId;
            $this->comment = $comment->comment;
            $this->replyingToCommentId = null;
        }
    }

    public function cancelEditing()
    {
        $this->reset('editingCommentId', 'comment');
    }

    public function startReplyingToComment($commentId)
    {
        $this->replyingToCommentId = $commentId;
        $this->comment = '';
        $this->editingCommentId = null;
    }

    public function cancelReplying()
    {
        $this->reset('replyingToCommentId', 'comment');
    }
    public function cancelCreating()
    {
        $this->reset('comment');
    }
    public function render()
    {
        return view('livewire.post-comments');
    }
}

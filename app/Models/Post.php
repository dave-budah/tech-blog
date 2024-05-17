<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'image',
        'body',
        'featured',
        'published_at',
        'slug',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function publishedDate()
{
    $publishedAt = $this->published_at;
    $sevenDaysAgo = \Carbon\Carbon::now()->subDays(7);

    if ($publishedAt->greaterThan($sevenDaysAgo)) {
        return $publishedAt->diffForHumans();
    } else {
        return $publishedAt->format('F jS Y');
    }
}


    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }

     public function scopePopular($query)
    {
        $query->withCount('likes')
                ->orderBy('likes_count', 'desc');
    }

    public function scopeSearch($query, $search = '')
    {
        $query->where('title', 'like', "%{$search}%");
    }

    public function scopeWithCategory($query, string $category) {
        $query->whereHas('categories', function ($query) use ($category) {
                $query->where('slug', $category);
            });
    }
    public function excerpt() {
        return Str::limit(strip_tags($this->body), 100);
    }
    public function humanReadTime(): Attribute
    {
        return new Attribute( get: function ($value, $attributes) {
            $words = Str::wordCount(strip_tags($attributes['body']));
            $minutes = ceil($words / 200);
            return $minutes. ' '.str('min')->plural($minutes);
        });
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
     public function likes()
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    public function getThumbnailUrl() {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
    // delete file from public folder
    protected static function booted(): void
    {
        self::deleted(function (Post $image) {
            Storage::disk('public')->delete($image->image);
        });
    }
}

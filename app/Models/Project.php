<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'title',
        'image',
        'description',
        'featured',
        'source',
        'url',
    ];

     public function scopeFeatured($query): void
     {
        $query->where('featured', true);
    }
    public function getThumbnailUrl() {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
    protected static function booted(): void
    {
        self::deleted(function (Project $image) {
            Storage::disk('public')->delete($image->image);
        });
    }
}

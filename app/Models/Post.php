<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'authorId',
        'title',
        'body',
        'status',
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'authorId');
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class, 'post_tag', 'postId', 'tagId');
    }
}

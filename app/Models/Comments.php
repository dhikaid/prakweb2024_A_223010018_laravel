<?php

namespace App\Models;

use App\Models\Blogs;
use App\Models\Timeline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Comments extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function getRouteKeyName()
    {
        return 'hash_id';
    }

    public function reply(): HasMany
    {
        return $this->hasMany(Comments::class, 'replyto', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function blog(): MorphToMany
    {
        return $this->morphedByMany(Blogs::class, 'commentable', 'commentables', 'comment_id', 'commentable_id');
    }

    public function timeline(): MorphToMany
    {
        return $this->morphedByMany(Timeline::class, 'commentable', 'commentables', 'comment_id', 'commentable_id');
    }
}

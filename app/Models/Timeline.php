<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Timeline extends Model
{
    use HasFactory, HasSEO;

    protected $table = 'timeline';

    protected $guarded = [
        'id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function music(): BelongsTo
    {
        return $this->belongsTo(Music::class, 'music_id', 'id');
    }

    public function comments(): MorphToMany
    {
        return $this->morphToMany(Comments::class, 'commentable', 'commentables', 'commentable_id', 'comment_id');
    }
    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: "Timeline: " . $this->judul,
            description: "Timeline: " . Str::of($this->judul)->limit(160)->stripTags(),
            author: $this->user->fullname,
            image: "https://res.cloudinary.com/dgxtncvvp/video/upload/" . $this->content . ".webp",
        );
    }
}

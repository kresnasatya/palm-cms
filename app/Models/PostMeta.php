<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostMeta extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'meta_id';

    /**
     * Get the post that owns this meta
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function attachment(): BelongsTo
    {
        return $this->belongsTo(Attachment::class, 'post_id');
    }
}

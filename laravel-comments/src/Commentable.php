<?php

namespace Hazzard\Comments;

trait Commentable
{
    /**
     * Get all of the comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(config('comments.comment_model'), 'commentable');
    }
}

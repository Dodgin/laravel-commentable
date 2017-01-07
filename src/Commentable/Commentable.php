<?php namespace Isthegeek\Commentable;

trait Commentable
{
    /**
     * This model has many comments.
     *
     * @return Comment
     */
    public function comments()
    {
        return $this->morphMany('Isthegeek\Commentable\Comment', 'commentable');
    }
}

<?php

namespace App\Traits;

use App\User;
use App\Like;

trait Likable
{
    public function like($like = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'liked' => $like
        ]);
    }

    public function dislike()
    {
        return $this->like(false);
    }

    public function isLikedBy(User $user, $like = true)
    {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', $like)->count();
    }
    
    public function isDislikedBy(User $user)
    {
        return $this->isLikedBy($user, $like = false);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function countLiked($like)
    {
        return $this->likes()->where('liked', $like)->count();
    }
}
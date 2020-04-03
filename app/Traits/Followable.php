<?php

namespace App\Traits;

use App\User;

trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()
            ->save($user);
    }

    public function following(User $user)
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exist();
    }

    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }
}

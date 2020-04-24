<?php

namespace App;

use App\Traits\Likable;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getLikesAttribute()
    {
        return $this->countLiked(true);
    }

    public function getDislikesAttribute()
    {
        return $this->countLiked(false);
    }
}

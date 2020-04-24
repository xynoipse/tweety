<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetLikesController extends Controller
{
    public function like(Tweet $tweet)
    {
        $tweet->like();
        return back();
    }

    public function dislike(Tweet $tweet)
    {
        $tweet->dislike();
        return back();
    }
}

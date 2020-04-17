<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function store(User $user)
    {
		current_user()
			->toggleFollow($user);

        return back();
    }
}

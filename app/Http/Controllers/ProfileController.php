<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->update($attributes);
        return redirect()->route('profile', $user);
    }
}

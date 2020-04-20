<?php

namespace App;

use App\Traits\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'image', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAttribute($value)
    {
        return asset($value ? 'storage/'.$value : '/images/default_profile.png');
	}
	
	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = bcrypt($value);
	}

    public function timeline()
    {
        $follows = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $follows)
            ->orWhere('user_id', $this->id)
            ->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)
            ->latest();
    }

    public function getRouteKeyName()
    {
        return 'username';
    }
}

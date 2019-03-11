<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Password;

class User extends Authenticatable
{
    use Notifiable;

     protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password','verify_token'
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function news(){
        return $this->hasMany(News::class);
    }
}

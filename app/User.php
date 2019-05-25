<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    //protected $table = 'users';


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
        'is_admin'=>'boolean'
    ];

    public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }

    public function profesion()
    {
        return $this->belongsTo(Profesion::class);
    }

    public function isAdmin()
    {
        return $this->email === 'test@styde.net';
    }

}
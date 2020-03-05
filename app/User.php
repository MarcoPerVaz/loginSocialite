<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /*  */
    protected static function boot()
    {
        parent::boot();
        static::creating(function (User $user) {
            if (!\App::runningInConsole()) {
                $user->slug = str_slug($user->name . " " . $user->lastname, '-');
            }
        });
    }
    /*  */

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

    /*  */
        /* Relations */
        public function socialAccount()
        {
            return $this->hasOne(UserSocialAccount::class);
        }
    /*  */
}

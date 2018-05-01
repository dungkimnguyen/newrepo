<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','firstName','lastName', 'email', 'password','role_id','active','activationToken','acct_completion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function authorAttributes()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'url' => $this->url,    // optional
            'avatar' => $this->profile_img, // optional
        ];
    }

         public function agency()
    {
        return $this->hasOne('App\Agency');
    }

             public function client()
    {
        return $this->hasOne('App\Client');
    }

    public function employee()
    {
        return $this->hasOne('App\Employee');
    }
}

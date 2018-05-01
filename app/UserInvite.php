<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInvite extends Model
{
    //

 protected $table = 'userinvites';

        protected $fillable = [
         'user_id','type','email','owner_id','token','status'
    ];



      public function user()
    {
        return $this->belongsTo('App\User');
    }

      public function company()
    {
        return $this->belongsTo('App\Company');
    }

}

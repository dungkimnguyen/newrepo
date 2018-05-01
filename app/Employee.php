<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

 protected $table = 'employees';

        protected $fillable = [
         'user_id','phone','email','agency_id'
    ];



      public function user()
    {
        return $this->belongsTo('App\User');
    }

      public function agency()
    {
        return $this->belongsTo('App\Agency');
    }


      public function schedule()
    {
        return $this->hasOne('App\Schedule');
    }

    
        public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}

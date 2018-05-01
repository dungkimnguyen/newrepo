<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //

 protected $table = 'agencies';

        protected $fillable = [
        'name', 'user_id','industry'
    ];




      public function user()
    {
        return $this->belongsTo('App\User');
    }

      public function employees()
    {
        return $this->hasMany('App\Employee');
    }

     public function agencyInfo()
    {
        return $this->hasOne('App\AgencyInfo');
    }

        public function connections()
    {
        return $this->hasMany('App\Connection');
    }
}

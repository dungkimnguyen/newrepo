<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

 protected $table = 'clients';

        protected $fillable = [
        'phone', 'user_id'
    ];




      public function user()
    {
        return $this->belongsTo('App\User');
    }

        public function offers()
    {
        return $this->hasMany('App\Offer');
    }

        public function connections()
    {
        return $this->hasMany('App\Connection');
    }
}

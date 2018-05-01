<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

 protected $table = 'appointments';

        protected $fillable = [
        'status', 'user_id'
    ];



      public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

              public function user()
    {
        return $this->belongsTo('App\User');
    }


      public function offer()
    {
        return $this->belongsTo('App\Offer');
    }

}

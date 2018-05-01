<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //

 protected $table = 'schedules';

        protected $fillable = [
        'schedule', 'user_id',
    ];



      public function employee()
    {
        return $this->belongsTo('App\Employee','id');
    }


}

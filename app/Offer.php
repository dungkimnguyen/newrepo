<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //

 protected $table = 'offers';

        protected $fillable = [
        'status', 'user_id' , 'employee_id','schedule','duration','details','about','status','comments','agency_id','wage'
    ];



      public function employee()
    {
        return $this->belongsTo('App\Employee');
    }



          public function client()
    {
        return $this->belongsTo('App\Client');
    }

          public function agency()
    {
        return $this->belongsTo('App\Agency');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyInfo extends Model
{
    //

 protected $table = 'agency_info';

        protected $fillable = [
        'phone', 'email','website','about'
    ];



      public function agency()
    {
        return $this->belongsTo('App\Agency');
    }


}

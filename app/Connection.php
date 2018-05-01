<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    //

 protected $table = 'connections';

        protected $fillable = [
        'user_id', 'agency_id','fee'
    ];


  public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;

    if (! $this->exists) {
      $this->attributes['slug'] = str_slug($value);
    }
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

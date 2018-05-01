<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

 protected $table = 'companies';

        protected $fillable = [
        'name', 'user',
    ];


  public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;

    if (! $this->exists) {
      $this->attributes['slug'] = str_slug($value);
    }
  }

      public function user()
    {
        return $this->belongsTo('App\User');
    }


}

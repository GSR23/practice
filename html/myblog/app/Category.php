<?php

namespace App;
use Site;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
      return $this->hasMany('App\Site');
    }
}

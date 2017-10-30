<?php

namespace App;
use Category;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //protected $fillable =['title','data'];   (only allows title and data)
    protected $guarded = [];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}

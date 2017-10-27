<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //protected $fillable =['title','data'];   (only allows title and data)
    protected $guarded = [];
}

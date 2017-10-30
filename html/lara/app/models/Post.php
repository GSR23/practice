<?php
// namespace App\models;
// use Illuminate\Database\Eloquent;

class Post extends Eloquent {

  public function category()
  {
    return $this->belongsTo('Category');
  }
  public function user()
  {
    return $this->belongsTo('User');
  }

}
?>

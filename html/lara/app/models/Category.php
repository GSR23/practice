<?php
// namespace App\models;
// use Illuminate\Database\Eloquent;

class Category extends Eloquent {

    protected $table = 'categories';
public function posts()
{
    return $this->HasMany('Category');
}

}
?>

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = ['categorie','product_naam','prijs','beschrijving'];

    public function users() {
      return $this->hasMany('App\User', 'kraamnummer');
    }
}

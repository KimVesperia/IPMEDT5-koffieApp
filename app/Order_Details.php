<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    //
    public function products() {
      return $this->belongsTo('App\Products');
    }

    public function orders() {
      return $this->belongsTo('App\Orders');
    }
}

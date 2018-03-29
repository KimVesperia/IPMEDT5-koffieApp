<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    //
    protected $fillable = [
        'products_id', 'product_naam', 'kwantiteit', 'prijs'
    ];

    protected $table = 'order_details';

    public $timestamps = true;
    
    public function products() {
      return $this->belongsTo('App\Products');
    }

    public function orders() {
      return $this->belongsTo('App\Orders');
    }
}

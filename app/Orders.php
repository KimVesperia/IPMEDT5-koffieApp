<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //

    protected $fillable = [
        'user_id', 'order_details_id', 'bedrijfsnaam', 'totaal_prijs', 'status'
    ];

    protected $table = 'orders';

    public $timestamps = true;

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function order_detailen() {
      return $this->hasMany('App\Order_Details');
    }
}

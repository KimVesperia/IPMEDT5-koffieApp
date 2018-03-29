<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MapController extends Controller
{
    //
    public function map()
    {
      // $orders = Orders::all();
      return view('map');
    }
}

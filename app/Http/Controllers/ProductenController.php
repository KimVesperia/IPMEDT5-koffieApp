<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ProductenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function producten()
    {
        //
        $productsWarm = DB::select('SELECT * FROM products
          WHERE categorie = "Warme Dranken"');

        $productsKoud = DB::select('SELECT * FROM products
          WHERE categorie = "Koude Dranken"');

        $productsEten = DB::select('SELECT * FROM products
          WHERE categorie = "Eten"');

          return View::make('producten')->with(compact('productsWarm', 'productsKoud', 'productsEten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

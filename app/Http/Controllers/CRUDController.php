<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\User;
use Auth;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newProduct = Products::all()->toArray();
        $welProduct = DB::select("SELECT * FROM products WHERE status = 'Beschikbaar';");
        $nietProduct = DB::select("SELECT * FROM products WHERE status = 'Niet beschikbaar';");
        return view('crud.index', compact('newProduct', 'nietProduct', 'welProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.create');
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
        $newProduct = new Products([
          'categorie' => $request->get('categorie'),
          'product_naam' => $request->get('product_naam'),
          'prijs' => $request->get('prijs'),
          'beschrijving' => $request->get('beschrijving'),
          'status' => $request->get('status'),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $newProduct->save();
        return redirect('/admin/producten');
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
        $newProduct = Products::find($id);
        return view('crud.edit', compact('newProduct','id'));
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
        $newProduct = Products::find($id);
        $newProduct->categorie = $request->get('categorie');
        $newProduct->product_naam = $request->get('product_naam');
        $newProduct->prijs = $request->get('prijs');
        $newProduct->beschrijving = $request->get('beschrijving');
        $newProduct->status = $request->get('status');
        $newProduct->save();
        return redirect('/admin/producten');
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
        $newProduct = Products::find($id);
        $newProduct->delete();

        return redirect('/admin/producten');
    }
}

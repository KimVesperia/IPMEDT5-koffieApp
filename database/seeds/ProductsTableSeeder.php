<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'categorie' => ucwords('Warme Dranken'),
            'product_naam' => ucwords('Koffie'),
            'prijs' => '1.20',
            'beschrijving' => ucfirst('Lekker koffie'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'categorie' => ucwords('Warme Dranken'),
            'product_naam' => ucwords('Expresso'),
            'prijs' => '1.50',
            'beschrijving' => ucfirst('Lekker expresso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'categorie' => ucwords('Koude Dranken'),
            'product_naam' => ucwords('Cola'),
            'prijs' => '1.50',
            'beschrijving' => ucfirst('Lekker cola'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'categorie' => ucwords('Eten'),
            'product_naam' => ucwords ('Broodje Ei'),
            'prijs' => '1.50',
            'beschrijving' => ucfirst('Lekker ei'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

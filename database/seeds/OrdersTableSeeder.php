<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('orders')->insert([
        //     'user_id' => '2',
        //     'bedrijfsnaam' => 'Dummy',
        //     'status' => 'Bezig',
        //     'totaal_prijs' => DB::table('order_details')->where('prijs')->sum('prijs'),
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
    }
}

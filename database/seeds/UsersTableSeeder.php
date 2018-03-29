<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'bedrijfsnaam' => ucwords('Admin'),
            'kraamnummer' => '0',
            'email' => 'admin@@marktleiden.nl',
            'password' => bcrypt('welkom'),
            'IsAdmin' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'bedrijfsnaam' => ucwords('Dummy'),
            'kraamnummer' => '123',
            'email' => 'dummy@@marktleiden.nl',
            'password' => bcrypt('welkom'),
            'IsAdmin' => '0',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

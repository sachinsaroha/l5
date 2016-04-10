<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('customers')->insert([
            'name' => 'Sumit',
            'email' => 'sumit.dabas@gmail.com',
            'address' => str_random(10),
        ]);
        DB::table('customers')->insert([
            'name' => 'Akshay',
            'email' => 'akshay.dabas@gmail.com',
            'address' => str_random(10),
        ]);


    }
}

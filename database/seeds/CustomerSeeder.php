<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Customer::create([
        	'email' => 'budi@gmail.com',
        	'password' => hash('gost', 'budi')
        ]);
    }
}

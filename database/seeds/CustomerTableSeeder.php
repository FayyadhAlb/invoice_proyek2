<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Customer::create([
            'name' => 'Darman Saputra',
            'address' => 'Bandung',
            'phone' => '08951566516',
            'email' => 'darman1@gmail.com'
        ]);

        Customer::create([
            'name' => 'Fayyadh Al',
            'address' => 'Malang',
            'phone' => '087859762267',
            'email' => 'fayyadh12@gmail.com'
        ]);
    }
}

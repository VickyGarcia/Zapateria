<?php

use App\Customer;
use App\User;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::create([
            'estado'=> true,
            'id_usuario'=> User::whereTipo(true)->value('id')
        ]);
    }
}

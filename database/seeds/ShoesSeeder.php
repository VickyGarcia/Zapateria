<?php

use App\Shoe;
use Illuminate\Database\Seeder;

class ShoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shoe::create([
            'modelo'=> 'USZRL1946',
            'precio_compra'=> 220.00,
            'precio_venta'=> 299.90,
            'desc'=> 'composicion capelada, antideslizante, dielectricao'
        ]);
    }
}

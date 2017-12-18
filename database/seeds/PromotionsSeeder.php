<?php

use App\Promotion;
use App\Employee;
use Illuminate\Database\Seeder;

class PromotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::create([
            'nombre'=> 'Rebajas invierno',
            'fec_inicio'=> '2017-12-21',
            'fec_vencimiento'=> '2018-03-20',
            'desc'=> '10% de descuento en todas las botas para niño',
            'id_empleado'=> 1
        ]);
        Promotion::create([
            'nombre'=> 'Regreso a clases',
            'fec_inicio'=> '2017-07-10',
            'fec_vencimiento'=> '2017-08-10',
            'desc'=> '15% de descuento en zapatos escolares',
            'id_empleado'=> 1
        ]);

    }
}

<?php

use App\Phone;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phone::create([
            'numero'=> '9711056893',
            'tipo'=> 'casa',
            'estado'=> true,
            'id_usuario'=> 1
        ]);
    }
}

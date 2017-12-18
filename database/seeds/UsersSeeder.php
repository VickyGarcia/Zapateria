<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=> 'Mary',
            'email'=> 'marilo@mail.com',
            'password'=> bcrypt('laravel'),
            'tipo'=> true,
            'nombre'=> 'María',
            'apellidos'=> 'Lopez Hurtado',
            'direccion'=> 'calle Las Adas, col San Juan',
            'fec_nac'=> '1992-09-02',
            'genero'=> true,
        ]);

        User::create([
            'name'=> 'Monce',
            'email'=> 'mon@mail.com',
            'password'=> bcrypt('laravel'),
            'tipo'=> true,
            'nombre'=> 'Monserrat',
            'apellidos'=> 'Arias Toledo',
            'direccion'=> 'calle Pedregal, col San Martin',
            'fec_nac'=> '1995-10-12',
            'genero'=> true,
        ]);

        User::create([
            'name'=> 'Manolo',
            'email'=> 'joma12@mail.com',
            'password'=> bcrypt('laravel'),
            'tipo'=> false,
            'nombre'=> 'Jose Manuel',
            'apellidos'=> 'Portilla Ramon',
            'direccion'=> 'calle Juarez, col del Bosque',
            'fec_nac'=> '1989-01-05',
            'genero'=> false,
        ]);
    }
}

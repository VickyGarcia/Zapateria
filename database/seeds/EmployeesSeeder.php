<?php

use App\Employee;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'cargo'=> 'vendedor',
            'fec_ingreso'=> '2017-09-02',
            'id_usuario'=> User::whereTipo(false)->value('id')
        ]);
    }
}

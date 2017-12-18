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
        //dd(UsersSeeder::class);
        $this->truncateTables([
            'users',
            'customers',
            'employees',
            'phones',
            'promotions',
            'shoes',
            'brands',
            'shoe_brand',
            'sizes',
            'seasons',
            'catalogs',
            'lines',
            'shoe_line',
            'colors',
            'images',
            'types',
            'shoe_type',
            'sales',
            'shoe_sale',
            'pulled_apart',
            'shoe_pulled',
            'sale_pulled'
        ]);

        $this->call(UsersSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(PhonesSeeder::class);
        $this->call(PromotionsSeeder::class);
        $this->call(ShoesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(ShoeBrandSeeder::class);
        $this->call(SizesSeeder::class);
        $this->call(SeasonsSeeder::class);
        $this->call(CatalogsSeeder::class);
        $this->call(LinesSeeder::class);
        $this->call(ShoeLineSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(ShoeTypeSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(ShoesSeeder::class);
        $this->call(PulledApartSeeder::class);
        $this->call(ShoePulledSeeder::class);
        $this->call(SalePulledSeeder::class);
    }

    protected function truncateTables(array $tables)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

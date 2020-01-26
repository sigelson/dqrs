<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'cashier',
                'letter'=>'C',
            ],
            [
                'name' => 'accounting',
                'letter'=>'A',
            ],
            [
                'name' => 'registrar',
                'letter'=>'R',
            ]
        ]);
}
}

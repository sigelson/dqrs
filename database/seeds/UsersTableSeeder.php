<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'DQRS Admin',
            'email' => 'admin@dqrs.com',
            'email_verified_at' => now(),
            'role'=> 'A',
            'department'=>1,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
                'name' => 'Cashier User',
                'email' => 'cashier@dqrs.com',
                'email_verified_at' => now(),
                'role'=> 'U',
                'department'=>1,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Accounting User',
                'email' => 'accounting@dqrs.com',
                'email_verified_at' => now(),
                'role'=> 'U',
                'department'=>2,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Registrar User',
                'email' => 'registrar@dqrs.com',
                'email_verified_at' => now(),
                'role'=> 'U',
                'department'=>3,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([DepartmentTableSeeder::class]);
        $this->call([CounterTableSeeder::class]);
        $this->call([TransactionTableSeeder::class]);
        $this->call([NotificationTableSeeder::class]);

    }
}

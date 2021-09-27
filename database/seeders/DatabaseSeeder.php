<?php

namespace Database\Seeders;

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
        //Ejecutar los seeder
        $this->call(UserSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}

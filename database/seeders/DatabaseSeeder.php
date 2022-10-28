<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();
        Company::factory(10)->create();
        City::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}

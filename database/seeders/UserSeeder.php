<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $types = ['admin','user'];
        $key = array_rand($types);
        $input = $types[$key];
        $num = rand(1,10);

        DB::table('users')->insert([
            'name' => $input.$num,
            'email' => $input.$num.'@gmail.com',
            'password' => Hash::make('password'),
            'type' => $input,
            'status' => 1
        ]);
            
    }
}

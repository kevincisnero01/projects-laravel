<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnologias = ['php','laravel','mysql','mariadb','postgresql','mongodb','html','css','javascript','bootstrap','vuejs','linux','windows','mac','servidor','apirest','diseño_ui'];


        for ($i=1; $i <= 5; $i++) { 

            DB::table('projects')->insert([
            'title' => $tecnologias[$i],
            'url' => $tecnologias[$i],
            'description' => 'descripcion del proyecto con la tecnologia de '.$tecnologias[$i]
            ]);

        }

    }
}

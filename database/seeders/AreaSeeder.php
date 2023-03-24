<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $areas = [
            'Ciencias básicas aplicadas',
            'Formación tecnológica',
            'Lenguas y métodos',
            'Habilidades gerenciales',
            'Formación científica',
            'Formación tecnológica',
            'Formación pertinente',
            'Formación directiva'
        ];

        foreach ($areas as $value) {
            DB::table('areas')->insert([
                'nombre' => $value,
                'descripcion' => $faker->text(),
                'fotografia' => $faker->imageUrl(null, 640, 480)
            ]);
        }

        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use App\Models\Asignatura;
use App\Models\Unidad;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $asig = Asignatura::all('id');

        for ($i = 0; $i <= 50; $i++) {


            $unidad = new Unidad();

            $unidad->nombre = $faker->name();

            $httmp = $faker->randomElement(['10', '30', '45']);
            $hptmp = $faker->randomElement(['45', '60', '75']);

            $unidad->ht = $httmp;
            $unidad->hp = $hptmp;

            $unidad->asignatura_id = $asig->random()->id;

            $unidad->objetivo =$faker->text();

            $unidad->resultado_aprendizaje =$faker->text();

            $unidad->secuencia_aprendizaje =$faker->text();

            $unidad->espacios_formativos = $faker->text();

            $unidad->save();
        }
    }
}

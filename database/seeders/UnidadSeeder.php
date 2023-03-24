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
            $unidad->asignatura_id = $asig->random()->id;
            $unidad->nombre = $faker->name();
            $unidad->objetivo =$faker->text();
            $unidad->tarea_integradora =$faker->text();

            $httmp = $faker->randomElement(['10', '30', '45']);
            $hptmp = $faker->randomElement(['45', '60', '75']);

            $unidad->horas_t = $httmp;
            $unidad->horas_p = $hptmp;

            $unidad->fecha_entrega =$faker->dateTimeBetween('-10 week');

           
            $unidad->material_didactico =$faker->text();

            $unidad->instrumento_evaluación =$faker->text();

            $unidad->herramientas_didacticas = $faker->text();

            $unidad->save();
        }
    }
}

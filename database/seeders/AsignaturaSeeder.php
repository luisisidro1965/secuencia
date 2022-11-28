<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asignatura;
use App\Models\Progedu;
use Faker;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $pe = Progedu::all('id');

        for ($i = 0; $i <= 50; $i++) {
            $asignatura = new Asignatura;

            $asignatura->nombre = $faker->name();
            $asignatura->cuatrimestre =$faker->randomElement(['0', '1', '2', '3', '4', '5', '7', '8', '9', '10']);

            $httmp = $faker->randomElement(['10', '30', '45']);
            $hptmp = $faker->randomElement(['45', '60', '75']);

            $asignatura->ht = $httmp;
            $asignatura->hp = $hptmp;

            $asignatura->htotales = $httmp + $hptmp;

            $asignatura->htsemana = $faker->randomElement(['3', '4', '5', '6', '7']);
            $asignatura->objetivo = $faker->text();

            $asignatura->progedu_id = $pe->random()->id;

            $asignatura->save();
        }
    }
}

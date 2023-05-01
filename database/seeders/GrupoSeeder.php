<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use App\Models\Grupo;
use App\Models\Progedu;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        $pe = ['TI', 'CTD', 'MEC', 'MID', 'MKT', 'ENR'];
        $per = ['SepDic', 'EneAbr', 'MayAgo'];
        $edo = ['Abierto', 'Cerrado', 'En Proceso'];
        $pe = Progedu::all('id');

        for ($i = 0; $i <= 50; $i++) {
            $grupo = new Grupo;
            $grupo->progedu = $pe[rand(0, 5)];
            $grupo->periodo = $per[rand(0, 2)];
            $grupo->cuatrimestre = $faker->randomNumber(2, true);
            $grupo->código = $faker->bothify('?-??##');
            $grupo->total_alumnos = $faker->randomNumber(2, true);
            $grupo->total_mujeres = $faker->randomNumber(2, true);
            $grupo->total_deserción = $faker->randomNumber(2, true);
            $grupo->total_reprobados = $faker->randomNumber(2, true);
            $grupo->estado = $edo[rand(0, 2)];

            $grupo->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Carrera;
use App\Models\Area;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $carrera = Carrera::all('id');
        $area = Area::all('id');

        for ($i = 1; $i <= 50; $i++) {
            $horas = $faker->randomElement([45, 60, 75, 90, 105]);
            $cuatrimestre = $faker->randomElement([1, 2, 3, 4, 5, 7, 8, 9, 10]);
            switch ($cuatrimestre) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    $ht = $horas * 0.3;
                    $hp = $horas * 0.7;
                    break;
                case 7:
                case 8:
                case 9:
                case 10:
                    $ht = $horas * 0.4;
                    $hp = $horas * 0.6;
                    break;
                default:
                    # code...
                    break;
            }

            DB::table('asignaturas')->insert([
                'nombre'    => $faker->sentence(),
                'objetivo'  => $faker->sentence(),
                'competencia' => $faker->text(),
                'carrera_id' => $carrera->random()->id,
                'cuatrimestre' => $cuatrimestre,
                'horas_t'   => $ht,
                'horas_p'   => $hp,
                'unidades'  => $faker->randomElement([2, 3, 4, 5]),
                'area_id'   => $area->random()->id,
            ]);
        }
    }
}

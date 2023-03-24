<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Progedu;
use Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $pe = ['TI', 'CTD', 'MEC', 'MID', 'MKT', 'ENR'];
        $per = ['SepDic', 'EneAbr', 'MayAgo'];

        for ($i = 0; $i <= 50; $i++) {
            $evaluacion = new Question;

            $evaluacion->nombre = $faker->name();
            $evaluacion->fecha_creación = $faker->date();
            $evaluacion->periodo = $per[rand(0,2)];
            $evaluacion->inicia_en = $faker->date();
            $evaluacion->termina_en = $faker->date();
            $evaluacion->total = $faker->randomNumber(3, true);
            $evaluacion->progedu = $pe[rand(0, 5)];
            $evaluacion->Matricula = $faker->randomNumber(3, true);
            //$evaluacion->mostrar = $faker->name();

            $evaluacion->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Actividad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i<=50; $i++) {
            $acti = new Actividad();
            $acti->nombre = $faker->text(70);
            $acti->descripcion = $faker->text(70);
            $acti->save();
        }
    }
}

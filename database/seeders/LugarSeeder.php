<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lugar;
use Faker;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=1; $i<=100; $i++) {
            $lugar = new Lugar();
            $lugar->descripcion = $faker->text(100);
            $lugar->capacidad = $faker->numberBetween(4, 60);
            $lugar->responsable= $faker->name();
            $lugar->edificio = 'A';
            $lugar->save();
        }
    }
}

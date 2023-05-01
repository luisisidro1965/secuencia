<?php

namespace Database\Seeders;

use App\Models\Progedu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Familia;
use Faker;

class ProgeduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $fam = Familia::all('id');

        for($i=0; $i<=10; $i++){
            $pe = new Progedu();

            $pe->nombre = $faker->name();
            $pe->area = $faker->address();
            $pe->nivel = $faker->colorName();
            $pe->familia_id = $fam->random()->id;
            $pe->save();
        }
    }
}

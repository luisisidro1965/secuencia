<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manual;
use Faker;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        for($i=1; $i<=70; $i++){
            $manual = new Manual();
            $manual->nombre = $faker->name();
            $manual->autor = $faker->name();
            $manual->numprac = $faker->numberBetween(2,5);

            $manual->save();
        }
    }
}

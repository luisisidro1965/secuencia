<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        for($i=0; $i<=100;$i++){
            $producto = new Producto();

            $producto->nombre = $faker->name();
            $producto->cantidad = $faker->randomFloat();
            $producto->categoria = $faker->name();

            $producto->save();

        }

    }
}

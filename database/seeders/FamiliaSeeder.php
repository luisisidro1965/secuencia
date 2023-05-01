<?php

namespace Database\Seeders;

use App\Models\Familia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class FamiliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        $areas =array (
            'MECATRÓNICA'=>'MT',
            'MANTENIMIENTO'=>'MTO',
            'MECÁNICA'=>'ME',
            'TECNOLOGÍAS DE LA INFORMACIÓN '=>'TI',
            'DESARROLLO DE NEGOCIOS'=>'DN',
            'ADMINISTRACIÓN '=>'AD'
        );

        foreach ($areas as $key => $value) {
            $familia = new Familia();
            $familia->clave = $value;
            $familia->nombre = $key;
            $familia->save();
        }
    }
}

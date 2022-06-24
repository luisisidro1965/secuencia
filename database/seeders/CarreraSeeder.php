<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */
    public function run()
    {
        $carreras = [
            'Ingeniería en desarrollo y gestión de software',
            'TSU e tecnologías de la información'
        ];

        foreach ($carreras as $value) {
            DB::table('carreras')->insert([
                'nombre' => $value,
            ]);
        }
    }
}

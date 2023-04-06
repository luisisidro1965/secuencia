<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccionesprevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accionesp = [
            'Tramite de beca',
            'Asesoría',
            'Platica motivacional',
            'Consulta psicopedagógica',
            'Platica con padres o tutor',
            'Aplicación del reglamento',
            'Tutoría individualizada'
        ];
        
        foreach ($accionesp as $acciones) {

            DB::table('accionesprev')->insert([
                'descripción' => $acciones,
            ]);

        }
    }
}

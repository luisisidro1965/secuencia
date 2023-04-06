<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CausasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$faker = Faker\Factory::create();

        $causas = [
            'Reprobó una asignatura por competencias',
            'Dejó de asistir 10 días hábiles consecutivos sin justificación',
            'No cumplió con la entrega de documentos oficiales en el plazo',
            'Notificó que no regresará y quiere retirar sus documentos. ',
            'Reprobó tres o más asignaturas en periodo ordinario',
            'Reprobó una asignatura en regula',
            'Por actos cometidos en contra de la disciplina. '
        ];

        $valor = 65;
        

        foreach ($causas as $value) {
            $letra = chr($valor);
            DB::table('causas')->insert([
                'descripción' => $value,
                'identificación' => $letra,
            ]);
            $valor++;
        }

    }
}

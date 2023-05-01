<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Progedu;
use App\Models\Familia;
use Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        $pe = Progedu::all('id');
        

        for ($i = 0; $i <= 200; $i++) {
            $user = new User();

            $user->name = $faker->name();
            $user->apellidos = $faker->lastName();
            $user->apellidos = $faker->email();
            $user->password = encrypt('123');
            $user->rol = $faker->randomElement(['tutorado', 'tutor', 'docente', 'coordinador', 'asistente', 'director']);
            $user->foto = $faker->image(null, 360, 360, 'animals', true);
            $user->progedu_id = $pe->random()->id;
            $user->sexo = $faker->randomElement(['masculino', 'femenino']);
            $user->visible = $faker->randomElement(['On', 'Off']);
            $user->status = $faker->randomElement(['On', 'Off']);
            $user->save();
        }
    }
}

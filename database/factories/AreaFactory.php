<?php


use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
//@codingStandardsIgnoreLine
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Area::class;

    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Perangkat;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerangkatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perangkat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_perangkat' => $this->faker->name(),
            'jabatan'=> $this->faker->jobTitle(),
            'masa_jabatan' => $this->faker->randomElement(['2015-2020', '2020-2025']),
            'foto' => 'foto',
            'status' => $this->faker->randomElement(['1', '0']),
            ];
    }
}

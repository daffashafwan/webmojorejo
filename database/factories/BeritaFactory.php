<?php

namespace Database\Factories;


use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'judul_berita' => $this->faker->title,
        'isi_berita'=> $this->faker->text,
        'status' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
        'gambar' => 'gambar',
        'tanggal_post' => $this->faker->dateTime,
        ];
    }
}

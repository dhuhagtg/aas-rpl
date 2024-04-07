<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\berita>
 */
class beritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence,
            'slug' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph(2, true),
            'user_id' => User::factory()->create()->id, // Gunakan factory User untuk membuat pengguna baru dan gunakan ID-nya
            'gambar' => $this->faker->image('public/storage/berita', 400, 300, null, false), // Simpan gambar di folder public/storage/berita

        ];
    }
}

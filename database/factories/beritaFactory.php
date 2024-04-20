<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
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
            'judul' => $judul = $this->faker->sentence,
            'slug' => Str::slug($judul),
            'deskripsi' => $this->faker->paragraph(2, true),
            'user_name' => User::factory()->create()->nama, // Gunakan factory User untuk membuat pengguna baru dan gunakan ID-nya
            'gambar' => $this->faker->image('public/storage/berita', 400, 300, null, false), // Simpan gambar di folder public/storage/berita

        ];
    }
}

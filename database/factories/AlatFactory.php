<?php
namespace Database\Factories;

use App\Models\Alat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Alat>
 */
class AlatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_barang' => fake()->unique()->bothify('ALT-###'),
            'nama_barang' => fake()->randomElement([
                'Tenda',
                'Carrier',
                'Sleeping Bag',
                'Kompor Portable',
                'Headlamp',
                'Matras'
            ]),
            'kategori' => fake()->randomElement([
                'Perlengkapan Tidur',
                'Perlengkapan Masak',
                'Tas',
                'Penerangan'
            ]),
            'stok' => fake()->numberBetween(1, 50),
            'harga_sewa' => fake()->numberBetween(10000, 100000),
            'kondisi' => fake()->randomElement([
                'Baik',
                'Perlu Perbaikan'
            ]),
        ];
    }
}

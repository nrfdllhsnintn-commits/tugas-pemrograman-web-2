<?php
namespace Database\Seeders;

use App\Models\Alat;
use Illuminate\Database\Seeder;

class AlatSeeder extends Seeder
{
    public function run(): void
    {
        Alat::factory(10)->create();
    }
}

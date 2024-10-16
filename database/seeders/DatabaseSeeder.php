<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gunung;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder untuk User dan Gunung
        $this->call([
            UserSeeder::class,
            GunungSeeder::class,
        ]);
    }
}

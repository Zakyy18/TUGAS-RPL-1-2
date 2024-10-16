<?php

namespace Database\Seeders;

use App\Models\Gunung;
use Illuminate\Database\Seeder;

class GunungSeeder extends Seeder
{
    public function run()
    {
        // Hanya tambahkan jika gunung belum ada
        if (!Gunung::where('nama_gunung', 'Gunung Semeru')->exists()) {
            Gunung::create([
                'nama_gunung' => 'Gunung Semeru',
                'deskripsi' => 'Gunung tertinggi di Pulau Jawa.',
                'status_buka' => true,
                'link_booking' => 'https://www.booking-semeru.com',
            ]);
        }

        if (!Gunung::where('nama_gunung', 'Gunung Merapi')->exists()) {
            Gunung::create([
                'nama_gunung' => 'Gunung Merapi',
                'deskripsi' => 'Gunung api paling aktif di Indonesia.',
                'status_buka' => false,
                'link_booking' => 'https://www.booking-merapi.com',
            ]);
        }
    }
}
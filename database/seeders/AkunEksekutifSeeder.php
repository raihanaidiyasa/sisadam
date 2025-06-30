<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AkunEksekutif;
use Illuminate\Support\Facades\Hash;

class AkunEksekutifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AkunEksekutif::create([
            'user_id'       => 'AE003',
            'username'      => 'adminbaru',
            'nama_lengkap'  => 'Admin Baru',
            'password'      => Hash::make('password123'),
        ]);

        // Anda bisa menambahkan user lain di sini jika perlu
    }
}
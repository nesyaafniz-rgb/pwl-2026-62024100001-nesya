<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poli::create([
            'code' => 'POL001',
            'name' => 'Poli Umum',
            'description' => 'Pemeriksaan kesehatan umum',
            'is_active' => true,
        ]);

        Poli::create([
            'code' => 'POL002',
            'name' => 'Poli Anak',
            'description' => 'Pemeriksaan kesehatan bayi dan anak',
            'is_active' => true,
        ]);

        Poli::create([
            'code' => 'POL003',
            'name' => 'Poli Gigi',
            'description' => 'Pemeriksaan dan perawatan gigi',
            'is_active' => true,
        ]);

        Poli::create([
            'code' => 'POL004',
            'name' => 'Poli Kandungan',
            'description' => 'Pemeriksaan kehamilan dan kandungan',
            'is_active' => true,
        ]);

        Poli::create([
            'code' => 'POL005',
            'name' => 'Poli Penyakit Dalam',
            'description' => null,
            'is_active' => true,
        ]);

        Poli::create([
            'code' => 'POL006',
            'name' => 'Poli Mata',
            'description' => 'Pemeriksaan kesehatan mata',
            'is_active' => false,
        ]);
    }
}
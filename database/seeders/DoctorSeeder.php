<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'doctor_code' => 'DOK001',
            'name' => 'dr. Budi Santoso',
            'specialization' => 'Umum',
            'phone' => '081234561001',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK002',
            'name' => 'dr. Rina Wijaya',
            'specialization' => 'Anak',
            'phone' => '081234561002',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK003',
            'name' => 'dr. Hendra Kusuma',
            'specialization' => 'Gigi',
            'phone' => '081234561003',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK004',
            'name' => 'dr. Siti Aminah',
            'specialization' => 'Kandungan',
            'phone' => '081234561004',
            'is_active' => false,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK005',
            'name' => 'dr. Agus Prasetyo',
            'specialization' => 'Penyakit Dalam',
            'phone' => '081234561005',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK006',
            'name' => 'dr. Dewi Lestari',
            'specialization' => 'Kulit dan Kelamin',
            'phone' => '081234561006',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK007',
            'name' => 'dr. Fajar Nugraha',
            'specialization' => 'Mata',
            'phone' => '081234561007',
            'is_active' => false,
        ]);

        Doctor::create([
            'doctor_code' => 'DOK008',
            'name' => 'dr. Linda Permata',
            'specialization' => 'THT',
            'phone' => '081234561008',
            'is_active' => true,
        ]);
    }
}
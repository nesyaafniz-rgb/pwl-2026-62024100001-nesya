<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Poli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poliIds = Poli::pluck('id', 'code');

        $doctors = [
            ['DOK001', 'dr. Budi Santoso', 'Umum', '081234561001', true, 'POL001'],
            ['DOK002', 'dr. Rina Wijaya', 'Anak', '081234561002', true, 'POL002'],
            ['DOK003', 'dr. Hendra Kusuma', 'Gigi', '081234561003', true, 'POL003'],
            ['DOK004', 'dr. Siti Aminah', 'Kandungan', '081234561004', false, 'POL004'],
            ['DOK005', 'dr. Agus Prasetyo', 'Penyakit Dalam', '081234561005', true, 'POL005'],
            ['DOK006', 'dr. Dewi Lestari', 'Kulit dan Kelamin', '081234561006', true, 'POL001'],
            ['DOK007', 'dr. Fajar Nugraha', 'Mata', '081234561007', false, null],
            ['DOK008', 'dr. Linda Permata', 'THT', '081234561008', true, null],
            ['DOK009', 'dr. Andi Pratama', 'Umum', '081234561009', true, 'POL001'],
            ['DOK010', 'dr. Maya Anggraini', 'Anak', null, true, 'POL002'],
            ['DOK011', 'dr. Rudi Hermawan', 'Gigi', '081234561011', true, 'POL003'],
            ['DOK012', 'dr. Putri Handayani', 'Kandungan', '081234561012', true, 'POL004'],
            ['DOK013', 'dr. Eko Wibowo', 'Penyakit Dalam', '081234561013', false, 'POL005'],
            ['DOK014', 'dr. Nia Ramadhani', 'Umum', null, true, 'POL001'],
            ['DOK015', 'dr. Bayu Saputra', 'Anak', '081234561015', true, 'POL002'],
            ['DOK016', 'dr. Citra Dewanti', 'Gigi', '081234561016', false, 'POL003'],
            ['DOK017', 'dr. Hari Setiawan', 'Penyakit Dalam', '081234561017', true, 'POL005'],
            ['DOK018', 'dr. Lia Fitriani', 'Kandungan', '081234561018', true, null],
        ];

        foreach ($doctors as $data) {
            Doctor::updateOrCreate(
                ['doctor_code' => $data[0]],
                [
                    'name' => $data[1],
                    'specialization' => $data[2],
                    'phone' => $data[3],
                    'is_active' => $data[4],
                    'poli_id' => $data[5] ? ($poliIds[$data[5]] ?? null) : null,
                ]
            );
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'medical_record_number' => 'RM0001',
            'name' => 'Ahmad',
            'gender' => 'L',
            'birth_date' => '2000-05-10',
            'address' => 'Kudus',
            'phone' => '081234567890',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0002',
            'name' => 'Siti',
            'gender' => 'P',
            'birth_date' => '2001-08-15',
            'address' => 'Jepara',
            'phone' => '081234567891',
        ]);
    }
}
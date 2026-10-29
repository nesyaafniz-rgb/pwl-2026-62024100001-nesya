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
        $patients = [
            ['Ahmad', 'L', '2000-05-10', 'Kudus', '081234567890'],
            ['Siti', 'P', '2001-08-15', 'Jepara', '081234567891'],
            ['Budi Santoso', 'L', '1998-03-21', 'Pati', '081234567892'],
            ['Rina Wulandari', 'P', '1999-11-02', 'Demak', '081234567893'],
            ['Dedi Kurniawan', 'L', '1995-07-14', 'Kudus', '081234567894'],
            ['Lina Permata', 'P', '2002-01-30', 'Jepara', '081234567895'],
            ['Eko Prasetyo', 'L', '1990-09-09', 'Semarang', null],
            ['Maya Sari', 'P', '1997-12-25', 'Kudus', '081234567897'],
            ['Fajar Nugroho', 'L', '2003-04-18', 'Pati', '081234567898'],
            ['Dewi Lestari', 'P', '1994-06-06', 'Demak', '081234567899'],
            ['Agus Setiawan', 'L', '1988-02-12', 'Kudus', '081234567800'],
            ['Nurul Hidayah', 'P', '2000-10-20', 'Jepara', null],
            ['Rizky Maulana', 'L', '2004-08-08', 'Semarang', '081234567802'],
            ['Putri Ayu', 'P', '2001-05-27', 'Kudus', '081234567803'],
            ['Hendra Wijaya', 'L', '1992-01-15', 'Pati', '081234567804'],
            ['Sri Wahyuni', 'P', '1985-03-03', 'Demak', '081234567805'],
            ['Bagus Pratama', 'L', '1999-09-19', 'Jepara', '081234567806'],
            ['Ani Rahmawati', 'P', '1996-07-07', 'Kudus', null],
            ['Joko Susilo', 'L', '1980-12-01', 'Semarang', '081234567808'],
            ['Wulan Sari', 'P', '2002-02-14', 'Pati', '081234567809'],
            ['Andi Saputra', 'L', '1993-04-04', 'Demak', '081234567810'],
            ['Fitri Handayani', 'P', '1998-08-23', 'Kudus', '081234567811'],
            ['Taufik Hidayat', 'L', '2001-11-11', 'Jepara', '081234567812'],
            ['Yuni Astuti', 'P', '1991-05-05', 'Semarang', '081234567813'],
            ['Rudi Hartono', 'L', '1987-10-10', 'Pati', null],
            ['Lestari Ningsih', 'P', '2000-06-16', 'Demak', '081234567815'],
        ];

        foreach ($patients as $index => $data) {
            Patient::firstOrCreate(
                ['medical_record_number' => sprintf('RM%04d', $index + 1)],
                [
                    'name' => $data[0],
                    'gender' => $data[1],
                    'birth_date' => $data[2],
                    'address' => $data[3],
                    'phone' => $data[4],
                ]
            );
        }
    }
}
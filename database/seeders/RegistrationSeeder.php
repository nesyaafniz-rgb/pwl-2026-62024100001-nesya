<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patientIds = Patient::orderBy('medical_record_number')->pluck('id')->values();
        $doctorIds = Doctor::orderBy('doctor_code')->pluck('id')->values();

        $complaints = [
            'Demam dan batuk',
            'Sakit kepala',
            'Nyeri gigi',
            'Kontrol rutin',
            null,
            'Sakit perut',
            'Pusing',
            null,
        ];

        $statuses = ['waiting', 'done', 'cancelled', 'done', 'waiting'];

        for ($i = 0; $i < 24; $i++) {
            Registration::firstOrCreate(
                [
                    'patient_id' => $patientIds[$i % $patientIds->count()],
                    'doctor_id' => $doctorIds[($i * 7) % $doctorIds->count()],
                    'registration_date' => Carbon::parse('2026-10-01')
                        ->addDays($i % 14)
                        ->toDateString(),
                ],
                [
                    'complaint' => $complaints[$i % count($complaints)],
                    'status' => $statuses[$i % count($statuses)],
                ]
            );
        }
    }
}
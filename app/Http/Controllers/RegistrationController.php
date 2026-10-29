<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $statuses = [
            'waiting' => 'Menunggu',
            'done' => 'Selesai',
            'cancelled' => 'Dibatalkan',
        ];

        $query = Registration::with(['patient', 'doctor']);

        if ($request->filled('search')) {
            $search = $request->search;

            $query->whereHas('patient', function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('doctor_id')) {
            $query->where('doctor_id', $request->doctor_id);
        }

        if (in_array($request->status, array_keys($statuses), true)) {
            $query->where('status', $request->status);
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('registration_date', $request->tanggal);
        }

        $direction = $request->direction === 'asc' ? 'asc' : 'desc';

        $registrations = $query
            ->orderBy('registration_date', $direction)
            ->orderBy('id', $direction)
            ->paginate(10)
            ->withQueryString();

        $doctors = Doctor::orderBy('name')->get();

        return view('pendaftaran.index', compact('registrations', 'statuses', 'doctors'));
    }
}
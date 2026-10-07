<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('pasien.index', compact('patients'));
    }

    public function show($id)
    {
        return 'Menampilkan pasien dengan ID: ' . $id;
    }
}
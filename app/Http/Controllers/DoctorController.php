<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [
            ['nama' => 'dr. Andi', 'spesialisasi' => 'Umum', 'status' => 'Aktif'],
            ['nama' => 'dr. Budi', 'spesialisasi' => 'Anak', 'status' => 'Aktif'],
            ['nama' => 'dr. Citra', 'spesialisasi' => 'Gigi', 'status' => 'Cuti'],
            ['nama' => 'dr. Dewi', 'spesialisasi' => 'Kulit', 'status' => 'Aktif'],
            ['nama' => 'dr. Eko', 'spesialisasi' => 'THT', 'status' => 'Tidak Aktif'],
        ];

        return view('dokter.index', compact('doctors'));
    }
}
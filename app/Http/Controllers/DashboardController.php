<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\Penyewaan;
use App\Models\Penyewa;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_alat = Alat::count();
        $jumlah_sewa = Penyewaan::count();
        $jumlah_penyewa = Penyewa::count();
        return view('dashboard', compact('jumlah_alat', 'jumlah_sewa', 'jumlah_penyewa'));
    }
}
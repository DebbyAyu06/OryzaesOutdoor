<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Alat;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{

    public function __construct()
    {
        $this->Penyewaan = new Penyewaan();
    }

    public function halamanpenyewaan()
    {
        $penyewaan = Penyewaan::all();
        return view('Penyewaan.penyewaan', compact('penyewaan'));
    }

    public function tambahsewa()
    {
        $alat = Alat::all();
        $penyewa = Penyewa::all();
        return view('Penyewaan.tambahpenyewaan', compact('alat', 'penyewa'));
    }

    public function storesewa(Request $request)
    {
        dd($request->all());
        // $alat = $request->alat;
        // $jumlah = $request->jmlh_alat;
        // for ($i=0; $i < count($alat); $i++) {
        //     Penyewaan::create([
        //         'jmlh_alat' => $jumlah[$i],
        //         'tgl_sewa' => $request->tgl_sewa,
        //         'tgl_kmbl' => $request->tgl_kmbl,
        //         'total_byr' => $request->total_byr,
        //         'status' => $request->status,
        //         'id_alat' => $alat[$i],
        //     ]);
        // }

        // return redirect('penyewaan');
    }

    public function show($id)
    {
        //
    }

    public function editsewa($id)
    {
        $pen = Penyewaan::findorfail($id);
        return view('Penyewaan.aksipenyewaan', compact('pen'));
    }

    public function update(Request $request, $id)
    {
        $pen = Penyewaan::findorfail($id);
        $pen->update($request->all());
        return redirect('penyewaan');
    }

    public function destroy($id)
    {
        $pen = Penyewaan::findorfail($id);
        $pen->delete();
        return back();
    }
}

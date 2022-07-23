<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Alat;
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
        return view('Penyewaan.tambahpenyewaan', compact('alat'));
    }

    public function storesewa(Request $request)
    {
        Penyewaan::create([
            'jmlh_alat' => $request->jmlh_alat,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_kmbl' => $request->tgl_kmbl,
            'total_byr' => $request->total_byr,
            'status' => $request->status,
            'id_alat' => $request->alat,
        ]);
        return redirect('penyewaan');
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

<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Alat;
use App\Models\Penyewa;
use App\Models\Diskon;
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
        $diskon = Diskon::all();
        return view('Penyewaan.tambahpenyewaan', compact('alat', 'penyewa', 'diskon'));
    }

    public function storesewa(Request $request)
    {
        $data = $request->all();
        dd($data);
        $sewaAlat = new Alat;
        $sewaAlat->id_alat = $data['alat'];
        $sewaAlat->jmlh_alat = $data['jmlh_alat'];

        Penyewaan::create([
            'jmlh_alat' => $request->jmlh_alat,
            'tgl_sewa' => $request->tgl_sewa,
            'tgl_kmbl' => $request->tgl_kmbl,
            'total_byr' => $request->total_byr,
            'id_alat' => $request->alat,
            'id_penyewa' => $request->penyewa,
            'id_diskon' => $request->diskon,
        ]);

        return redirect('penyewaan');
    }

    public function show($id)
    {
        $pen = Penyewaan::findorfail($id);
        return view('Penyewaan.showpenyewaan', compact('pen'));
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

    public function status($id)
    {
        $pen = Penyewaan::where('id', $id)->first();
        $status_sekarang = $pen->status;
        if($status_sekarang == 1){
            Penyewaan::where('id', $id)->update(['status'=>0]);
        }else{
            Penyewaan::where('id', $id)->update(['status'=>1]);
        }
        return redirect('penyewaan');
    }
}
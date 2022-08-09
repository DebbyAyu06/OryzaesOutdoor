<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Alat;
use App\Models\Penyewa;
use App\Models\Diskon;
use App\Models\Sewaalat;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PenyewaanController extends Controller
{

    public function __construct()
    {
        $this->Penyewaan = new Penyewaan();
    }

    public function halamanpenyewaan()
    {
        $penyewaan = Penyewaan::where('status', '1')->get();
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

        $sewa = new Penyewaan;
        $sewa->id_penyewa = $data["penyewa"];
        $sewa->tgl_sewa = $data["tgl_sewa"];
        $sewa->tgl_kmbl = Carbon::parse($data["tgl_sewa"])->addDays($data["lama_sewa"]);
        $sewa->status = 1;
        $total = 0;

        foreach ($data["alat"] as $key => $value) {
            $alat = Alat::findorfail($data["alat"][$key]);
            $harga = $alat->harga;
            $jmlh_alat = $data["jmlh_alat"][$key];
            $total = $total + ($harga * $jmlh_alat) * $data["lama_sewa"];
        }

        if ($request->diskon) {
            $dis = Diskon::findorfail($data["diskon"]);
            $sewa->total_byr = $total - ($total * $dis->ttl_diskon / 100);
            $sewa->id_diskon = $data["diskon"];
        } else {
            $sewa->total_byr = $total;
        }

        $sewa->save();

        foreach ($data["alat"] as $key => $value) {
            Sewaalat::create([
                'penyewaan_id' => $sewa->id,
                'id_alat' => $data["alat"][$key],
                'jumlah_alat' => $data["jmlh_alat"][$key],
            ]);
        }
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

    public function kembali(Request $request, $id)
    {
        $pen = Penyewaan::where('id', $id)->first();
        // $status_sekarang = $pen->status;
        // if($status_sekarang == 1){
        Penyewaan::where('id', $id)->update(['status'=> 1, 'denda'=> $request->denda, 'tgl_kmbl'=> $request->tgl_kmbl]);
        // }else{
        //     Penyewaan::where('id', $id)->update(['status'=>1]);
        // }
        return redirect('penyewaan');
    }
}

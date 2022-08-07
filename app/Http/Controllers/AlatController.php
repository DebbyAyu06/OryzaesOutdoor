<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class AlatController extends Controller
{

    public function __construct()
    {
        $this->Alat = new Alat();
    }

    public function halamanalat()
    {
        $dtAlat = Alat::all();
        return view('Alat.alat', compact('dtAlat'));
    }

    public function tambahalat()
    {
        return view('Alat.tambahalat');
    }

    public function storealat(Request $request)
    {
        $alat = new Alat;
        $alat->nm_alat = $request->input('nm_alat');
        $alat->harga = $request->input('harga');
        $alat->stok = $request->input('stok');
        $alat->jumlah = $request->input('jumlah');
        if ($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('upload/alat/'), $filename);
            $alat->gambar = $filename;
        }
        $alat->save();
        return redirect('alat');
    }

    public function editalat($id)
    {
        $alt = Alat::findorfail($id);
        return view('Alat.aksialat', compact('alt'));
    }

    public function update(Request $request, $id)
    {
        $alt = Alat::findorfail($id);
        $alt->update($request->all());
        return redirect('alat');
    }

    public function destroy($id)
    {
        $alt = Alat::findorfail($id);
        $alt->delete();
        return back();
    }
}
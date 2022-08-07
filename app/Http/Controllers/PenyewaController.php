<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{

    public function __construct()
    {
        $this->Penyewa = new Penyewa();
    }

    public function halamanpenyewa()
    {
        $dtPenyewa = Penyewa::all();
        return view('Penyewa.penyewa', compact('dtPenyewa'));
    }

    public function tambahpenyewa()
    {
        return view('Penyewa.tambahpenyewa');
    }

    public function storepenyewa(Request $request)
    {
        Penyewa::create($request->all());
        return redirect('penyewa');
    }

    public function editpenyewa($id)
    {
        $pen = Penyewa::findorfail($id);
        return view('Penyewa.aksipenyewa', compact('pen'));
    }

    public function update(Request $request, $id)
    {
        $pen = Penyewa::findorfail($id);
        $pen->update($request->all());
        return redirect('penyewa');
    }

    public function destroy($id)
    {
        $pen = Penyewa::findorfail($id);
        $pen->delete();
        return back();
    }
}
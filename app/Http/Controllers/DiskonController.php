<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;

class DiskonController extends Controller
{
    public function __construct()
    {
        $this->Diskon = new Diskon();
    }

    public function halamandiskon()
    {
        $dtDiskon = Diskon::all();
        return view('Diskon.diskon', compact('dtDiskon'));
    }

    public function tambahdiskon()
    {
        return view('Diskon.tambahdiskon');
    }

    public function storediskon(Request $request)
    {
        if($request->ttl_diskon == 0){
            $diskon = 0;
        }else{
            $diskon = $request->ttl_diskon / 100 ;
        }
        Diskon::create([
            'nm_diskon' => $request->nm_diskon,
            'ttl_diskon' => $diskon,
        ]);
        return redirect('diskon');
    }

    public function editdiskon($id)
    {
        $dis = Diskon::findorfail($id);
        return view('Diskon.aksidiskon', compact('dis'));
    }

    public function update(Request $request, $id)
    {
        $dis = Diskon::findorfail($id);
        $dis->update($request->all());
        return redirect('diskon');
    }

    public function destroy($id)
    {
        $dis = Diskon::findorfail($id);
        $dis->delete();
        return back();
    }
}

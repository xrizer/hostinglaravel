<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarakuntansi;

class InputJurnalController extends Controller
{
    //  public function dashboard()
    // {
    //     return view('pemain.dashboard');
    // }
      public function index1()
    {
        $daftarakunz = daftarakuntansi::all();
        return view('pemain.daftarakun',compact('daftarakunz'));
    }
     public function index2()
    {
        return view('pemain.buatakun');
    }

      public function create(Request $request)
    {
        daftarakuntansi::create($request->all());
        return redirect('/pemain/daftarakun');    
    }
      public function destroy($id)
    {
        $akun = daftarakuntansi::find($id);
        $akun->delete();
        return redirect('/pemain/daftarakun');   
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarakuntansi;

class DaftarakunController extends Controller
{
     public function dashboard()
    {
        return view('pemain.dashboard');
    }
      public function index1()
    {
        $daftarakunz = daftarakuntansi::all();
        $listkambing = daftarakuntansi::all()->sortBy('kode_kambing');
        $jumlahkambing = $listkambing->count();
        return view('pemain.daftarakun',compact('daftarakunz','jumlahkambing'));
    }
     public function index2()
    {
        return view('pemain.buatakun');
    }

      public function create(Request $request)
    {
      // // buat update
      //   $siswa = \App\Siswa::find($id);
      //   $siswa -> update($request -> all());
      //   if($request->hasFile('avatar')){
      //   $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
      //   $siswa->avatar = $request ->file('avatar')->getClientOriginalName());
      //   $siswa->save();
      //   return redirect('/siswa')
      $this->validate($request,[
      'kode_kambing' => 'required',
      'harga' => 'required',
      'gambar' => 'required'
      ]);

      $akun = daftarakuntansi::create($request->all());
        if($request->hasFile('gambar')){
          $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
          $akun->gambar = $request ->file('gambar')->getClientOriginalName();
          $akun->save();
        }
        return redirect('/pemain/daftarakun');    
    }
      public function destroy($id)
    {
        $akun = daftarakuntansi::find($id);
        $akun->delete();
        return redirect('/pemain/daftarakun');   
    }

    
}

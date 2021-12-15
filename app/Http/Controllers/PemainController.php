<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PemainModel;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemain = PemainModel::all();
        $jumlah_pemain = $pemain->count();
        return view('pemain.index',compact('pemain','jumlah_pemain'));
    }


    /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
    public function create(Request $request)
    {
        PemainModel::create($request->all());
        return redirect('/pemain');
    }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $books = Book::all();
//          return $books;
//     }

    /**
     * Display the specified resource.
     *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orang = PemainModel::find($id);
        return view('pemain.detail',['orang' => $orang]);
    }
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
    public function edit($id)
    {
        $orang = PemainModel::find($id);
        return view('pemain.edit',['orang' => $orang]);
    }



//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
    public function update(Request $request, $id)
    {
        $orang = PemainModel::find($id);
        $orang->update($request->all());
        return redirect('/pemain');
    }


//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
    public function destroy($id)
    {
        $orang = PemainModel::find($id);
        $orang->delete();
        return redirect('/pemain');
    }
}




<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use App\Models\tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.Tiket.tiket',[
            "title" => "Tiket",
            "tiket"=>  tiket::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $randomNumber = Str::random(10);
        return view('user.tiket.create',[
            "title" => "Create",
            'data' =>$randomNumber,
            "wisata" =>Wisata::find($id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datavalid=$request->validate([
            'kode'=>'required',
            'tanggal'=>'required',
            'jam_kunjung'=>'required',
            'jumlah_pengunjung'=>'required'
        ]);
        tiket::create($datavalid);

        return redirect('/beranda')->with('success','Pemesanan Tiket Berhasi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tiket $tiket)
    {
        return view('admin.Tiket.show',compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tiket $tikett)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiket $tikett)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiket $tiket)
    {

        $tiket->delete();

        return redirect('/pembatalan')->with('success','tiket Berhasil di Hapus');
    }
    public function cari2(Request $request,$kode){

        if($request->has('kode')){
            $tiket=tiket::where('kode','like',$request->kode)->get();
        }else{
            $tiket=tiket::all();
        }

        return view('User.tiket.batal2',["title" => "Pembatalan",'tiket'=>$tiket]);

    }
}

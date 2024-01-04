<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardWisataController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Wisata.wisataAdmin',[
            "title" => "Wisata",
            "wisatas"=>  Wisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Wisata.create',[
            "title" => "Create"
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
        $datavalid = $request->validate([
            'nama' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'jam_buka' => 'required|max:255',
            'jam_tutup' => 'required|max:255',
            'harga' => 'required|max:255',
            'kuota' => 'required|max:11',
            'deskripsi' => 'required',
            'img' => 'required|image'
        ]);
        $datavalid['img'] = $request->file('img')->store('img-wisata');

        Wisata::create($datavalid);

        return redirect('/wisata')->with('success','Wisata baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::find($id);
        return view('admin.Wisata.show',[
            "title"=> "Detail"
        ])->with('wisata',$wisata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::find($id);

        return view('admin.Wisata.edit',[
            "title"=> "edit",
            "wisata"=> $wisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $datavalid = $request->validate([
            'nama' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'jam_buka' => 'required|max:255',
            'jam_tutup' => 'required|max:255',
            'harga' => 'required|max:255',
            'kuota' => 'required|max:11',
            'deskripsi' => 'required',
        ]);
        if ($request->file('img')){
            $datavalid['img'] = $request->file('img')->store('img-wisata');
        }

        Wisata::where('id', $id)
                ->update($datavalid);


        return redirect('/wisata')->with('success','Wisata telah diperbarui!');
    }
    public function updateKuota(Request $request,$id){
        $datavalid = $request->validate([
            'kuota' => 'required|max:11',
        ]);
        Wisata::where('id', $id)
                ->update($datavalid);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
        return redirect('/wisata')->with('success','Data wisata telah dihapus');
    }
}

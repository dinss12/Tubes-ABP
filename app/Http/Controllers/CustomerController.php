<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**d
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.index', [
            "title" => "Customer",
            "customers" =>  Customer::all()
        ]);
    }

    public function cari(Request $request)
	{
		$keyword = $request->cari;
        $customer = Customer::where('username', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.customer.index', ['customers' => $customer]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.edit', [
            "title"=>"edit"
        ])->with('customer', $customer);
    }

    public function update(Request $request, $id)
    {
        $datavalid = $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'level' => 'required',
            'password'=>'required'
        ]);

        Customer::where('id', $id)->update($datavalid);
        return redirect('/customer')->with('success', 'Berhasil memperbaharui data customer!');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customer')->with('success','Data customer telah dihapus');
    }
}

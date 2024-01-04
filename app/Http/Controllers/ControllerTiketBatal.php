<?php

namespace App\Http\Controllers;
use App\Models\tiket;
use Illuminate\Http\Request;

class ControllerTiketBatal extends Controller
{
    public function index()
    {
        return view('User.tiket.batal',[
            "title" => "Pembatalan",
            'tiket'=>tiket::all()
        ]);
    }
}

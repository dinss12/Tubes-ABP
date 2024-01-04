<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use Illuminate\Http\Request;

class ControllerBeranda extends Controller
{
    public function index()
    {
        return view('User.Beranda',[
            "title" => "Beranda",
            "wisatas"=>  Wisata::all()
        ]);
    }
}

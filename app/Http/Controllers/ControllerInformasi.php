<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerInformasi extends Controller
{
    public function index()
    {
        return view('User.Informasi',[
            "title" => "Informasi"
        ]);
    }
}

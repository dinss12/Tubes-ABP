<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use App\Models\Feedback;
use App\Models\tiket;
use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        // $customers = Customer::with('customer')->get();
        return view('admin.dashboardAdmin',[
            "title" => "Dashboard",
            "wisatas"=>  Wisata::all(),
            "countWisata"=> Wisata::count(),
            "countFeedback" => Feedback::count(),
            "countTiket" => tiket::count(),
            "countCustomer" => Customer::count()
            // 'customer' => $customers
        ]);
    }
}

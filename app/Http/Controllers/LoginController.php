<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect('dashboard');
            } elseif ($user->level == 'editor') {
                return redirect('beranda');
            }
        }
        return view('login');
    }

    public function Login2(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email','password'))) {
            if(Auth::user()->level == 'admin'){
                return redirect('dashboard');
            } else {
                return redirect('beranda');
            }
        } else {
            return back()->withErrors(['login_gagal' => 'Username or password is not matched']);
        }
    }
    public function Login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        echo("MASUK SINI");

        $kredensil = $request->only('username','password');
            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    $request->session()->regenerate();
                    return redirect(route('dasboard'));
                } elseif ($user->level == 'editor') {
                    return redirect('beranda');
                }
            }
        return back()->with(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
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
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'level'=>'required',
        ]);
        Customer::create($datavalid);

        return redirect('/login')->with('success','Register telah berhasil!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

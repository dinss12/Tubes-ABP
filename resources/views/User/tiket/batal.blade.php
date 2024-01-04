@extends('User.Layouts.main')
@section('content')
    <link href="/css/pembatalan.css" rel="stylesheet">
    <div class="bungkus">
        <h1 style="text-align: center;color: white;">
            Pembatalan Tiket
        </h1>
            
        <h6 style="text-align: center;color: white;">
            Ketik kode tiket yang akan dibatalkan. Tiket yang telah dibatalkan akan mengembalikan kuota wisata.
        </h6>
        <br>
        <br>
        <h1 style="text-align: center;color: white;">
            Masukkan Kode Tiket
        </h1>
        @if(session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @foreach ($tiket as $t)
        @if ($loop->first)
            <form action="{{ route('batal',['kode' => $t->kode]) }}" method='GET'>
                @csrf
                <input type="search" id="kode" name="kode" style="margin-left: 400px;width:300px;height:40px;border-radius: 5px;" placeholder="Ketik kode tiket disini">
                <button type="submit" class="cek" >Cek Tiket</button></br>
            </form>
        @endif
        @endforeach
    </div>
@endsection
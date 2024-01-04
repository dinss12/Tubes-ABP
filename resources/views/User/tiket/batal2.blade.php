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
            @foreach ($tiket as $t)
            @if ($loop->first)
            <form action="{{ route('batal',['kode' => $t->kode]) }}" method='get'>
                @csrf
                <input type="search" id="kode" name="kode" style="margin-left: 400px;width:300px;height:40px;border-radius: 5px;" placeholder="Ketik kode tiket disini">
                <button class="cek" onclick="myFunction()" >Cek Tiket</button></br>
            </form>
            @endif         
            @endforeach
            <div class="found">
            @foreach ($tiket as $t)
                <h6 style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Kode tiket  :    <span style="float:right;"> {{ $t->kode }}</span> </h6>
                <h6 style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Tanggal berkunjung : <span style="float:right;"> {{ $t->tanggal }}</span></h6>
                <h6 style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Jam berkunjung : <span style="float:right;"> {{ $t->jam_kunjung }}</span></h6>
                <h6 style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Jumlah pengunjung : <span style="float:right;"> {{ $t->jumlah_pengunjung }}</span></h6>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tiket.destroy', $t->id) }}" method="POST" style="text-align:center;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Batalkan tiket</button>
                </form>
            @endforeach
            </div>
        </div>
@endsection
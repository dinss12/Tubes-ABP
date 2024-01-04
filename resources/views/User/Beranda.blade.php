@extends('User.Layouts.main')
@section('content')
<link href="/css/beranda.css" rel="stylesheet">
@if(session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif
@foreach ($wisatas as $wisata)
<div class="cardBox">
    <div class="img">
        <img src="{{ asset('storage/' . $wisata->img) }}" width="250px" height="375px">
    </div>
    <div class="content">
        <div class="isi">
            <label id="sub-judul" class="col-lg-12"><b>Nama ; {{ $wisata->nama }}</b></label>
            <br />
            <br />  
            <label id="isiSub-judul" class="col-lg-12"><b>Lokasi ;</b> </label>
            <label id="isiSub-judul" class="col-lg-12"> <b>{{ $wisata->lokasi }}</b> </label>
            <br />
            <br />
            <label id="sub-judul" class="col-lg-12"><b>Jam Buka ; {{ $wisata->jam_buka }} WIB | Jam Tutup ; {{ $wisata->jam_tutup }} WIB</b> </label>
            <br />
            <br />
            <label id="isiSub-judul" class="col-lg-12"><b>Harga ; Rp.{{ $wisata->harga }}.00 /orang</b> </label>
            <br />
            <br />
            <label id="sub-judul" class="col-lg-12"><b>Kuota tersisa ; {{ $wisata->kuota }}  Tiket</b> </label>
            <br />
            <a href="{{ route('create', ['id'=> $wisata->id]) }}" class="btn btn-dark" id="btnPesan">Pesan tiket</a>
        </div>
    </div>
</div>   
@endforeach
@endsection
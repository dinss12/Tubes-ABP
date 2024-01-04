@extends('admin.adminLayout.main')
@section('content')
    <div class="kontengambar">
        <img src="{{ asset('storage/' . $wisata->img) }}" alt="gambar TAHURA" class="gambar">
    </div>
    <div class="konten">
        <label id="sub-judul" class="col-lg-11">Nama : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11"> {{ $wisata->nama }} </label>
        <br />
        <label id="sub-judul" class="col-lg-11">Lokasi : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11"> {{ $wisata->lokasi }} </label>
        <br />
        <label id="sub-judul" class="col-lg-11">Jam Buka : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11"> {{ $wisata->jam_buka }} WIB</label>
        <br />
        <label id="sub-judul" class="col-lg-11">Jam Tutup : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11"> {{ $wisata->jam_tutup }} WIB</label>
        <br />
        <label id="sub-judul" class="col-lg-11">Harga : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11">Rp.{{ $wisata->harga }}.00 /orang</label>
        <br />
        <label id="sub-judul" class="col-lg-11">Kuota tersisa : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11"> {{ $wisata->kuota }}  Tiket</label>
        <br />
        <label id="sub-judul" class="col-lg-11">Deskripsi : </label>
        <br />
        <label id="isiSub-judul" class="col-lg-11"> {{ $wisata->deskripsi }} </label>
    </div>
@endsection
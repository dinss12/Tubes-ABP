@extends('admin.adminLayout.main')
@section('content')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="container mt-4" bold>
    <div class="w3-container w3-card-4 w3-light-grey">
    <div class="content">
        <div class="isi">
            <label id="sub-judul" class="col-lg-12"><b>Nama : {{ $feedback->nama }}</b></label>
            <br />
            <br />
            <label id="sub-judul" class="col-lg-12"><b>Kategori : {{ $feedback->kategori }}</b></label>
            <br />
            <br />
            <label id="sub-judul" class="col-lg-12"><b>Feedback : {{ $feedback->feedback }}</b> </label>
            <br />
            <br />
        </div>
    </div>
    </div>
    </div>
@endsection
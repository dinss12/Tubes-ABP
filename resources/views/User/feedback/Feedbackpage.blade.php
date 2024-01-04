@extends('User.Layouts.main')
@section('content')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/Feedback.css" rel="stylesheet">
    <div class="container mt-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Feedback</h1>
    </div>
    @if( session("success"))
      <div class="alert alert-success col-lg-10" role="alert">
          {{ session('success') }}
      </div>
    @endif
    <div class="w3-panel w3-border w3-border-black">
        <form action="/feedback" method="POST">
            @csrf

            <p>
                <label>Nama Lengkap</label><br>
            <div >
                <input class="w3-input w3-border" type="text" name="nama" placeholder="Nama Lengkap" />
            </div>
            </p>
            <p>
                <label >Kategori</label>
            <div>
                <select class="w3-input w3-border" name = "kategori">
                    <option value = "pertanyaan">Pertanyaan</option>
                    <option value = "saran_wisata">Saran(Wisata)</option>
                    <option value = "saran_design">Saran(Design)</option>
                </select>
            </div>
            </p>
            <p>
                <label>Feedback</label>
            <div>
                <textarea class="w3-input w3-border" type="text" name="feedback" placeholder="Feedback" ></textarea>
            </div>
            </p>
            <p>
                <input class="w3-btn w3-black" type="submit" value="Submit" id="submit-button" />
            </p>

        </form>
    </div>
    </div>
@endsection
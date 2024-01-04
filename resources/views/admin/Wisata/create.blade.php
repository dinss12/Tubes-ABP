@extends('admin.adminLayout.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Wisata</h1>
    </div>
    <div class="col-lg-8 mb-3">
        <form method="POST" action="/wisata" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama wisata</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
              @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <label for="lokasi" class="form-label">Lokasi</label>
              <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
              @error('lokasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <label for="jam_buka" class="form-label">Jam Buka</label>
              <input type="text" class="form-control @error('jam_buka') is-invalid @enderror" id="jam_buka" name="jam_buka" value="{{ old('jam_buka') }}">
              @error('jam_buka')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <label for="jam_tutup" class="form-label">Jam Tutup</label>
              <input type="text" class="form-control @error('jam_tutup') is-invalid @enderror" id="jam_tutup" name="jam_tutup" value="{{ old('jam_tutup') }}">
              @error('jam_tutup')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <label for="harga" class="form-label">Harga tiket</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
              @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <label for="kuota" class="form-label">Kuota tiket</label>
              <input type="number" class="form-control @error('kuota') is-invalid @enderror" id="kuota" name="kuota" value="{{ old('kuota') }}">
              @error('kuota')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
              @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
              <div class="mb-3">
                <label for="img" class="form-label">Gambar Wisata</label>
                <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img">
                @error('img')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
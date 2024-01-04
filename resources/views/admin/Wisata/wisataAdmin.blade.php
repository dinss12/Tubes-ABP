@extends('admin.adminLayout.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Wisata</h1>
    </div>
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
          {{ session('success') }}
      </div>
    @endif
    <div class="table-responsive col-lg-10">
        <a href="/wisata/create" class="btn btn-info mb-3">Tambah Wisata</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Kuota_tiket</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($wisatas as $wisata)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $wisata->nama }}</td>
              <td>{{ $wisata->kuota }}</td>
              <td>
                <a href="/wisata/{{ $wisata->id }}" class="badge bg-primary"> <span data-feather="eye"></span></a>
                <a href="/wisata/{{ $wisata->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span> </a>
                <form action="/wisata/{{ $wisata->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" >
                      <span data-feather="trash-2"></span>
                    </button>
                </form>
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
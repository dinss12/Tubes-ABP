@extends('admin/adminLayout/main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tiket</h1>
    </div>
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
          {{ session('success') }}
      </div>
    @endif
    <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kode tiket</th>
              <th scope="col">Lihat</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tiket as $t)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $t->kode }}</td>
              <td>
                <a href="{{ route('tiket.show', $t->id) }}" class="badge bg-primary"> <span data-feather="eye"></span></a>
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>
@endsection













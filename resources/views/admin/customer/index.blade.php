@extends('admin.adminLayout.main')
@section('content')
<div class="container-fluid" style="margin-top: 30px">
    <div class="row">
        <div class="col">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Data Customer</h3>
            </div>

            <div class="card-body">
            <form method="get" action="/customer/cari">
                <div class="row">
                <div class="col">
                    <input type="text" name="cari" class="form-control" placeholder="Cari username customer..." value="{{ old('cari') }}">
                </div>
                <div class="col-auto">
                    <button class="btn btn-success">Cari</button>
                </div>
                </div>
            </form>
            </div>

            @if(session()->has('success'))
            <div class="alert alert-success col-lg-10" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card-body">
            <div class="table-responsive">
                <table class="table">

                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Level</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->username}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->level}}</td>
                        <td>{{$customer->password}}</td>
                        <td>
                            <a href="/customer/{{$customer->id}}/edit" class="btn btn-sm btn-primary border-0">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/customer/{{ $customer->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger border-0" >
                                  <span data-feather="trash-2"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@extends('admin.adminLayout.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-4 col-md-4">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">
                    Form Edit Customer
                </h3>
                <div class="card-tools">
                    <a href="/customer" class="btn btn-sm btn-danger">Close</a>
                    @if($message = Session::get('success'))
                    <p>{{$message}}</p>
                    @endif
                </div>
            </div>

            <div class="card-body">
                <form action="/customer/{{ $customer->id }}" method="POST">
                    @method("PATCH")
                    @csrf
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama</strong>
                                <input type="text" name="name" value="{{$customer->name}}" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Username</strong>
                                <input type="text" name="username" value="{{$customer->username}}" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>E-mail</strong>
                                <input type="text" name="email" value="{{$customer->email}}" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Level</strong>
                                <input type="text" name="level" value="{{$customer->level}}" class="form-control" placeholder="" readonly>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="text" name="password" value="{{$customer->password}}" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary mb-3">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

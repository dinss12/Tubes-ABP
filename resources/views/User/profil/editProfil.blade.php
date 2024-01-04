@extends('User.Layouts.main')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>Edit Profile {{ $user->name }}</h4>
            </div>

            <div class="card-body">
                <div class="card">
                    <form action="{{ route('profil.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input value="{{ $user->name }}" name="name" id="name" type="text" class="form-control"
                                placeholder="Masukkan nama">

                            <p class="text-danger">{{ $errors->first("name") }}</p>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>

                            <input value="{{ $user->email }}" name="email" id="email" type="email" class="form-control"
                                placeholder="Masukkan email">

                            <p class="text-danger">{{ $errors->first("email") }}</p>
                        </div>

                        <div class="form-group">
                            <label for="password">Password Baru</label>

                            <input name="password" id="password" type="password"
                                class="form-control" placeholder="Masukkan password">

                            <p class="text-danger">{{ $errors->first("password") }}</p>

                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

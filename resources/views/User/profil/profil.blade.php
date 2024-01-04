@extends('User.Layouts.main')
@section('content')
<div class="container border-top-0" style="margin-bottom: 30px; margin-top: 0px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-25 mt-2 pt-5">
            <div class="row">

                <div class="col-sm-4 rounded-left" style="background-color: #23A1AF">
                    <div class="card-block text-center text-white">
                        <img src="{{ asset('img/avatar.png') }}" class="rounded-circle" height="40%" width="40%" style="margin-top: 30px;">
                        <h3 class="font-weigth-bold mt-4">{{ $user->name }}</h3>
                        <p>{{ $user->id }}</p>
                        <hr class="bg-white">
                        <div>
                            <p class="font-weight-bold text-start">Nama</p>
                            <h5>{{ $user->name }}</h5>
                        </div>
                        <div>
                            <p class="font-weight-bold text-start">Username</p>
                            <h5>{{ $user->username }}</h5>
                        </div>
                        <div style="margin-top: 30px">
                            <a href="/profil/edit" class="btn btn-sm btn-warning">Edit Profil</a>
                            <a onclick="document.getElementById('form-logout').submit(); return false;" href="#" class="btn btn-sm btn-danger">Logout</a>
                            <form action="{{ route('logout') }}" method="post" id="form-logout">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 rounded-right" style="background-color: #CDD0CB">
                    <h4 class="mt-3 text-center" style="margin-top: 30px;">Riwayat Kunjungan</h4>
                    <center><hr class="bg-dark mt-0 w-25 center"></center>
                    <div class="row" style="margin-left: 50px; margin-top: 30px;">
                        <div class="col-sm-6">
                            <img src="https://www.coworking.co.id/wp-content/uploads/2020/11/Great-Asia-Afrika.jpg" height="70%" width="70%">
                            <h6 class="font-weight-bold">The Great Asia Afrika</h6>
                            <button type="button" class="btn btn-dark btn-sm">Go Somewhere</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="https://www.coworking.co.id/wp-content/uploads/2020/11/Floating-Market-Lembang.jpg" height="70%" width="70%">
                            <h6 class="font-weight-bold">Floating Market Lembang</h6>
                            <button type="button" class="btn btn-dark btn-sm">Go Somewhere</button>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 50px; margin-bottom: 30px; margin-top: 15px;">
                        <div class="col-sm-6">
                            <img src="https://www.coworking.co.id/wp-content/uploads/2020/11/Farm-House.jpg" height="70%" width="70%">
                            <h6 class="font-weight-bold">Farm House</h6>
                            <button type="button" class="btn btn-dark btn-sm">Go Somewhere</button>
                        </div>
                        <div class="col-sm-6">
                            <img src="https://www.coworking.co.id/wp-content/uploads/2020/11/Orchid-Forest-Cikole.jpg" height="70%" width="70%">
                            <h6 class="font-weight-bold">Orchid Forest Cikole</h6>
                            <button type="button" class="btn btn-dark btn-sm">Go Somewhere</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

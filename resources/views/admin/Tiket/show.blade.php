<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="http://fonts.cdnfonts.com/css/comic-neue-angular" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Ticket Success Page</title>
    </head>
    <style>
        .header{
            height: 80px;
        }
        .navbar{
            background-color: #23A1AF;
            height: 60px;
        }
        .nav_content{
            margin: 8px 150px 0px 0px;
        }
        #space1{
            margin-right: 250px;
            color: transparent;
        }
        .logo{
            margin: 18px 0px 10px 47px;
        }
        .avatar{
            margin: 15px 0px 6px 1270px;
        }
        li{
            float:left;
        }
        li a{
            font-family: 'Comic Neue', sans-serif;
            color:white;
            font-size: small;
            text-decoration: none;
        }
        .bg{
            background-color: #23A1AF;
        }
    </style>
    <body>
        <header>
            <div class="header">
                <img src="/img/Logo.png" class="logo">
                <img src="/img/avatar.png" class="avatar">
            </div>  
        </header>
        <div class="navbar">
            <ul style="list-style-type: none;">
                <li id="space1">test</li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Beranda</b></a></li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Informasi</b></a></li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Feedback</b></a></li>
                <li class="nav_content"><a href="/batal"><b>Pembatalan Tiket</b></a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-25 mt-2 pt-5">
                    <div class="row bg text-white text-center">
                        <h5>Tiket Wisata Bandung</h5>
                        <h6>{{ $tiket->kode }}</h6>
                        <div class="col-sm-8 bg text-white text-center rounded-left">
                            <div class="row">
                                <p class="font-weight-bold text-start">Tujuan Wisata</p>
                                <h6 class="text-start">Floating Market Lembang</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold text-start">Tanggal Kunjungan</p>
                                    <h6 class="text-start">{{ date('d F Y', strtotime($tiket->tanggal)) }}</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold text-start">Jam Kunjungan</p>
                                    <h6 class="text-start">{{ $tiket->jam_kunjung }}</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold text-start">Atas Nama</p>
                                    <h6 class="text-start">Rangga Pratama</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold text-start">Jumlah Kunjungan</p>
                                    <h6 class="text-start">{{ $tiket->jumlah_pengunjung }} orang</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 bg text-white text-center rounded-right">bbb</div>
                        <p>Datang sesuai tanggal dan jam pada tiket!</p>
                        <h6>HARAP UNDUH DAN SIMPAN TIKET INI UNTUK DISCAN DI LOKASI WISATA!</h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
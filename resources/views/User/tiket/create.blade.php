<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.cdnfonts.com/css/comic-neue-angular" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .header{
                height: 80px;
            }
            .navbar{
                background-color: #23A1AF;
                height: 60px;
            }
            .nav_content{
                margin: 0px 150px 0px 0px;
            }
            #space1{
                margin-right: 250px;
                color: transparent;
            }
            .logo{
                margin: 0px 0px 10px 47px;
            }
            .avatar{
                margin: 15px 0px 6px 1250px;
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
            .atas {
            background-color:#23A1AF;
            width: 1400px;
            height: 0px;
            border: 0px solid;
            padding: 50px;
            margin-top: 1px;
            margin-bottom: 10px;
            margin-right: 1px;
            margin-left: 1px;
            border-radius: 10px;
            }
            .tengah {
            background-color: #23A1AF;
            width: 1250px;
            height: 240px;
            border: 0px solid;
            padding: 50px;
            margin-left: 110px;
            margin-top: 10px;
            border-radius: 10px;
            }
            .bawah {
            background-color: #23A1AF;
            width: 330px;
            height: 520px;
            border: 0px solid;
            padding: 50px;
            margin-top: 30px;
            margin-left: 110px;
            border-radius: 10px;
            visibility:hidden;
            }
            .button{
            background-color:  #23A1AF;
            /* opacity: 10%; */
            width: 50px;
            height: 32px;
            border: 1px solid;
            /* padding: 10px; */
            margin-top: -7px;
            margin-left: -35px; 
            margin-right: 90px;
            border-radius: 10px;
            margin-bottom: 0px;
            cursor: pointer;
            font-family: 'Comic Neue', sans-serif;
            font-weight: bold;
            font-size: 15px;
            display: grid;
            place-items: center;
            }
            .buttontext{
                opacity: 1;
                display: block;
            }
            .jam {
            background-color: lightblue;
            width: 40px;
            height: 20px;
            border: 1px solid;
            padding: 10px; 
            margin-left: -40px; 
            margin-right: 55px;
            border-radius: 10px;
            margin-bottom: -20px;
            }
            .jam2 {
            background-color: lightblue;
            width: 40px;
            height: 20px;
            border: 1px solid;
            padding: 10px; 
            margin-left: 60px; 
            border-radius: 10px;
            margin-bottom: -20px;
            margin-top: -15px;
            }
            h4{
                padding: 0px;
                margin-left: -35px;
                margin-bottom: 0px;
            }
            h3{
                padding: 0px;
                margin-top: 0px;
                margin-left: -40px;
                margin-bottom: 0px;
                display: inline-flex;
                border: 10px black;
            }
            .buttoncek {
            background-color: #23A1AF;
            opacity: 1;
            border: 1 solid #23A1AF;
            color: black;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 25px 2px;
            margin-top: 30px;
            margin-left: 50px;
            cursor: pointer;
            border-radius: 10px;
            }
            .gambar{
                height:auto;
                width: 288px;
                margin-top: -20px;
                margin-left: -25px;
                
            }
            .titik{
            border: 1px dashed;
            margin-top: -30px;
            height: 190px;
            margin-left: 20px;
            margin-right: 20px;
            }
            .buttonpesan{
            background-color: green;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 25px 2px;
            margin-top: 0px;
            cursor: pointer;
            border-radius: 10px;
            display: grid;
            place-items: center;
            }
            .isidata{
                margin-top: -190px;
                margin-left: 50px;
                padding: 55px;
                background-color:#23A1AF;
                border-radius:10px;
                height:310px;
            }
            .informasi{
                margin-top: -100px;
            }
            .infobuka{
                margin-left: 155px;
                margin-right: 155px;
                width: 50px;
            }
            img{
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="header">
                <img src="/img/Logo.png" class="logo">
                <img src="/img/avatar.png" class="avatar">
            </div>  
        </header>
        <div class="navbar">
            <ul style="list-style-type: none;">
                <li class="nav_content"><a href="/beranda"><img src="/img/back.png"></a></li>
            </ul>
        </div>
        <div class="tengah">
            <table>
                <tr>
                    <td>
                        <img class="gambar" src="{{ asset('storage/' . $wisata->img) }}" alt="taman hutan raya" href="profile">                        
                    </td>
                    <td>
                        <div class="titik"></div>
                    </td>
                    <td>
                        <div class="informasi">
                            <table>
                                <tr>
                                    <td style="font-family: 'Comic Neue', sans-serif;font-weight: bold;"><center>{{ $wisata->nama }}</center></td></br>
                                </tr>
                                <tr>
                                    <td style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Alamat ;{{ $wisata->lokasi }}</td>
                                </tr>
                                <tr>
                                    <td style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">{{ $wisata->deskripsi }}</td>
                                    </br>
                                </tr>
                                <tr>
                                    <div class="infobuka">
                                        <table>
                                            <tr style="margin-top: 1000px;">
                                                <td style="font-family: 'Comic Neue', sans-serif;font-weight: bold;margin-left: 1000px;width: 300px;">harga tiket; Rp {{ $wisata->harga }}.00</td>
                                                <td style="font-family: 'Comic Neue', sans-serif;font-weight: bold;margin-left: 1000px;width: 300px;">jam buka; {{ $wisata->jam_buka }}</td>
                                                <td style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">jam tutup; {{ $wisata->jam_tutup }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <table>
            <tr>
                <td>
                    <div class="bawah">
                        <h6 style="font-family: 'Comic Neue', sans-serif;font-weight: bold;margin-top: -30px;margin-left: 20px;">Pilih Waktu Berkunjung</h6>
                        <label for="tanggal">Pilih tanggal:</label>  
                        <input type="date" id="tanggal" name="tanggal2"></br></br>
                        <label for="waktu">Pilih waktu:</label></br></br>
                          <table>
                              <tr>
                                <td>
                                    <button class="button" >08:00</button>
                                </td>
                                <td>
                                    <button class="button" >11:00</button>
                                </td>
                                <td>
                                    <button class="button" >15:00</button>
                                </td>
                            </tr>
                          </table>
                    </div>
                </td>
                <td>
                    <div class="isidata">
                        <form action="/tiket" method='POST' enctype="multipart/form-data" >
                            {{csrf_field()}}
                            
                            <label for="tanggal" style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Pilih tanggal   :  </label>
                            <input type="date" id="tanggal" name="tanggal" style="width:300px;height:40px;margin-left:10px;"></br></br>
                            <label for="jam_kunjung" style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Pilih waktu :</label>
                            
                                <!-- <label for="cars">Choose a car:</label> -->
                                <select id="jam_kunjung" name="jam_kunjung" style="width:300px;height:40px;margin-left:20px;">
                                    <option value="08:00">08:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="15:00">15:00</option>
                                </select>
                                <!-- <input type="submit"> -->
                            </br>
                            </br>
                            <label for="quantity" style="font-family: 'Comic Neue', sans-serif;font-weight: bold;">Jumlah Tiket :  </label>
                            <input type="number" id="quantity" name="jumlah_pengunjung" min="1" max="100" style="width:300px;height:40px;margin-left:7px;"></br>
                            <input type="hidden" id="fname" name="kode" style="width:1000px;height:40px" value={{ $data }} ><br>
                            <input class="buttonpesan" type="submit" value="submit" >                                              
                        </form>
                            
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
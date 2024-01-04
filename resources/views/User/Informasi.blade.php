@extends('User.Layouts.main')
@section('content')
<link href="/css/Informasi.css" rel="stylesheet">
<div class="infoBody">
    <div class="container">
        <!--image slider start-->
        <div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                    <img src="/img/Halaman_1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="/img/Halaman_2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="/img/Halaman_3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="/img/Halaman_4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="/img/Halaman_5.jpg" alt="">
                </div>
                <!--slide images end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
        <div class="background">
            <div class="about">
                <div>
                    <h2>About Us : </h2>
                </div>
            <div class="sosmed">
                <h2>Social Media : </h2>
                <div class="facebook">
                    <span data-feather="facebook" class="badgeInfo"></span>
                </div>
                <div class="linkedin">
                    <span data-feather="linkedin" class="badgeInfo"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--image slider end-->
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 5){
        counter = 1;
    }
    }, 5000);
</script>
@endsection
<!DOCTYPE html>
<html>
    <head>
        <link href="css/Login.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="main">
            <div >
                <img class="logo" src="img/Logo.png">
            </div>

            {{-- Error Alert --}}
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="loginSide">
                <h1 class="title">Login to Your Account</h1>
                <form action="/login/akun" method="POST">
                    @csrf
                    @error('login_gagal')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                            <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror

                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email" required>
                    </div>
                    <br />
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <br />
                    <input class="btn1" type="submit" value="Login">
                </form>
            </div>

            <div class="V_line"></div>
            <div class="registerSide">
                <h1 class="title2">New Here?</h1>
                <h6 class="sub-title">Sign up to Discover Beautiness of Bandung Nature </h6>
                <form action="/register" method="POST">
                    @csrf
                    @if(session()->has('success'))
                    <div class="alert alert-success col-lg-10" style="margin-left: 20px" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <input class="name2" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <input class="Email" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                        </div>

                    <div class="form-group">
                        <input class="pass2" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        </div>

                    <div class="form-group">
                        <input class="pass2" type="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
                        </div>

                    <div class="form-group sm">
                        <select name="level" class="name2" hidden>
                            <option selected value="editor">Editor</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn2" type="submit" value="Daftar">
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>

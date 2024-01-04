<!DOCTYPE html>
<html>
    <head>
        <title>
             TBoB | @yield('title')
        </title>
        {{-- CSS Section --}}

        <link href="http://fonts.cdnfonts.com/css/comic-neue-angular" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        @include('User.Layouts.header')
        <div class="main_content">
            @yield('content')
        </div>
    </body>
    {{-- JS Section --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>

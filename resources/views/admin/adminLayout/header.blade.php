<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3">
      <img src="/img/Logo.png">
    </a>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a type="submit" class="nav-link px-3" onclick="document.getElementById('form-logout').submit(); return false;" href="#">Sign out</a>
        <form action="{{ route('logout') }}" method="post" id="form-logout">
            @csrf
        </form>
      </div>
    </div>
</header>

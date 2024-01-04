<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('wisata*') ? 'active' : '' }}" href="wisata">
            <span data-feather="file"></span>
            Wisata
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('customer*') ? 'active' : ''}}" href="customer">
            <span data-feather="users"></span>
            Customers
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('feedback*') ? 'active' : '' }}" href="feedback">
            <span data-feather="smile"></span>
            Feedback
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tiket*') ? 'active' : '' }}" href="tiket">
            <span data-feather="clipboard"></span>
            Ticketing
          </a>
        </li>
      </ul>
    </div>
</nav>

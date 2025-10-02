<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pelatihan*') ? 'active' : '' }}" href="/dashboard/pelatihan">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Pelatihan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/konsultasi*') ? 'active' : '' }}" href="/dashboard/konsultasi">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Konsultasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/auditing*') ? 'active' : '' }}" href="/dashboard/auditing">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Auditing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/bimtek*') ? 'active' : '' }}" href="/dashboard/bimtek">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Bimtek
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kajianstudy*') ? 'active' : '' }}" href="/dashboard/kajianstudy">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Kajian & study
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/news*') ? 'active' : '' }}" href="/dashboard/news">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/client*') ? 'active' : '' }}" href="/dashboard/client">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Client
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/contact*') ? 'active' : '' }}" href="/dashboard/contact">
              <span data-feather="phone" class="align-text-bottom"></span>
              Hubungi pengunjung
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 border-0" style="background-color: transparent"><span data-feather="log-out" class="align-text-bottom"></span> Logout</button>
        </form>
          </li>
        </ul>
        @can(['admin'])
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
              <span data-feather="file-text" class="align-text-bottom"></span>
              User
            </a>
          </li>
        </ul>
        @endcan
    </nav>
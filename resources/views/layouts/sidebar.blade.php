<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ url('/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- User Panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ url('/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->nama ?? 'Guest' }}</a>
      </div>
    </div>

    <!-- Search Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @auth
          @if (Auth::user()->role == 'dokter')
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dokter/periksa" class="nav-link">
                <i class="nav-icon fas fa-stethoscope"></i>
                <p>Periksa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/obat" class="nav-link">
                <i class="nav-icon fas fa-pills"></i>
                <p>Obat</p>
              </a>
            </li>
          @elseif (Auth::user()->role == 'pasien')
            <li class="nav-item">
              <a href="/periksa" class="nav-link">
                <i class="nav-icon fas fa-stethoscope"></i>
                <p>Periksa</p>
              </a>
            </li>
          @endif

          <!-- Logout -->
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link bg-transparent border-0 text-left text-white w-100">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </button>
            </form>
          </li>
        @endauth
      </ul>
    </nav>
  </div>
</aside>

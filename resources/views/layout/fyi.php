<aside id="sidebar" class="sidebar sidebar-offcanvas">

  <ul class="nav sidebar-nav" id="sidebar-nav">

    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="bi bi-grid menu-icon" title="Dashboard"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item @yield('colleges')">
        <a class="nav-link" href="{{ route('colleges') }}" data-toggle="collapse" aria-expanded="false" aria-controls="sub-menu">
          <span class="menu-title"><i class="bi bi-person menu-icon" title="Colleges"></i>Colleges</span>
        </a>
        <div class="collapse" id="auth">
          <ul id="sub-menu" class="nav-item sub-nav nav collapse">
            <span class="float-start ml-10"><i class="bi bi-arrow-return-right"></i></span>
            <li class="nav-item @yield('ccs')">
              <a class="sub-nav-link" href="{{ route('ccs') }}">
                <span class="menu-title">College of Computing Studies</span>
              </a>
            </li>
          </ul>
        </div>
    </li>

    <li class="nav-item @yield('department')">
        <a class="nav-link" href="{{ route('department') }}">
            <i class="bi bi-question-circle menu-icon" title="Department"></i>
            <span class="menu-title">Department</span>
        </a>
    </li>

    <li class="nav-item @yield('model')">
      <a class="nav-link" href="{{ route('model') }}">
        <i class="bi bi-envelope menu-icon" title="Model"></i>
        <span class="menu-title">Model</span>
      </a>
    </li>

    <li class="nav-item @yield('user-management')">
      <a class="nav-link" href="{{ route('user-management') }}">
        <i class="bi bi-card-list menu-icon" title="Chat Box Management"></i>
        <span class="menu-title">User Management</span>
      </a>
    </li>

    <li class="nav-item @yield('chatbox')">
      <a class="nav-link collapsed" href="{{ route('chatbox') }}">
        <i class="bi bi-chat-text menu-icon" title="Chat Box Management"></i>
        <span class="menu-title">Chat box Management</span>
      </a>
    </li>

    <li class="nav-item @yield('setting')">
      <a class="nav-link" href="{{ route('setting') }}">
        <i class="bi bi-gear menu-icon" title="Setting"></i>
        <span class="menu-title">Setting</span>
      </a>
    </li>

    <li class="fixed-bottom bg-dark text-light" style="width: 260px;">
      <a class="nav-link logout" href="{{ route('logout') }}">
        <i class="bi bi-box-arrow-in-right menu-icon text-light" title="Logout"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>

</aside>


<!-- ======= Header ======= -->
<header id="header" class="dashboard-header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboard" class="dasboard-logo d-flex align-items-center logo">
    <img src="{{ asset('admin-assets/media/logo.svg') }}" alt="">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->
      <li class="nav-item dropdown">
        <a class="nav-link nav-icon text-white mt-3 mr-4" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">1</span>
        </a><!-- End Notification Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
                <a href="admin-notification">Show all notifications</a>
            </li>
        </ul><!-- End Notification Dropdown Items -->
      </li><!-- End Notification Nav -->
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="Profile" class="rounded-circle me-3">
            <span class="d-none d-md-block">Matt Luna</span>
        </a>
        <!-- Add the dropdown menu here -->
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin-profile">Profile</a></li>
            <li><a class="dropdown-item" href="admin-setting">Settings</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul><!-- End Notification Dropdown Items -->
      </li><!-- End Notification Nav -->
    </ul>

</nav><!-- End Icons Navigation -->


</header><!-- End Header -->
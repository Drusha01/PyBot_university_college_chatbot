<!-- ======= Header ======= -->
<header id="header" class="dashboard-header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboard" class="dasboard-logo d-flex align-items-center logo">
    <img src="{{ asset('admin-assets/logo.svg') }}" alt="">
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
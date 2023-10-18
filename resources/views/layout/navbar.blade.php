
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center pl-3">
        <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard') }}">
            <img src="{{ asset('admin-assets/media/pybot_icon.svg') }}" class="mr-2" alt="logo">
            <img src="{{ asset('admin-assets/media/logo.svg') }}" alt="name">
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
            <img src="{{ asset('admin-assets/media/pybot_icon.svg') }}" alt="logo">
        </a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center toggle-sidebar" id="sidebar-toggle" type="button" data-toggle="minimize">
            <span class="bi bi-list"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right bs-borderbox">

            <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" data-toggle="dropdown">
                    <i class='bi bi-bell mx-0'></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">You have 4 new notifications
                        <a href="notification"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="bi bi-info-circle-fill mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Just now
                            </p>
                        </div>
                    </a>
                    <a class a="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="bi bi-gear mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Private message
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <div class="text-light px-2">
                <li class="nav-item nav-profile dropdown">
                    <div>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('admin-assets\media\avatar\6.jpg') }}" alt="profile"/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="profile">
                                Profile
                            </a>
                            <a class="dropdown-item" href="setting">
                                Settings
                            </a>
                            <a class="dropdown-item" href="logout">
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="font-weight-normal mb-0">Matt Luna</h6>
                    </div>
                </li>
            </div>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="bi bi-list"></span>
        </button>
    </div>
</nav>
<script>
    // Toggle sidebar visibility
    $('[data-toggle="minimize"]').on("click", function () {
      if (body.hasClass('sidebar-toggle-display') || body.hasClass('sidebar-absolute')) {
        body.toggleClass('sidebar-hidden');
      } else {
        body.toggleClass('sidebar-icon-only');
      }
    });
</script>
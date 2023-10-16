<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav fw-bolder">
    <li class="nav-item @yield('dashboard')">
      <a class="nav-link" href="{{ route('dashboard') }}">
      <i class='bi bi-grid menu-icon'></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item @yield('colleges')">
      <a class="nav-link" href="{{ route('colleges') }}"  aria-expanded="false" aria-controls="sub-menu">
        <i class='bi bi-person menu-icon'></i>
        <span class="menu-title">Colleges</span>
      </a>
      <div class="collapse" id="sub-menu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item @yield('ccs')">
            <a class="nav-link" href="{{ route('ccs') }}"> College of Computing Studies</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item @yield('department')">
        <a class="nav-link" href="{{ route('department') }}">
            <i class="bi bi-question-circle menu-icon"></i>
            <span class="menu-title">Department</span>
        </a>
    </li>

    <li class="nav-item @yield('model')">
      <a class="nav-link" href="{{ route('model') }}">
        <i class="bi bi-envelope menu-icon"></i>
        <span class="menu-title">Model</span>
      </a>
    </li>

    <li class="nav-item @yield('user-management')">
      <a class="nav-link" href="{{ route('user-management') }}">
        <i class="bi bi-card-list menu-icon"></i>
        <span class="menu-title">User Management</span>
      </a>
    </li>

    <li class="nav-item @yield('chatbox')">
      <a class="nav-link collapsed" href="{{ route('chatbox') }}">
        <i class="bi bi-chat-text menu-icon"></i>
        <span class="menu-title">Chat box Management</span>
      </a>
    </li>
    <li class="nav-item @yield('setting')">
      <a class="nav-link" href="{{ route('setting') }}">
      <i class='bi bi-gear menu-icon'></i>
        <span class="menu-title">Settings</span>
      </a>
    </li>

    <li class="nav-item logout">
      <a class="nav-link" href="{{ route('logout') }}">
      <i class='bi bi-box-arrow-in-right menu-icon'></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>

  </ul>
</nav>

<script>
  $(document).ready(function () {
    var body = $('body');

    // Initialize tooltips for elements with data-toggle="tooltip"
    $('[data-toggle="tooltip"]').tooltip();

    // Handle sidebar toggle
    $('[data-toggle="offcanvas"]').on("click", function () {
      $('.sidebar-offcanvas').toggleClass('active');
    });

    // Prevent default behavior of "Colleges" link
    $('#colleges-link').on('click', function (e) {
      e.preventDefault();
    });
    // Open submenu on hover in compact sidebar mode and horizontal menu mode
    $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function (ev) {
      var sidebarIconOnly = body.hasClass("sidebar-icon-only");
      var sidebarFixed = body.hasClass("sidebar-fixed");
      var $menuItem = $(this);

      if (!('ontouchstart' in document.documentElement) && sidebarIconOnly) {
        if (sidebarFixed && ev.type === 'mouseenter') {
          body.removeClass('sidebar-icon-only');
        } else {
          $menuItem.toggleClass('hover-open', ev.type === 'mouseenter');
        }
      }
    });

    // Toggle sidebar visibility
    $('[data-toggle="minimize"]').on("click", function () {
      if (body.hasClass('sidebar-toggle-display') || body.hasClass('sidebar-absolute')) {
        body.toggleClass('sidebar-hidden');
      } else {
        body.toggleClass('sidebar-icon-only');
      }
    });
  });

</script>
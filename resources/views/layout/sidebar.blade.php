<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item @yield('colleges')">
        <a class="nav-link collapsed" href="{{ route('colleges') }}">
          <i class="bi bi-person"></i>
          <span>Colleges</span>
      </a>
    </li>

    <li class="nav-item @yield('department')">
        <a class="nav-link collapsed" href="{{ route('department') }}">
            <i class="bi bi-question-circle"></i>
            <span>Department</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed {{ request()->is('admin/csc') ? 'active' : '' }}" href="{{ route('csc') }}">
            <i class="bi bi-question-circle"></i>
            <span>CSC</span>
        </a>
    </li><!-- End F.A.Q Page Nav -->


    <li class="nav-item ">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Model</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>User Management</span>
      </a>
    </li>


<<<<<<< Updated upstream
    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-error-404.html">
=======
    <li class="nav-item @yield('chatbox')">
      <a class="nav-link collapsed" href="{{ route('chatbox') }}">
>>>>>>> Stashed changes
        <i class="bi bi-dash-circle"></i>
        <span>Chat box Management</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-blank.html">
        <i class="bi bi-file-earmark"></i>
        <span>Setting</span>
      </a>
    </li>
    <li class="nav-item bottom-0">
      <a class="nav-link" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </li>
  </ul>
   
</aside>
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item @yield('colleges')">
        <a class="nav-link" href="{{ route('colleges') }}">
          <span><i class="bi bi-person"></i>Colleges</span>
        </a>
        <ul id="sub-menu" class="nav-item sub-nav dropdown">
          <li class="nav-item @yield('ccs')">
            <a class="sub-nav-link" href="{{ route('ccs') }}">
              <i class=""></i>
              <span>College of Computing Studies</span>
            </a>
          </li>
        </ul>
    </li>
    

    <li class="nav-item @yield('department')">
        <a class="nav-link" href="{{ route('department') }}">
            <i class="bi bi-question-circle"></i>
            <span>Department</span>
        </a>
    </li>

    

    <li class="nav-item @yield('model')">
      <a class="nav-link" href="{{ route('model') }}">
        <i class="bi bi-envelope"></i>
        <span>Model</span>
      </a>
    </li>

    <li class="nav-item @yield('user-management')">
      <a class="nav-link" href="{{ route('user-management') }}">
        <i class="bi bi-card-list"></i>
        <span>User Management</span>
      </a>
    </li>


    <li class="nav-item @yield('chatbox')">
      <a class="nav-link collapsed" href="{{ route('chatbox') }}">
        <i class="bi bi-chat-text"></i>
        <span>Chat box Management</span>
      </a>
    </li>

    <li class="nav-item @yield('setting')">
      <a class="nav-link" href="{{ route('setting') }}">
        <i class="bi bi-gear"></i>
        <span>Setting</span>
      </a>
    </li>

    <div class="fixed-bottom max-w-15">
      <li class="nav-item bottom-0">
        <a class="nav-link" href="#">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
    </div>
  </ul>
   
</aside>
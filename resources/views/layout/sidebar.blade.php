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

    <li class="nav-item @yield('csc')">
        <a class="nav-link collapsed" href="{{ route('csc') }}">
            <i class="bi bi-question-circle"></i>
            <span>CSC</span>
        </a>
    </li>

    <li class="nav-item @yield('model')">
      <a class="nav-link collapsed" href="{{ route('model') }}">
        <i class="bi bi-envelope"></i>
        <span>Model</span>
      </a>
    </li>

    <li class="nav-item @yield('user-management')">
      <a class="nav-link collapsed" href="{{ route('user-management') }}">
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
      <a class="nav-link collapsed" href="{{ route('setting') }}">
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
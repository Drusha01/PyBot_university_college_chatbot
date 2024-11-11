<div>
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center navbar-brand" href="#">
            <img src="{{ asset('storage/content/system_asset/'.$system_asset['system_asset_logo']) }}" class="mr-2" alt="logo" style="width: 40px;height: 34px;">
            <span class="logo">{{$system_asset['system_asset_name']}}</span>
        </a>
      <nav id="navbar" class="navbar">
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.AboutUs')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.academic')}}">Academic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.admission')}}">Admission</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('page.forums')}}">FAQs/Forums</a>
            </li>
            
            @if(!isset($user_details['user_id']))
            <li class="nav-item dropdown">
            <a class="nav-link" href="{{route ('login')}}">Sign in</a>
            </li>      
            @else 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <img style="border-radius:50%;"src="@if($user_details['user_profile_picture']== 'default.png'){{ asset('admin-assets/media/avatar/5.jpg')}} @else {{asset('storage/images/thumbnail/'.$user_details['user_profile_picture'])}} @endif" width="40" alt="">
                    </a>
                    <div class="dropdown-menu" style="left: -5px;
    width: 100%;" aria-labelledby="userDropdown">
                        <a class="dropdown-item" style="color: #12653e;" href="{{route ('page.profile') }}">
                            <i class="bi bi-person-fill"></i> Profile
                        </a>
                        <a class="dropdown-item" style="color: #12653e;" href="{{route ('page.chat') }}">
                            <i class="bi bi-chat-fill"></i> Chat
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="color: #12653e;" href="{{route('logout')}}">
                        <i class="bi bi-box-arrow-right"></i> Sign Out
                        </a>
                    </div>
                </li>
            @endif
            
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->
    
</div>

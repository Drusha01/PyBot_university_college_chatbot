<div>
    <nav id="top-nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/content/system_asset/'.$system_asset['system_asset_logo']) }}" class="mr-2" alt="logo" style="width: 40px;height: 34px;">
            <span class="logo">{{$system_asset['system_asset_name']}}</span>
        </a>
        <button class="navbar-toggler collapsed" aria-expanded="false" aria-controls="navbarNav" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-md-auto">
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
                            <!-- <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 30px; height: 30px; margin-right: 8px;">Kai kai -->
                            <img style="border-radius:50%;"src="@if($user_details['user_profile_picture']== 'default.png'){{ asset('admin-assets/media/avatar/5.jpg')}} @else {{asset('storage/images/thumbnail/'.$user_details['user_profile_picture'])}} @endif" width="40" alt="">
                        </a>
                        <div class="dropdown-menu" style="left: -100px;" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route ('page.profile') }}">
                                <i class="bi bi-person-fill"></i> Profile
                            </a>
                            <a class="dropdown-item" href="{{route ('page.chat') }}">
                                <i class="bi bi-chat-fill"></i> Chat
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="bi bi-box-arrow-right"></i> Sign Out
                            </a>
                        </div>
                    </li>
                @endif
                
            </ul>
            <!-- Icon links (if needed) -->
            <div class="top-nav-icons">
            <!-- Add your icon links here if needed -->
            </div>
        </div>
        </div>
    </nav><!-- End Top Navigation -->
</div>

<div>

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center pl-10">
            <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard') }}">
                <img src="{{ asset('admin-assets/media/pybot_icon.svg') }}" class="mr-2" alt="logo">
                <img src="{{ asset('admin-assets/media/logo.svg') }}" alt="name">
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
                <img src="{{ asset('storage/content/system_asset/'.$system_asset['system_asset_logo']) }}" class="mr-2" alt="logo" style="width: 40px;height: 34px;">
            </a>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            
            <div class="search-input">
                <a href="" target="_blank" hidden></a>
                <input type="text" placeholder="Type to search..">
                <div class="autocom-box">
                </div>
                <div class="icon"><i class="bi bi-search"></i></div>
            </div>

            <ul class="navbar-nav navbar-nav-right bs-borderbox">

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" data-toggle="dropdown">
                        <i class='bi bi-bell fs-20 mx-0'></i>
                        <span class="count">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <div>
                            <p class="mb-0 font-weight-normal text-center float-left dropdown-header border-bottom">You have 4 new notifications</p>
                        </div>
                    <div>
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
                        <div class="border-top text-center">
                        <a href="{{route ('admin-notification')}}"><span class="p-2 ms-2">View all</span></a></p>
                        </div>
                    </div>
                    </div>
                </li>
                    <li class="nav-item nav-profile dropdown text-dark px-2">
                        <div>
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="profileDropdown">
                                <div class="d-flex">
                                <img style="border-radius:50%;"src="@if($user_details['user_profile_picture']== 'default.png'){{ asset('admin-assets/media/avatar/5.jpg')}} @else {{asset('storage/images/thumbnail/'.$user_details['user_profile_picture'])}} @endif" width="40" alt="">
                                    <div class="text-center my-auto">
                                        <h6 class="font-weight-normal px-2 mb-0">{{$user_details['user_firstname'].' '.$user_details['user_lastname']}}</h6>
                                    </div>
                                    <div class=""><i class="fs-10 bi bi-chevron-down"></i></div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="{{route ('admin-profile') }}">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{route ('chatbox') }}">
                                    Chat
                                </a>
                                <a class="dropdown-item" href="{{route ('setting')}}">
                                    Settings
                                </a>
                                <a class="dropdown-item" href="{{route('logout')}}">
                                    Logout
                                </a>
                            </div>
                        </div>
                        
                    </li>
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
            
        // Handle sidebar toggle
        $('[data-toggle="offcanvas"]').on("click", function () {
        $('.sidebar-offcanvas').toggleClass('active');
        });
    </script>
</div>

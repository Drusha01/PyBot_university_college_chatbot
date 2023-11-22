<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav fw-bolder">
            @foreach($current_roles as $item => $value)
                @if($value->access_role_create || $value->access_role_read || $value->access_role_update || $value->access_role_delete)
                <li class="nav-item">
                    <a class="nav-link"  href="/admin/{{$value->module_nav_route}}" >
                    <i class='{{$value->module_nav_icon}}'></i>
                        <span class="menu-title">{{$value->module_nav_name}}</span>
                    </a>
                </li>
                    
                @endif
            @endforeach
            
            <li class="nav-item logout">
                <a class="nav-link" href="{{ route('logout') }}">
                <i class='bi bi-box-arrow-in-right menu-icon'></i>
                    <span class="menu-title">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <script>
        /**
     * Sidebar-Icon-Only
     */
    $(document).ready(function () {
        var body = $('body');

        // Initialize tooltips for elements with data-toggle="tooltip"
        $('[data-toggle="tooltip"]').tooltip();

        // Handle sidebar toggle
        $('[data-toggle="offcanvas"]').on("click", function () {
        $('.sidebar-offcanvas').toggleClass('active');
        });
        // Toggle sidebar visibility
        $('[data-toggle="minimize"]').on("click", function () {
        if (body.hasClass('sidebar-toggle-display') || body.hasClass('sidebar-absolute')) {
            body.toggleClass('sidebar-hidden');
        } else {
            body.toggleClass('sidebar-icon-only');
        }
        });

        $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function (ev) {
        // Check if the body element has certain classes
        var sidebarIconOnly = body.hasClass("sidebar-icon-only");
        var sidebarFixed = body.hasClass("sidebar-fixed");
        var $menuItem = $(this);

        if (!('ontouchstart' in document.documentElement) && sidebarIconOnly) {
            // If it's not a touch device and the sidebar is in icon-only mode
            if (sidebarFixed && ev.type === 'mouseenter') {
            // If the sidebar is fixed and the mouse enters the element
            body.removeClass('sidebar-icon-only');
            } else {
            // Otherwise, toggle the 'hover-open' class based on mouseenter/mouseleave
            $menuItem.toggleClass('hover-open', ev.type === 'mouseenter');
            }
        }
        });

    });

    </script>
</div>

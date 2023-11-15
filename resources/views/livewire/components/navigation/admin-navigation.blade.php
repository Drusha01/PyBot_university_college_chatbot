<div>

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center pl-10">
            <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard') }}">
                <img src="{{ asset('admin-assets/media/pybot_icon.svg') }}" class="mr-2" alt="logo">
                <img src="{{ asset('admin-assets/media/logo.svg') }}" alt="name">
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
                <img src="{{ asset('admin-assets/media/pybot_icon.svg') }}" alt="logo">
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
                                    <img src="{{ asset('admin-assets\media\avatar\6.jpg') }}" alt="profile"/>
                                    <div class="text-center my-auto">
                                        <h6 class="font-weight-normal px-2 mb-0">Admin Pybot</h6>
                                    </div>
                                    <div class=""><i class="fs-10 bi bi-chevron-down"></i></div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="{{route ('admin-profile') }}">
                                    Profile
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
        
    let suggestions = [
        "Dashboard",
        "Colleges",
        "Departments",
        "User Management",
        "Chatbox",
        "Settings",
        "Model",
        "College Student Council (CSC)",
        "Admin Profile",
        "Admin Notification",
        "Notifications",
        "Profiles",
        "Models",
        "Intents Creation",
        "Training",
        "Deployment",
    ];
    // getting all required elements
    const searchWrapper = document.querySelector(".search-input");
    const inputBox = searchWrapper.querySelector("input");
    const suggBox = searchWrapper.querySelector(".autocom-box");
    const icon = searchWrapper.querySelector(".icon");
    let linkTag = searchWrapper.querySelector("a");
    let webLink;
    // if user press any key and release
    inputBox.onkeyup = (e)=>{
        let userData = e.target.value; //user enetered data
        let emptyArray = [];
        if(userData){
            icon.onclick = ()=>{
                webLink = `https://www.google.com/search?q=${userData}`;
                linkTag.setAttribute("href", webLink);
                linkTag.click();
            }
            emptyArray = suggestions.filter((data)=>{
                //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
            emptyArray = emptyArray.map((data)=>{
                // passing return data inside li tag
                return data = `<li>${data}</li>`;
            });
            searchWrapper.classList.add("active"); //show autocomplete box
            showSuggestions(emptyArray);
            let allList = suggBox.querySelectorAll("li");
            for (let i = 0; i < allList.length; i++) {
                //adding onclick attribute in all li tag
                allList[i].setAttribute("onclick", "select(this)");
            }
        }else{
            searchWrapper.classList.remove("active"); //hide autocomplete box
        }
    }
    function select(element){
        let selectData = element.textContent;
        inputBox.value = selectData;
        icon.onclick = ()=>{
            webLink = `https://www.google.com/search?q=${selectData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        searchWrapper.classList.remove("active");
    }
    function showSuggestions(list){
        let listData;
        if(!list.length){
            userValue = inputBox.value;
            listData = `<li>${userValue}</li>`;
        }else{
        listData = list.join('');
        }
        suggBox.innerHTML = listData;
    }
    </script>
</div>

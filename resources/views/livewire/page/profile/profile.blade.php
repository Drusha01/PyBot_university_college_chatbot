<div>
        <!-- ======= Top Navigation ======= -->
    <nav id="top-nav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="http://pybot/admin-assets/media/pybot_icon.svg" class="mr-2" alt="logo" style="width: 40px;height: 34px;">
            <span class="logo">Pybot</span>
        </a>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 30px; height: 30px; margin-right: 8px;">Kai kai
                </a>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route ('page.profile') }}">
                    <i class="bi bi-person-fill"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                    <i class="bi bi-box-arrow-right"></i> Sign Out
                    </a>
                </div>
                </li>
            </ul>
            <!-- Icon links (if needed) -->
            <div class="top-nav-icons">
            <!-- Add your icon links here if needed -->
            </div>
        </div>
        </div>
    </nav><!-- End Top Navigation -->
    
    <div id="chat-circle" class="btn btn-raised">
        <img src="{{ asset('admin-assets/media/icon.png') }}" class="icon" alt="logo">
        <div id="chat-overlay"></div>
        </div>
    <div class="chat">
        <div class="chat-title">
        <div>
            <h1>PyBot</h1>
            <h2>ACTIVE</h2>
        </div>
        <figure class="avatar">
            <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" />
        </figure>
        <span class="chat-box-toggle"><i class="bi bi-x"></i></span>
        </div>
        <div class="messages">
        <div class="messages-content"></div>
        </div>
        <div class="message-box">
        <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
        <button type="submit" class="message-submit">Send</button>
        </div>
    </div>

    <div class="container rounded">
    <!-- User Profile Content -->
    <section class="py-5" style="margin-top: 5rem;">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-4">
                <div class="user-profile-left text-center">
                    <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 150px; height: 150px;">
                    <h3>User Name: Kai kai</h3>
                    <p>Email: useremail@example.com</p>
                    <!-- Add more user profile information as needed -->
                </div>
            </div>


            <!-- Right Column -->
            <div class="col-lg-8">
                <div class="user-profile-right">
                    <h4>Profile Information</h4>
                    <ul class="list-group">
                        <li class="list-group-item">First Name: John</li>
                        <li class="list-group-item">Middle Name: Doe</li>
                        <li class="list-group-item">Last Name: Smith</li>
                        <li class="list-group-item">Program: Computer Science</li>
                        <li class="list-group-item">Student ID: 123456</li>
                        <li class="list-group-item">Contact #: (123) 456-7890</li>
                        <li class="list-group-item">Age: 25</li>
                        <li class="list-group-item">Birthdate: January 1, 1998</li>
                        <li class="list-group-item">Account created: January 1, 1998</li>
                        <!-- Add more user profile information as needed -->
                    </ul>
                    <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
                    <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#changePasswordModal">Change Password</button>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form fields for changing the password here -->
                <form>
                    <div class="form-group">
                        <label for="currentPassword">Current Password:</label>
                        <input type="password" class="form-control" id="currentPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password:</label>
                        <input type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="confirmNewPassword">Confirm New Password:</label>
                        <input type="password" class="form-control" id="confirmNewPassword">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form fields for editing user profile information here -->
                <form>
                    <div class="form-group">
                        <label for="editFirstName">First Name:</label>
                        <input type="text" class="form-control" id="editFirstName">
                    </div>
                    <div class="form-group">
                        <label for="editMiddleName">Middle Name:</label>
                        <input type="text" class="form-control" id="editMiddleName">
                    </div>
                    <div class="form-group">
                        <label for="editLastName">Last Name:</label>
                        <input type="text" class="form-control" id="editLastName">
                    </div>
                    <div class="form-group">
                        <label for="editProgram">Program:</label>
                        <input type="text" class="form-control" id="editProgram">
                    </div>
                    <div class="form-group">
                        <label for="editProgram">Student ID:</label>
                        <input type="text" class="form-control" id="editProgram">
                    </div>
                    <div class="form-group">
                        <label for="editProgram">Contact #:</label>
                        <input type="number" class="form-control" id="editProgram">
                    </div>
                    <div class="form-group">
                        <label for="editProgram">Birthdate:</label>
                        <input type="text" class="form-control" id="editProgram">
                    </div>

                    <!-- Add more fields for editing user profile information as needed -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>





    </div>
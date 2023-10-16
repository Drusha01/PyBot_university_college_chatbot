<div class="web-sized">
    <div class="container">
    <header class="p-3 text-bg-transparent">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <img class="wmsu-logo-1" alt="" src="{{ asset('assets/images/wmsu-logo-1@2x.png') }}">
            </div>
            <ul class="nav">
                <li><a href="{{ Route('page.home') }}" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="{{ url('about') }}" class="nav-link px-2 text-white">About</a></li>
                <li><a href="{{ url('faq') }}" class="nav-link px-2 text-white">FAQs</a></li>
            </ul>
            <div>
                <img class="ccs-logo-icon" alt="" src="{{ asset('assets/images/ccs-logo@2x.png') }}">
            </div>
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img style="border-radius: 50%; width: 50px;" src="{{ asset('assets/images/faces/face5.jpg') }}" alt="">
                    <span class="d-none d-md-block text-white">Hanz Dumapit</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Notifications</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </div>
    </header>

    </div>

<!--  Student Profile Section -->
<div class="container mt-4">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="applicant-details">
                        <div class="details-box">
                            <h4>Student Profile</h4>
                            <ul class="list-group" id="studentProfileList">
                                <li class="list-group-item text-left"><strong>Username:</strong> son goku</li>
                                <li class="list-group-item text-left"><strong>First Name:</strong> John</li>
                                <li class="list-group-item text-left"><strong>Middle Name:</strong> -</li>
                                <li class="list-group-item text-left"><strong>Last Name:</strong> Doe</li>
                                <li class="list-group-item text-left"><strong>Student ID:</strong> 123456</li>
                                <li class="list-group-item text-left"><strong>Program:</strong> Computer Science</li>
                                <li class="list-group-item text-left"><strong>Email:</strong> john.doe@example.com</li>
                            </ul>
                            <button id="modifyButtonProfile" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modifyModalProfile">Modify</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Modify Student Profile Modal -->
<div class="modal fade" id="modifyModalProfile" tabindex="-1" role="dialog" aria-labelledby="modifyModalProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modifyModalProfileLabel">Modify Student Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Change Password</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" id="profileTabsContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Display the username -->
                        <div class="form-group text-left">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" value="son goku" readonly>
                        </div>
                        <!-- Add form fields to modify other student profile information as needed -->
                        <form>
                                <div class="form-group text-left">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                                </div>
                                <div class="form-group text-left">
                                    <label for="middleName">Middle Name:</label>
                                    <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
                                </div>
                                <div class="form-group text-left">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                                </div>

                            <div class="form-group text-left">
                                <label for="newStudentID">Student ID:</label>
                                <input type="text" class="form-control" id="newStudentID" placeholder="Enter new student ID">
                            </div>
                            <div class ="form-group text-left">
                                <label for="newProgram">Program:</label>
                                <input type="text" class="form-control" id="newProgram" placeholder="Enter new program">
                            </div>
                            <div class="form-group text-left">
                                <label for="newEmail">Email:</label>
                                <input type="email" class="form-control" id="newEmail" placeholder="Enter new email">
                            </div>
                            <!-- Add more fields as needed -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <!-- Add form fields to change the password -->
                        <form>
                            <div class="form-group">
                                <label for="currentPassword">Current Password:</label>
                                <input type="password" class="form-control" id="currentPassword" placeholder="Enter your current password">
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New Password:</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="Enter your new password">
                            </div>
                            <div class="form-group">
                                <label for="confirmNewPassword">Confirm New Password:</label>
                                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirm your new password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Chat Screen Section (Existing) -->
<div class="chat-screen">
    <!-- Your existing chat screen content here -->

    
</div>


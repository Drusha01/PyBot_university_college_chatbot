@section('title', 'Pybot | User Profile')

@section('setting', 'active')
<div>
<main id="main" class="main">

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb breadcrumb-custom">
      <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">View Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="container rounded">
    <!-- User Profile Content -->
    <section class="py-5" style="margin-top: 5rem;">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-4">
                <div class="user-profile-left text-center">
                <div class="rounded-circle border-dark p-3" style="background-color: lightgray; display: inline-block;">
                    <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 150px; height: 150px;">
                </div>

                    <h3>Username: Kai kai</h3>
                    <ul class="nav nav-tabs mt-3" id="profileTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id ="username-tab" data-toggle="tab" href="#username" role="tab" aria-controls="username" aria-selected="false">Username</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-8">
                <div class="user-profile-right">
                    <div class="tab-content" id="profileTabsContent">
                        <!-- Profile Tab Content -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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

                    <!-- Username Tab Content -->
                    <div class="tab-pane fade" id="username" role="tabpanel" aria-labelledby="username-tab">
                        <h4>Username Information</h4>
                        <p>Username: Kai kai</p>
                        <p>Email: useremail@example.com</p>
                        <!-- Add more username-related information as needed -->
                        <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#editUsernameModal">Edit</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit Username Modal -->
<div class="modal fade" id="editUsernameModal" tabindex="-1" role="dialog" aria-labelledby="editUsernameModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUsernameModalLabel">Edit Username and Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="newUsername">New Username</label>
                        <input type="text" class="form-control" id="newUsername">
                    </div>
                    <div class="form-group">
                        <label for="newEmail">New Email</label>
                        <input type="email" class="form-control" id="newEmail">
                    </div>
                    <div class="form-group">
                        <label for="newProfilePicture">New Profile Picture</label>
                        <input type="file" class="form-control-file" id="newProfilePicture">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesButton">Save Changes</button>
            </div>
        </div>
    </div>
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


</main><!-- End #main -->
</div>

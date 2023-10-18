<div>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb breadcrumb-custom">
      <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="container rounded">
    <!-- User Profile Content -->
    <section class="py-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-4">
                <div class="user-profile-left text-center">
                    <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 150px; height: 150px;">
                    <h3>User Name: Kai kai</h3>
                    <p>Email: useremail@example.com</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeProfileModal">Change Profile</button>
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
                        <li class="list-group-item">Role: Admin</li>
                        <li class="list-group-item">Position: College Of Computing Studies</li>
                        <!-- Add more user profile information as needed -->
                    </ul>
                    <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
                    <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#changePasswordModal">Change Password</button>
                </div>
            </div>
        </div>

    </section>
</div>

<!-- Change profile Modal -->
<div class="modal fade" id="changeProfileModal" tabindex="-1" role="dialog" aria-labelledby="changeProfileModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeProfileModal">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form fields for changing the password here -->
                <form>
                <div class="mb-3">
                <label for="formFileSm" class="form-label">Profile Picture</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <button type="button" class="btn btn-primary">Upload Profile</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
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
                        <input type="text" class="form-control" id="editFirstName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="editMiddleName">Middle Name:</label>
                        <input type="text" class="form-control" id="editMiddleName" placeholder="Enter Midle Name">
                    </div>
                    <div class="form-group">
                        <label for="editLastName">Last Name:</label>
                        <input type="text" class="form-control" id="editLastName" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                    <select class="form-group" aria-label="#">
                      <option selected>Role</option>
                      <option class="form-control">Super Admin</option>
                      <option class="form-control">Admin</option>
                      <option class="form-control">Officer</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="editProgram">Position:</label>
                        <input type="text" class="form-control" id="editProgram">  <!-- to do dropdown -->
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

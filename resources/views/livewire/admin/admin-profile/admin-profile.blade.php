@section('title', 'Pybot | User Profile') <!-- Set the page title -->

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

    <div class="container mt-5">
  <div class="row">
    <!-- Left Column -->
    <div class="col-md-4">
      <div class="text-center">
        <div class="rounded-circle border-dark" style="background-color: lightgray; display: inline-block; margin-right:100px;" >
          <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 150px; height: 150px;">
        </div>

        <h3 style="margin-top:80px;">Username: Kai kai</h3>

        <ul class="nav nav-pills flex-column mt-3" id="profileTabs" role="tablist">
          <li class="nav-item" >
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="username-tab" data-toggle="tab" href="#username" role="tab" aria-controls="username" aria-selected="false">Username</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-8">
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
          <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#editModal">Edit</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit User Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add a form for editing user information here -->
        <form id="editUserForm">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
          </div>
          <!-- Add more form fields for editing user information as needed -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
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
        <!-- Add form fields for editing the profile here -->
        <form>
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
          </div>
          <!-- Add more form fields for editing the profile as needed -->
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
            <label for="currentPassword">Current Password</label>
            <input type="password" class="form-control" id="currentPassword" placeholder="Enter Current Password">
          </div>
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" id="newPassword" placeholder="Enter New Password">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Change Password</button>
      </div>
    </div>
  </div>
</div>

  </main><!-- End #main -->
</div>

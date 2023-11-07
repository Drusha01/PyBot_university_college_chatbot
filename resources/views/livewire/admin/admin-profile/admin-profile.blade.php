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
          <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#editUsernameModal">Edit</button>
        </div>
      </div>
    </div>
  </div>
</div>
  </main><!-- End #main -->
</div>

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
            <div class="rounded bg-secondary-subtle d-inline-block border-dark p-3 mx-auto w-auto h-100">
              <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded" alt="User Profile"  style="width: 180px; height: 180px;">
            </div>
            <ul class="d-flex flex-column mb-2 mt-80">
                <li class="d-flex align-items-center">
                  <span class="col-md-3 text-muted">Username:</span> 
                  <span class="col-md-9">Kai kai</span>
                </li>
            </ul>
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
              <h4 class="pt-2 pb-2">Profile Information</h4>
              <ul class="list-group border-top d-flex flex-column mb-2">
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">First Name:</span> 
                  <span class="col-md-9">John</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Middle Name:</span>
                  <span class="col-md-9">Doe</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Last Name:</span>
                  <span class="col-md-9">Smith</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Program:</span>
                  <span class="col-md-9">Computer Science</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Account ID:</span>
                  <span class="col-md-9">12345678</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Contact #:</span>
                  <span class="col-md-9">(+63) 925-456-7890</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Age:</span>
                  <span class="col-md-9">25</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Birthdate:</span>
                  <span class="col-md-9">January 1, 1998</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Account created:</span>
                  <span class="col-md-9">January 1, 1998</span>
                </li>
              </ul>
              <div class="text-right">
              <button class="btn btn-info mt-3" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
              <button class="btn btn-warning mt-3" data-toggle="modal" data-target="#changePasswordModal">Change Password</button>
              </div>
            </div>

            <!-- Username Tab Content -->
            <div class="tab-pane fade" id="username" role="tabpanel" aria-labelledby="username-tab">
              <h4 class="pt-2 pb-2">Username Information</h4>
              <ul class="list-group border-top d-flex flex-column mb-2">
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Username:</span> 
                  <span class="col-md-9">Kai kai</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Email:</span> 
                  <span class="col-md-9">useremail@example.com</span>
                </li>
              </ul>
              <!-- Add more username-related information as needed -->
              <div class="text-right">
              <button class="btn btn-info mt-3" data-toggle="modal" data-target="#editModal">Edit Username</button>
              </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
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
                        <label for="firstName">User Name</label>
                        <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Enter First Name">
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
              <div class="modal-dialog modal-dialog-centered" role="document">
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
                      <div class="row">
                        <div class="col-12 mb-20">
                          <div class="row">
                            <div class="col-md-3 col-sm-12 mb-3">
                              <div class="col-md-12">
                                <!-- Image preview -->
                                <img class="w-100" id="imgPreview" src="{{ asset('admin-assets\media\defaults\default-image.png') }}" alt="Profile Picture">
                              </div>
                              <div class="col-md-10 mt-25">
                                <div class="form-group">
                                  <label for="profile-pic">Profile Picture:</label> 
                                  <input class="form-control form-control-sm form-control-file" id="profile-pic" type="file" accept="image/*" onchange="previewImage(this, 'imgPreview')">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <!-- First Name -->
                                      <div class="form-group">
                                        <label for="editFirstName">First Name</label>
                                        <input type="text" class="form-control form-control-sm" id="editFirstName" placeholder="Enter First Name">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <!-- Middle Name -->
                                      <div class="form-group">
                                        <label for="editMiddleName">Middle Name</label>
                                        <input type="text" class="form-control form-control-sm" id="editMiddleName" placeholder="Enter Middle Name">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <!-- Last Name -->
                                      <div class="form-group">
                                        <label for="editLastName">Last Name</label>
                                        <input type="text" class="form-control form-control-sm" id="editLastName" placeholder="Enter Last Name">
                                      </div>
                                    </div>
                                    
                                  </div>
                                  
                                </div>
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-5">
                                      <!-- Contact Number -->
                                      <div class="form-group">
                                        <label for="editContactNumber">Contact Number</label>
                                        <input type="text" class="form-control form-control-sm" id="editContactNumber" placeholder="Enter Contact Number">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <!-- Birthdate -->
                                      <div class="form-group">
                                        <label for="editBirthdate">Birthdate</label>
                                        <input type="date" class="form-control form-control-sm form-date" id="editBirthdate" placeholder="Enter Birthdate">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <!-- Age -->
                                      <div class="form-group">
                                        <label for="editAge">Age</label>
                                        <input type="text" class="form-control form-control-sm" id="editAge" placeholder="Enter Age">
                                      </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                      <!-- Program -->
                                      <div class="form-group">
                                        <label for="editProgram">Program</label>
                                        <select class="form-control form-control-sm form-select" id="" >
                                          <option value="Computer Science">Computer Science</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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
            <!-- Change Password Modal -->
            <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
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
                        <input type="password" class="form-control form-control-sm" id="currentPassword" placeholder="Enter Current Password">
                      </div>
                      <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control form-control-sm" id="newPassword" placeholder="Enter New Password">
                      </div>
                      <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm" id="confirmPassword" placeholder="Confirm New Password">
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
            
          </div>
        </div>
      </div>
    </div>

    <script>
    function previewImage(input, previewId) {
      var imgPreview = document.getElementById(previewId);
      
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          imgPreview.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

  </main><!-- End #main -->
</div>

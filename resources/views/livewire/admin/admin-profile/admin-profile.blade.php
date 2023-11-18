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
              @if($user_details['user_profile_picture'] == 'default.png')
                  <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 180px; height: 180px;">
              @else
                  <img style="border-radius: 50%;" width="180px" height="180px" src="{{asset('storage/images/resize/'.$user_details['user_profile_picture'])}}" alt="">
              @endif
            </div>
            <ul class="d-flex flex-column mb-2 mt-80">
                <li class="d-flex align-items-center">
                  <span class="col-md-3 text-muted">Username:</span> 
                  <span class="col-md-9">{{$user_details['user_name']}}</span>
                </li>
            </ul>
            <ul class="nav nav-pills flex-column mt-3" id="profileTabs" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true" wire:ignore.self>Profile</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id ="Profile-tab" data-toggle="tab" href="#Profile" role="tab" aria-controls="Profile" aria-selected="false" wire:ignore.self>Profile Photo</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-8">
          <div class="tab-content" id="profileTabsContent">
            <!-- Profile Tab Content -->
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab" wire:ignore.self>
              <h4 class="pt-2 pb-2">Profile Information</h4>
              <ul class="list-group border-top d-flex flex-column mb-2">
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">First Name:</span> 
                  <span class="col-md-9">{{$user_details['user_firstname']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Middle Name:</span>
                  <span class="col-md-9">{{$user_details['user_middlename']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Last Name:</span>
                  <span class="col-md-9">{{$user_details['user_lastname']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Siffix:</span>
                  <span class="col-md-9">{{$user_details['user_suffix']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Gender:</span>
                  <span class="col-md-9">{{$user_details['user_gender_details']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Age:</span>
                  <span class="col-md-9">{{floor((time() - strtotime($user_details['user_birthdate'])) / 31556926);}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Home Address:</span>
                  <span class="col-md-9">{{$user_details['user_address']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Contact #:</span>
                  <span class="col-md-9">{{$user_details['user_phone']}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Birthdate:</span>
                  <span class="col-md-9">{{date_format(date_create($user_details['user_birthdate']), "F d, Y ")}}</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <span class="col-md-3 text-muted">Account created:</span>
                  <span class="col-md-9">{{date_format(date_create( $user_details['date_created']), "F d, Y ")}}</span>
                </li>
              </ul>
              <div class="text-right">
              <button class="btn btn-info mt-3" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
              <button class="btn btn-warning mt-3" data-toggle="modal" data-target="#changePasswordModal">Change Password</button>
              </div>
            </div>

            <div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="profile-tab" wire:ignore.self>
              <h4 class="pt-2 pb-2">Profile Photo</h4>
              @if($user_details['user_profile_picture'] == 'default.png')
                  <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 500px; height: 500px;">
              @else
                  <img style="border-radius: 50%;" width="500" height="500" src="{{asset('storage/images/resize/'.$user_details['user_profile_picture'])}}" alt="">
              @endif
              <br>
              <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#modifyModalPhoto">Edit</button>
            </div>
            <!-- Edit Modal -->
            <div class="modal fade" id="modifyModalPhoto" tabindex="-1" role="dialog" aria-labelledby="modifyModalPhotoLabel" aria-hidden="true" wire:ignore.self>
              <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form wire:submit.prevent="update_profile_and_id()">
                          <!-- Full Name -->
                          <div class="form-group row">
                              <label class="col-sm-4 col-form-label mb-5">Profile photo<span style="color:red;"></span> :</label>
                              <div class="col-sm-8">
                                  <input type="file" accept="image/png, image/jpeg" wire:model="photo" class="form-control" id="newFullName" placeholder="Current Password"></input>
                              </div>
                          </div>
                          <div>
                              @if(isset($profile_photo_error))
                                  <span class="error" style="color:red;">{{ $profile_photo_error }}</span>
                              @endif
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Edit Profile Modal -->
            <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true" wire:ignore.self>
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form wire:submit.prevent="save_profile_info()">
                      <div class="form-group row">
                          <label  class="col-sm-4 col-form-label">First name<span style="color:red;">*</span></label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="firstname" class="form-control" placeholder="Enter firstname" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Middle name<span style="color:red;"></span></label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="middlename" class="form-control" placeholder="Enter middlename" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Last name<span style="color:red;">*</span></label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="lastname" class="form-control" placeholder="Enter lastname" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Suffix<span style="color:red;"></span></label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="suffix" class="form-control" placeholder="Enter suffix" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Gender<span style="color:red;"></span></label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="gender" class="form-control" placeholder="Enter gender" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Complete address</label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="address" class="form-control" placeholder="Enter address" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Phone number<span style="color:red;"></span></label>
                          <div class="col-sm-8">
                          <input type="text"  wire:model="phone" class="form-control" placeholder="Enter phone number"  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 11);">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Birthdate<span style="color:red;">*</span></label>
                          <div class="col-sm-8">
                          <input type="date"  wire:model="birthdate" class="form-control" placeholder="Enter birthdate" required>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Change Password Modal -->
            <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true" wire:ignore.self>
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
                    <form wire:submit.prevent="change_password()">
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Current Password<span style="color:red;">*</span></label>
                          <div class="col-sm-8">
                          <input type="password"  wire:model="current_password"  class="form-control" placeholder="Current Password" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">New Password<span style="color:red;">*</span></label>
                          <div class="col-sm-8">
                          <input type="password"  wire:model="new_password" wire:keyup.debounce.500ms="new_password()" class="form-control" placeholder="New Password" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Confirm Password<span style="color:red;">*</span></label>
                          <div class="col-sm-8">
                          <input type="password"  wire:model="confirm_password" wire:keyup.debounce.500ms="confirm_password"class="form-control" placeholder="Confirm Password" required>
                          </div>
                      </div>
                      <div>
                      @if(isset($password_error)) <span class="error" style="color:red;">{{ $password_error }}</span> @endif
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
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

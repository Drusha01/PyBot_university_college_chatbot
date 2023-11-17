<div>
        <!-- ======= Top Navigation ======= -->
 
    
    

    <div class="container rounded">
    <!-- User Profile Content -->
    <section class="py-5" style="margin-top: 5rem;">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-4">
                <div class="user-profile-left text-center">
                <div class="rounded-circle border-dark p-3" style="background-color: lightgray; display: inline-block;">
                @if($user_details['user_profile_picture'] == 'default.png')
                    <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 150px; height: 150px;">
                @else
                    <img style="border-radius: 50%;" width="150" height="150" src="{{asset('storage/images/resize/'.$user_details['user_profile_picture'])}}" alt="">
                @endif
                    
                </div>

                    <h3>Username:{{$user_details['user_name']}}</h3>
                    <ul class="nav nav-tabs mt-3" id="profileTabs" role="tablist" >
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
            <div class="col-lg-8">
                <div class="user-profile-right">
                    <div class="tab-content" id="profileTabsContent">
                        <!-- Profile Tab Content -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab" wire:ignore.self>
                            <h4>Profile Information</h4>
                            <ul class="list-group">
                                <li class="list-group-item">First name: </strong>{{$user_details['user_firstname']}}</li>
                                <li class="list-group-item">Middle name: </strong> {{$user_details['user_middlename']}}</li>
                                <li class="list-group-item">Last name: </strong> {{$user_details['user_lastname']}}</li>
                                <li class="list-group-item">Suffix: </strong> {{$user_details['user_suffix']}}</li>
                                <li class="list-group-item">Gender: </strong> {{$user_details['user_gender_details']}}</li>
                                <li class="list-group-item">Age: </strong> {{floor((time() - strtotime($user_details['user_birthdate'])) / 31556926);}}</li>
                                <li class="list-group-item">Home Address: </strong> {{$user_details['user_address']}}</li>
                                <li class="list-group-item">Phone number: </strong> {{$user_details['user_phone']}}</li>
                                <li class="list-group-item">Email: </strong> {{$user_details['user_email']}} @if($user_details['user_email_verified'] == 1) @else<a href="profile/change-email">verify</a>@endif</li>
                                <li class="list-group-item">Birthdate: </strong> {{date_format(date_create($user_details['user_birthdate']), "F d, Y ")}}</li>
                                <li class="list-group-item">Account Created: </strong> {{date_format(date_create( $user_details['date_created']), "F d, Y ")}}</li>
                   
                                <!-- Add more user profile information as needed -->
                            </ul>
                            <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#modifyModalDetails">Edit Profile</button>
                            <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#modifyModalpassword">Change Password</button>
                        </div>

                        <div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="Profile-tab"  wire:ignore.self>
                            @if($user_details['user_profile_picture'] == 'default.png')
                                <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="rounded-circle" alt="User Profile" style="width: 500px; height: 500px;">
                            @else
                                <img style="border-radius: 50%;" width="500" height="500" src="{{asset('storage/images/resize/'.$user_details['user_profile_picture'])}}" alt="">
                            @endif
                            <br>
                            <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#modifyModalPhoto">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modifyModalPhoto" tabindex="-1" role="dialog" aria-labelledby="modifyModalLabelDetails" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modifyModalLabelDetails">Change Profile photo</h5>
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

        <div class="modal fade" id="modifyModalDetails" tabindex="-1" role="dialog" aria-labelledby="modifyModalLabelDetails" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modifyModalLabelDetails">Modify Profile Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset>
                            <!-- Full Name -->
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
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modifyModalpassword" tabindex="-1" role="dialog" aria-labelledby="modifyModalpassword" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modifyModalLabelDetails">Change password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset>
                            <!-- Full Name -->
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
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>






    </div>


<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account management</li>
                </ol>
            </nav>
        </div><!-- End Right side columns -->
        <!-- Insert Section -->

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="adminTabs">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#admin-management-tab" wire:ignore.self>Admin Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#user-management-tab" wire:ignore.self>User Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#role-management-tab" wire:ignore.self>Role Management</a>
            </li>
        </ul>
         <!-- Tab Content -->
        <div class="tab-content">
            <!-- Admin Management tab -->
            <div class="tab-pane fade show active" id="admin-management-tab" wire:ignore.self>
                <div class="container-fluid">


                    <!-- Add Admin Button (Opens Add Modal) -->
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success   mx-1"  wire:click="add_admin_modal()" >Add Admin</button>
                    </div>
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover table-bordered" style="min-width:100%">
                            <thead class="thead-dark">
                                <tr>
                                @foreach ($admin_data_filter as $item => $value)
                                    @if($loop->last && $value )
                                        <th class="text-center">
                                            Action
                                        </th>
                                    @elseif($value)
                                        <th>{{$item}}</th>
                                    @endif
                                @endforeach
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($admin_data as $item => $value)
                                </tr>
                                    @if($admin_data_filter['#'])
                                        <td>{{ $loop->index+1 }}</td>
                                    @endif
                                    @if($admin_data_filter['Username'])
                                        <td>{{ $value->user_name }}</td>
                                    @endif
                                    @if($admin_data_filter['Full name'])
                                        <td>{{ $value->user_lastname.', '.$value->user_firstname.' '.$value->user_middlename }}</td>
                                    @endif
                                    @if($admin_data_filter['Email'])
                                        <td>{{ $value->user_email }}</td>
                                    @endif
                                    @if($admin_data_filter['CP#'])
                                        <td>{{ $value->user_phone }}</td>
                                    @endif
                                    @if($admin_data_filter['Verified'])
                                        <td class="text-center"> @if($value->user_email_verified) <i class="bi bi-check"></i> @else <i class="bi bi-x"></i> @endif </td>
                                    @endif
                                    @if($admin_data_filter['Status'])
                                        <td class='text-center'>
                                            {{ $value->user_status_details }}
                                        </td>
                                    @endif
                                    @if($admin_data_filter['Action'])
                                        <td class="text-center">
                                        @if($access_role['R']==1)
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ViewRoomModal" wire:click="view_admin({{$value->user_id }})">View</button>
                                        @endif
                                        @if($access_role['U']==1)
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditRoomModal" wire:click="edit_admin({{$value->user_id }})">Edit</button>
                                        @endif
                                        @if($access_role['D']==1)
                                            @if($value->user_status_details == 'deleted') 
                                                <button class="btn btn-warning" wire:click="activate_admin({{ $value->user_id }})">Activate</button>
                                            @else
                                            <button class="btn btn-danger" wire:click="delete_admin({{ $value->user_id }})">Delete</button>
                                            @endif
                                        @endif
                                        </td>
                                    @endif
                                    </tr>
                                @empty
                                <td class="text-center font-weight-bold" colspan="42">
                                    NO RECORDS 
                                </td>
                                @endforelse
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Add Admin Modal -->
                    <div class="modal fade show" id="adminAddModal" tabindex="-1" role="dialog" aria-labelledby="adminAddModalLabel" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="adminAddModalLabel">Add Admin</h5>
                                    <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                </div>
                                <form wire:submit.prevent="add_admin()">
                                    <div class="modal-body">
                                        <!-- Add Admin form -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="AddAdminFirstName">Username</label>
                                                    <input type="text" class="form-control" wire:model.defer="admin_username" placeholder="Enter Username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminEmail">Email</label>
                                                    <input type="email" class="form-control" wire:model.defer="admin_email" placeholder="Enter Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminFirstName">First Name</label>
                                                    <input type="text" class="form-control" wire:model.defer="admin_firstname" placeholder="Enter First Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminMiddleName">Middle Name</label>
                                                    <input type="text" class="form-control" wire:model.defer="admin_middlename" placeholder="Enter Middle Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminLastName">Last Name</label>
                                                    <input type="text" class="form-control" wire:model.defer="admin_lastname" placeholder="Enter Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="AddAdminEmail">Birthdate</label>
                                                    <input type="date" class="form-control" wire:model.defer="admin_birthdate" placeholder="Enter birthdate" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminEmail">Password</label>
                                                    <input type="password" class="form-control" wire:model.defer="admin_password" placeholder="Enter password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminEmail">Confirm Password</label>
                                                    <input type="password" class="form-control" wire:model.defer="admin_confirm_password" placeholder="Confirm password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="AddAdminRole">Role</label>
                                                    <select class="form-control" id="AddAdminRole" wire:model.defer="admin_role_name_id" required wire:change="update_admin_role()" required>
                                                        <option value="">Select Role</option>
                                                        @forelse ($roles_data as $item => $value)
                                                        <option value="{{$value->admin_role_name_id}}">{{$value->admin_role_name_name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        @if($sign_up_button)<div style="color:red;">{{$sign_up_button}}</div> @endif
                                        <br>
                                        <table class="application-table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-align center">Module</th>
                                                    <th class="text-align center">Create</th>
                                                    <th class="text-align center">Read</th>
                                                    <th class="text-align center">Update</th>
                                                    <th class="text-align center">Delete</th>
                                                </tr>
                                            </thead>
                                            
                                            @forelse ($modules as $item => $value)
                                            <tr wire:key="{{$value->module_id}}">
                                                <td>{{$value->module_nav_name}}</td>
                                                <td class="text-center"><input type="checkbox" wire:model.defer="admin_access_role.{{$loop->index}}.C"></td>
                                                <td class="text-center"><input type="checkbox" wire:model.defer="admin_access_role.{{$loop->index}}.R"></td>
                                                <td class="text-center"><input type="checkbox" wire:model.defer="admin_access_role.{{$loop->index}}.U"></td>
                                                <td class="text-center"><input type="checkbox" wire:model.defer="admin_access_role.{{$loop->index}}.D"></td>
                                            </tr>
                                            @empty
                                            <td class="text-center font-weight-bold" colspan="42">
                                                NO RECORDS
                                            </td>
                                            @endforelse
                                        </table>
                                        <!-- End Add Admin -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add Admin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- View Admin Modal -->
                    <div class="modal fade show" id="ViewAdminModal" tabindex="-1" role="dialog" aria-labelledby="ViewAdminModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ViewAdminModalLabel">View Admin Details</h5>
                                    <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <!-- View Admin Form -->
                                        <div class="form-group">
                                            <label for="editRoleName">Full Name</label>
                                            <input type="text" disabled class="form-control" placeholder="Role name" wire:model.defer="admin_fullname" required>
                                        </div>
                                        <br>
                                        <div>
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Module</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Create</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Read</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Update</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($modules as $item => $value)
                                                        <tr wire:key="{{$value->module_id}}">
                                                            <td>{{$value->module_nav_name}}</td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.C"></td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.R"></td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.U"></td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.D"></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="text-center font-weight-bold" colspan="5">NO RECORDS</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End View Admin Form -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                        <!-- Edit Admin Modal -->
                    <div class="modal fade show" id="EditAdminModal" tabindex="-1" role="dialog" aria-labelledby="EditAdminModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditAdminModalLabel">Edit Admin Details</h5>
                                    <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                </div>
                                <form wire:submit.prevent="save_edit_admin({{$view_admin_user_id}})">
                                    <div class="modal-body">
                                        <!-- User role Form -->
                                        <div class="form-group">
                                            <label for="editRoleName">Full Name</label>
                                            <input type="text" disabled class="form-control" placeholder="Role name" wire:model.defer="admin_fullname" required>
                                        </div>
                                        <br>
                                        <div>
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Module</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Create</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Read</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Update</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($modules as $item => $value)
                                                        <tr wire:key="{{$value->module_id}}">
                                                            <td>{{$value->module_nav_name}}</td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.C"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.R"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.U"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="view_admin_roles.{{$loop->index}}.D"></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="text-center font-weight-bold" colspan="5">NO RECORDS</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End Edit role Form -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- User Management tab -->
            <div class="tab-pane fade" id="user-management-tab" wire:ignore.self>
                <div class="container-fluid">
                    <!-- Add user Button (Opens Add user Modal) -->
                    <button class="btn btn-primary float-right mt-2 mb-2" data-toggle="modal" data-target="#AddUserModal">Add User</button>
                    <!-- User Table -->
                    <div class="table-responsive">
                        <table id="example2" class="table table-hover table-bordered" style="min-width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--  table -->
                                <tr>
                                    <td>1</td>
                                    <td>User 1</td>
                                    <td>user1@example.com</td>
                                    <td>Applicant</td>
                                    <td>Active</td>
                                    <td>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#editUserModal">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>User 2</td>
                                    <td>user2@example.com</td>
                                    <td>Applicant</td>
                                    <td>Inactive</td>
                                    <td>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#editUserModal">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>

                    <div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="AddUserModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="AddUserModalLabel">Add User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body cqh-30">
                                    <!-- Add User form -->
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="AddUserFirstName">First Name</label>
                                                    <input type="text" class="form-control" id="AddUserFirstName" placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="AddUserMiddleName">Midlle Name</label>
                                                    <input type="text" class="form-control" id="AddUserMiddleName" placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="AddUserLastName">Last Name</label>
                                                    <input type="text" class="form-control" id="AddUserLastName" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 p-0">
                                            <div class="form-group">
                                                <label for="AddUserEmail">Email</label>
                                                <input type="email" class="form-control" id="AddUserEmail" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <div class="form-group">
                                                <label for="AddUserRole">Role</label>
                                                <select class="form-control" id="AddUserRole">
                                                    <option value="user">User</option>
                                                    <option value="TBD">TBD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Add User  -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Add User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body cqh-30">
                                    <!-- User Edit Form -->
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="editUserFirstName">First Name</label>
                                                    <input type="text" class="form-control" id="editUserFirstName" placeholder="Edit First name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="editUserMiddleName">Middle Name</label>
                                                    <input type="text" class="form-control" id="editUserMiddleName" placeholder="Edit Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="editUserLastName">Last Name</label>
                                                    <input type="text" class="form-control" id="editUserLastName" placeholder="Edit Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 p-0">
                                            <div class="form-group">
                                                <label for="editUserEmail">Email</label>
                                                <input type="email" class="form-control" id="editUserEmail" placeholder="Enter new Email">
                                            </div>
                                        </div>
                                        <div class="col-md-3 p-0">
                                            <div class="form-group">
                                                <label for="editUserRole">Role</label>
                                                <select class="form-control" id="editUserRole">
                                                    <option value="user">Applicant</option>
                                                    <option value="moderator">TBD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End User Edit Form -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add User Modal -->
            
            <!-- End Edit User Modal -->
            <!-- Role Management tab -->
            <div class="tab-pane fade" id="role-management-tab" wire:ignore.self>
                <div class="container-fluid">
                <!--
                <p>This section enables you to manage user roles and permissions.</p>
                <p>You can define different roles, assign permissions to each role, and allocate roles to users.</p> -->

                    <!-- Role Table -->
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success   mx-1"  wire:click="new_role()" >Add Role</button>
                    </div>
                    <div class="table-responsive mt-30">
                        <table id="example3" class="table table-hover table-bordered" style="min-width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="background-color:#990000; color:white;">#</th>
                                    <th style="background-color:#990000; color:white;">Role Name</th>
                                    <th style="background-color:#990000; color:white;">Description</th>
                                    <th class="text-center" style="background-color:#990000; color:white;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($roles_data as $item => $value)
                                    <tr >
                                        @if($roles_data_filter['#'] )
                                        <td >{{$loop->index+1}}</td>
                                        @endif
                                        @if($roles_data_filter['Role Name'] )
                                        <td >{{$value->admin_role_name_name}}</td>
                                        @endif
                                        @if($roles_data_filter['Description'] )
                                        <td >{{$value->admin_role_name_details}}</td>
                                        @endif
                                        @if($roles_data_filter['Action'] )
                                        <td class="text-center">
                                            @if($access_role['R']==1)
                                            <button class="btn btn-primary"  wire:click="view_role({{$value->admin_role_name_id }})">View</button>
                                            @endif
                                            @if($access_role['U']==1)
                                            <button class="btn btn-success"  wire:click="edit_role({{$value->admin_role_name_id }})">Edit</button>
                                            @endif
                                            @if($access_role['D']==1)
                                            <button class="btn btn-danger" wire:click="delete_role({{ $value->admin_role_name_id }})">Delete</button>
                                            @endif
                                        </td>
                                        @endif
                                    </tr>
                                    @empty
                                    <td class="text-center font-weight-bold" colspan="42">
                                        NO RECORDS 
                                    </td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                
                    <div class="modal fade show" id="AddRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editRoleModalLabel">Add Role</h5>
                                    <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                </div>
                                <form wire:submit.prevent="add_new_role()">
                                    <div class="modal-body">
                                        <!-- User role Form -->
                                        <div class="form-group">
                                            <label for="editRoleName">Role Name</label>
                                            <input type="text" class="form-control" placeholder="Role name" wire:model.defer="access_role_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription">Description</label>
                                            <input type="text" class="form-control" placeholder="Edit Description" wire:model.defer="access_role_description">
                                        </div>
                                        <br>
                                        <div>
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Module</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Create</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Read</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Update</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($modules as $item => $value)
                                                        <tr wire:key="{{$value->module_id}}">
                                                            <td>{{$value->module_nav_name}}</td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="access_roles.{{$loop->index}}.C"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="access_roles.{{$loop->index}}.R"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="access_roles.{{$loop->index}}.U"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="access_roles.{{$loop->index}}.D"></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="text-center font-weight-bold" colspan="5">NO RECORDS</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End Add Role Form -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Add Role</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade show" id="ViewRoleModal" tabindex="-1" role="dialog" aria-labelledby="ViewRoleModalLabel" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ViewRoleModalLabel">View Role</h5>
                                    <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <!-- View Role Form -->
                                        <div class="form-group">
                                            <label for="editRoleName">Role Name</label>
                                            <input type="text" disabled class="form-control" placeholder="Role name" wire:model.defer="role_name_details.0.admin_role_name_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription">Description</label>
                                            <input type="text" disabled class="form-control" placeholder="Edit Description" wire:model.defer="role_name_details.0.admin_role_name_details">
                                        </div>
                                        <br>
                                        <div>
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Module</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Create</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Read</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Update</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($modules as $item => $value)
                                                        <tr wire:key="{{$value->module_id}}">
                                                            <td>{{$value->module_nav_name}}</td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_access_role.{{$loop->index}}.C"></td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_access_role.{{$loop->index}}.R"></td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_access_role.{{$loop->index}}.U"></td>
                                                            <td class="text-center"><input disabled type="checkbox" wire:model.defer="view_access_role.{{$loop->index}}.D"></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="text-center font-weight-bold" colspan="5">NO RECORDS</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End View Role Form -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade show" id="EditRoleModal" tabindex="-1" role="dialog" aria-labelledby="EditRoleModalLabel" aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditRoleModalLabel">Edit Role</h5>
                                    <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                </div>
                                <form wire:submit.prevent="edit_selected_role()">
                                    <div class="modal-body">
                                        <!-- Edit Role Form -->
                                        <div class="form-group">
                                            <label for="editRoleName">Role Name</label>
                                            <input type="text" class="form-control" placeholder="Role name" wire:model.defer="role_name_details.0.admin_role_name_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription">Description</label>
                                            <input type="text" class="form-control" placeholder="Edit Description" wire:model.defer="role_name_details.0.admin_role_name_details">
                                        </div>
                                        <br>
                                        <div>
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Module</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Create</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Read</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Update</th>
                                                        <th class="text-center" style="background-color:#990000; color:white;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($modules as $item => $value)
                                                        <tr wire:key="{{$value->module_id}}">
                                                            <td>{{$value->module_nav_name}}</td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="edit_access_role.{{$loop->index}}.C"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="edit_access_role.{{$loop->index}}.R"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="edit_access_role.{{$loop->index}}.U"></td>
                                                            <td class="text-center"><input type="checkbox" wire:model.defer="edit_access_role.{{$loop->index}}.D"></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="text-center font-weight-bold" colspan="5">NO RECORDS</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End Edit Role Form -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main><!-- End #main -->
</div>

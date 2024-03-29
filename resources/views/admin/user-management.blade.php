@extends('layout.app')
@section('title', 'Pybot | User Management') <!-- Set the page title -->

@section('user-management', 'active')

@section('content')

    <!-- ======= Main Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Account management</h1>
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
                <a class="nav-link active" data-toggle="tab" href="#admin-management-tab">Admin Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#user-management-tab">User Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#role-management-tab">Role Management</a>
            </li>
        </ul>
         <!-- Tab Content -->
        <div class="tab-content">
        <!-- Admin Management tab -->
        <div class="tab-pane fade show active" id="admin-management-tab">
            <div class="container-fluid">


                <!-- Add Admin Button (Opens Add Modal) -->
                <button class="btn btn-success mt-2 mb-2 float-right" data-toggle="modal" data-target="#adminAddModal">Add Admin</button>
                <!-- Admin Table -->
                <div class="table-responsive">
                    <table id="example1" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows dynamically using server-side data or JavaScript -->
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>Admin 1</td>
                                <td>admin1@example.com</td>
                                <td>Administrator</td>
                                <td class="text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td>Admin 2</td>
                                <td>admin2@example.com</td>
                                <td>Administrator</td>
                                <td class="text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <!-- End Admin Table -->
            </div>
        </div>
        <!-- Add Admin Modal -->
        <div class="modal fade" id="adminAddModal" tabindex="-1" role="dialog" aria-labelledby="adminAddModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adminAdminModalLabel">Add Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add Admin form -->
                        <form>
                            <div class="form-group">
                                <label for="AddAdminFirstName">First Name</label>
                                <input type="text" class="form-control" id="AddAdminFirstName" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="AddAdminMiddleName">Midlle Name</label>
                                <input type="text" class="form-control" id="AddAdminMiddleName" placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="AddAdminLastName">Last Name</label>
                                <input type="text" class="form-control" id="AddAdminLastName" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="AddAdminEmail">Email</label>
                                <input type="email" class="form-control" id="AddAdminEmail" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="AddAdminRole">Role</label>
                                <select class="form-control" id="AddAdminRole">
                                    <option value="admin">Administrator</option>
                                    <option value="moderator">Moderator</option>
                                </select>
                            </div>
                        </form>
                        <!-- End Add Admin  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add Admin</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Admin Modal -->
        <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="editAdminModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAdminModalLabel">Edit Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Admin Edit Form -->
                        <form>
                            <div class="form-group">
                                <label for="editAdminFirstName">First Name</label>
                                <input type="text" class="form-control" id="editAdminFirstName" placeholder="Edit First name">
                            </div>
                            <div class="form-group">
                                <label for="editAdminMiddleName">Middle Name</label>
                                <input type="text" class="form-control" id="editAdminMiddleName" placeholder="Edit Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="editAdminLastName">Last Name</label>
                                <input type="text" class="form-control" id="editAdminLastName" placeholder="Edit Last Name">
                            </div>
                            <div class="form-group">
                                <label for="editAdminEmail">Email</label>
                                <input type="email" class="form-control" id="editAdminEmail" placeholder="Enter new Email">
                            </div>
                            <div class="form-group">
                                <label for="editAdminRole">Role</label>
                                <select class="form-control" id="editAdminRole">
                                    <option value="admin">Administrator</option>
                                    <option value="moderator">Moderator</option>
                                </select>
                            </div>
                        </form>
                        <!-- End Admin Edit Form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Admin Modal -->
        <!-- User Management tab -->
        <div class="tab-pane fade" id="user-management-tab">
            <div class="container-fluid">
                <!-- Add user Button (Opens Add user Modal) -->
                <button class="btn btn-success mt-2 mb-2 float-right" data-toggle="modal" data-target="#AddUserModal">Add User</button>
                <!-- User Table -->
                <div class="table-responsive">
                    <table id="example2" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
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
                                <td></td>
                                <td>1</td>
                                <td>User 1</td>
                                <td>user1@example.com</td>
                                <td>Applicant</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editUserModal">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td>User 2</td>
                                <td>user2@example.com</td>
                                <td>Applicant</td>
                                <td>Inactive</td>
                                <td class="text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <!-- End User Table -->
            </div>
        </div>
        <!-- Add User Modal -->
        <div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="AddUserModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AddUserModalLabel">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add User form -->
                        <form>
                            <div class="form-group">
                                <label for="AddUserFirstName">First Name</label>
                                <input type="text" class="form-control" id="AddUserFirstName" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="AddUserMiddleName">Midlle Name</label>
                                <input type="text" class="form-control" id="AddUserMiddleName" placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="AddUserLastName">Last Name</label>
                                <input type="text" class="form-control" id="AddUserLastName" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="AddUserEmail">Email</label>
                                <input type="email" class="form-control" id="AddUserEmail" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="AddUserRole">Role</label>
                                <select class="form-control" id="AddUserRole">
                                    <option value="user">User</option>
                                    <option value="TBD">TBD</option>
                                </select>
                            </div>
                        </form>
                        <!-- End Add User  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add User</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit User Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- User Edit Form -->
                        <form>
                            <div class="form-group">
                                <label for="editUserFirstName">First Name</label>
                                <input type="text" class="form-control" id="editUserFirstName" placeholder="Edit First name">
                            </div>
                            <div class="form-group">
                                <label for="editUserMiddleName">Middle Name</label>
                                <input type="text" class="form-control" id="editUserMiddleName" placeholder="Edit Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="editUserLastName">Last Name</label>
                                <input type="text" class="form-control" id="editUserLastName" placeholder="Edit Last Name">
                            </div>
                            <div class="form-group">
                                <label for="editUserEmail">Email</label>
                                <input type="email" class="form-control" id="editUserEmail" placeholder="Enter new Email">
                            </div>
                            <div class="form-group">
                                <label for="editUserRole">Role</label>
                                <select class="form-control" id="editUserRole">
                                    <option value="user">Applicant</option>
                                    <option value="moderator">TBD</option>
                                </select>
                            </div>
                        </form>
                        <!-- End User Edit Form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit User Modal -->
        <!-- Role Management tab -->
        <div class="tab-pane fade" id="role-management-tab">
            <div class="container-fluid">
            <!--
            <p>This section enables you to manage user roles and permissions.</p>
            <p>You can define different roles, assign permissions to each role, and allocate roles to users.</p> -->

                <!-- Role Table -->
                <div class="table-responsive mt-30">
                    <table id="example3" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Username</th>
                                <th>Role Name</th>
                                <th>Description</th>
                                <th>Permissions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows dynamically using server-side data or JavaScript -->
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>Administrator</td>
                                <td>Full access</td>
                                <td>Edit, Delete, Create</td>
                                <td class="text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td>Editor</td>
                                <td>Modify content</td>
                                <td>Edit, Create</td>
                                <td class="text-center">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <!-- End Role Table -->
            </div>
        </div>
        <!-- Edit role Modal -->
        <div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- User role Form -->
                        <form>
                            <div class="form-group">
                                <label for="editRoleName">Role Name</label>
                                <select class="form-control" id="editRoleName">
                                    <option value="user">Administrator</option>
                                    <option value="moderator">Staff</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="editDescription">Description</label>
                                <input type="text" class="form-control" id="editDescription" placeholder="Edit Description">
                            </div>
                            <div class="form-group">
                                <label for="editPermission">Permission</label>
                                <input type="text" class="form-control" id="editPermission" placeholder="Edit Permission">
                            </div>
                        </form>
                        <!-- End Edit role Form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Inserted Section -->
    </main><!-- End #main -->


@endsection
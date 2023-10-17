@section('content')
@extends('layout.app')
@section('title', 'Pybot | Colleges') <!-- Set the page title -->

@section('colleges', 'active')



@section('content')

    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>College Management</h1>
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Colleges</li>
                </ol>
            </nav>
        </div>


        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="adminTabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#admin-management-tab">College Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#user-management-tab">Q&A Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#role-management-tab">TBD</a>
            </li>
        </ul>

         <!-- Tab Content -->
        <div class="tab-content">
            <!-- College Management tab -->
            <div class="tab-pane fade show active " id="admin-management-tab">
                <div class="container-fluid">
                    <!-- Add Admin Button (Opens Add Modal) -->
                    <button class="btn btn-success mt-4 mb-2" data-toggle="modal" data-target="#adminAddModal">Add College</button>

                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="example1" class="display responsive nowrap" style="min-width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>College Name</th>
                                    <th>Description </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                <tr>
                                    <td>CCS</td>
                                    <td>College of Computing Studies</td>
                                    <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                        <a class="btn btn-primary" href="{{ route('ccs') }}">View</a>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <!-- End Admin Table -->
                </div>
            </div>


            <!-- Add college Modal -->
            <div class="modal fade" id="adminAddModal" tabindex="-1" role="dialog" aria-labelledby="adminAddModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="adminAdminModalLabel">Add Colleges</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add college form -->
                            <form>
                                <div class="form-group">
                                    <label for="AddAdminFirstName">College Name</label>
                                    <input type="text" class="form-control" id="AddAdminFirstName" placeholder="College  Name">
                                </div>
                                <div class="form-group">
                                    <label for="AddAdminMiddleName">Description </label>
                                    <input type="text" class="form-control" id="AddAdminMiddleName" placeholder="Description">
                                </div>
                            </form>
                            <!-- End Add Admin  -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add College</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit  college -->
            <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="editAdminModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editAdminModalLabel">Edit College</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Admin Edit Form -->
                            <form>
                                <div class="form-group">
                                    <label for="editAdminFirstName">College Name</label>
                                    <input type="text" class="form-control" id="editAdminFirstName" placeholder="Edit College name">
                                </div>
                                <div class="form-group">
                                    <label for="editAdminMiddleName">Description</label>
                                    <input type="text" class="form-control" id="editAdminMiddleName" placeholder="Edit Description ">
                                </div>
                                <!-- insert more -->
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
            <!-- End add College Modal -->




            <!-- Q&A ------------------------------------------------------------------------------------------ tab -->
            <div class="tab-pane fade" id="user-management-tab">
                <div class="container-fluid">
                    <!-- Add user Button (Opens Add user Modal) -->
                    <button class="btn btn-success mt-4 mb-2" data-toggle="modal" data-target="#AddUserModal">Add Q&A</button>
                    <!-- User Table -->
                    <div class="table-responsive">
                        <table id="example2" class="display responsive nowrap" style="min-width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Questions</th>
                                    <th>Tags</th>
                                    <th>Answers</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--  table -->
                                <tr>
                                    <td>What is CCS?</td>
                                    <td>information question</td>
                                    <td>
                                        <li>answer 1</li>
                                        <li>answer 2</li>
                                    </td>
                                    <td>
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

            <!-- Add Q AND A modal -->
            <div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="AddUserModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddUserModalLabel">Add Q&A</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add User form -->
                            <form>
                                <div class="form-group">
                                    <label for="AddUserFirstName">Question</label>
                                    <input type="text" class="form-control" id="AddUserFirstName" placeholder=" Input Question">
                                </div>
                                <div class="form-group">
                                    <label for="AddUserMiddleName">Tags</label>
                                    <input type="text" class="form-control" id="AddUserMiddleName" placeholder="Input Tags">
                                </div>
                                <div class="form-group">
                                    <label for="AddUserLastName">Answer</label>
                                    <input type="text" class="form-control" id="AddUserLastName" placeholder="Input Answer">
                                </div>
                            </form>
                            <!-- End Add User  -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add Q&A</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Edit User Modal -->
            <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editUserModalLabel">Edit Q&A</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- User Edit Form -->
                            <form>
                                <div class="form-group">
                                    <label for="editUserFirstName">Question</label>
                                    <input type="text" class="form-control" id="editUserFirstName" placeholder="Edit Questions">
                                </div>
                                <div class="form-group">
                                    <label for="editUserMiddleName">Tags</label>
                                    <input type="text" class="form-control" id="editUserMiddleName" placeholder="Edit Tags">
                                </div>
                                <div class="form-group">
                                    <label for="editUserLastName">Answer</label>
                                    <input type="text" class="form-control" id="editUserLastName" placeholder="Edit Answers">
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




            <!-- TBD ----------------------------------------------------------------------------------------------------- tab -->
            <div class="tab-pane fade" id="role-management-tab">
                <div class="container-fluid">

                    <!-- Role Table -->
                    <div class="table-responsive">

                    </div>
                    <!-- End Role Table -->
                </div>
            </div>


            <!-- TBD edit Modal -->
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
            <!-- End Edit User Modal -->


        </div>

    </main><!-- End #main -->

@endsection
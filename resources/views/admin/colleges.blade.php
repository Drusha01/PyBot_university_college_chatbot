<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>colleges</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body class="admin-dashboard">

  <!-- ======= Header ======= -->
  <header id="header" class="dashboard-header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="dasboard-logo d-flex align-items-center">
        <img src="logo.png" alt="">
        <span class="d-none d-lg-block">PyBot</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block bc-white">Hanz D</span>
          </a><!-- End Profile Iamge Icon -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.blade.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="colleges.blade.php">
          <i class="bi bi-person"></i>
          <span>Colleges</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="department.blade.php">
          <i class="bi bi-question-circle"></i>
          <span>Department</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Model</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>User Management</span>
        </a>
      </li><!-- End Register Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Chat box Management</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Setting</span>
        </a>
      </li><!-- End Blank Page Nav -->
 <li class="nav-item">
      <a class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </ul>
   
  </aside><!-- End Sidebar-->

    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>College Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Colleges</li>
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
            <table class="table table-bordered">
                <thead>
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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal">View</button>
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Tags</th>
                        <th>Answers</th>
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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editUserModal">Edit</button>
                            <button class="btn btn-danger">Delete</button>
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


    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Department</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <!-- CDN inject tables with childrows, bootstrap etc. -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body class="admin-dashboard">

  <!-- ======= Header ======= -->
  <header id="header" class="dashboard-header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard" class="dasboard-logo d-flex align-items-center">
      <div class="frame-group">
                  <div class="frame3">
                    <div class="frame4">
                      <div class="frame5">
                        <h1 class="p">P</h1>
                      </div>
                      <div class="frame6">
                        <h1 class="y">y</h1>
                      </div>
                    </div>
                  </div>
                  <div class="frame7">
                    <div class="frame8">
                      <h1 class="b">b</h1>
                      <h1 class="o">o</h1>
                      <h1 class="t">t</h1>
                    </div>
                  </div>
                </div>
                <img class="tableryin-yang-icon" alt="" src="{{ asset('admin-assets/pybot_icon.svg') }}" />
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
            <span class="d-none d-md-block bc-white">Matt Luna</span>
          </a><!-- End Profile Iamge Icon -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
<a class="nav-link collapsed" href="colleges">
    <i class="bi bi-person"></i>
    <span>Colleges</span>
</a>
</li><!-- End Profile Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" href="department">
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
      </li>
    </ul>
   
  </aside><!-- End Sidebar-->

    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Department Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Department</li>
                </ol>
            </nav>
        </div>

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="DeptTabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#IT-management-tab">IT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#CS-management-tab">CS </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#ACT-management-tab">ACT </a>
            </li>
        </ul>

      <!-- Tab Content -->
      <div class="tab-content">
        <!-- IT Management Tab -->
        <div class="tab-pane fade show active" id="IT-management-tab">
          <div class="container-fluid">      
              <div class="table-responsive m-3">
              <button class="btn btn-success float-start m-2" data-toggle="modal" data-target="#AddModal">Add</button>
                <table id="example1" class="table table-bordered hover" style="width:100%">

                  <thead>
                      <tr>
                          <th>Questions</th>
                          <th>Tags</th>
                          <th>Responses</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Add your table rows dynamically using server-side data or JavaScript -->
                      <tr>
                   
                          <td>How can I view the class schedule?</td>
                          <td>Specific</td>
                          <td class="response-column">
                            <p>Check and extract your associated class pdf file from the official page of...</p>
                            <p>If you're already enroll there would be an email with your schedule attached</p>
                            <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                          </td>
                          <td class="text-center">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                      </tr>
                      <tr>
                    
                          <td>What documents do I need for enrollment?</td>
                          <td>General</td>
                          <td class="response-column">
                            <p>Answer 1</p>
                            <p>Answer 2</p>
                            <p>Answer 3</p>
                          </td>
                          <td class="text-center">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                      </tr>
                      <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
          </div>
        </div>

        <!-- IT dep Tab -->
        <div class="tab-pane fade" id="CS-management-tab">
          <div class="container-fluid">
              <div class="table-responsive m-3">
              <button class="btn btn-success float-start m-2" data-toggle="modal" data-target="#AddModal">Add</button>
                <table id="example2" class="table table-bordered hover" style="width:100%">
                  <thead>
                      <tr>
                     
                          <th>Questions</th>
                          <th>Tags</th>
                          <th>Responses</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Add your table rows dynamically using server-side data or JavaScript -->
                      <tr>
                     
                          <td>How can I view the class schedule?</td>
                          <td>Specific</td>
                          <td class="response-column">
                            <p>Check and extract your associated class pdf file from the official page of...</p>
                            <p>If you're already enroll there would be an email with your schedule attached</p>
                            <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                          </td>
                          <td class="text-center">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                      </tr>
                      <tr>
                     
                          <td>What documents do I need for enrollment?</td>
                          <td>General</td>
                          <td class="response-column">
                            <p>Answer 1</p>
                            <p>Answer 2</p>
                            <p>Answer 3</p>
                          </td>
                          <td class="text-center">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                      </tr>
                      <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
          </div>
        </div>

        <!-- act colleges Tab -->
        <div class="tab-pane fade" id="ACT-management-tab">
          <div class="container-fluid">
              <div class="table-responsive m-3">
              <button class="btn btn-success float-start m-2" data-toggle="modal" data-target="#AddModal">Add</button>
                <table id="example3" class="table table-bordered hover" style="width:100%">
                  <thead>
                      <tr>
                   
                          <th>Questions</th>
                          <th>Tags</th>
                          <th>Responses</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Add your table rows dynamically using server-side data or JavaScript -->
                      <tr>
                      
                          <td>How can I view the class schedule?</td>
                          <td>Specific</td>
                          <td class="response-column">
                            <p>Check and extract your associated class pdf file from the official page of...</p>
                            <p>If you're already enroll there would be an email with your schedule attached</p>
                            <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                          </td>
                          <td class="text-center">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                      </tr>
                      <tr>
                     
                          <td>What documents do I need for enrollment?</td>
                          <td>General</td>
                          <td class="response-column">
                            <p>Answer 1</p>
                            <p>Answer 2</p>
                            <p>Answer 3</p>
                          </td>
                          <td class="text-center">
                            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                      </tr>
                      <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
          </div>
        </div>
          <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="adminAddModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adminAdminModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add Admin form -->
                        <form>
                            <div class="form-group">
                                <label for="addquestion">Question</label>
                                <input type="text" class="form-control" id="addquestion" placeholder="Type Question">
                            </div>
                            <div class="form-group">
                              <label for="addtag">Tag</label>
                              <select class="form-control" id="addtag" multiple>
                                  <option value="Specific">Specific</option>
                                  <option value="General">General</option>
                                  <option value="Information">Information</option>
                              </select>
                          </div>
                          <div class="form-group">
                                <label for="addresponse">Response</label>
                                <input type="text" class="form-control" id="addresponse" placeholder="Type desire response..">
                            </div>
                        </form>
                        <!-- End Add Admin  -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
          </div>
       

    </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
<script src="{{ asset('admin-assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- CDN inject tables with childrows -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  </body>

</html>
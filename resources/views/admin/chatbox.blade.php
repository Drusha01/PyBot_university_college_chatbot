<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>chatbox</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{ asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/mdi@5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">




  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body class="admin-dashboard">

  <!-- ======= Header ======= -->
  <header id="header" class="dashboard-header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="dasboard-logo d-flex align-items-center">
      <img src="{{ asset('logo.png') }}" alt="">
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
          <img src="{{ asset('BBT logo.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block bc-white">Hanz D</span>
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
        <a class="nav-link collapsed" href="chatbox">
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Chatbox</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- Chatbox content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-3 col-12">
          <div class="card">
            <div class="card-body p-0">
              <ul class="nav nav-tabs customtab nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#messages" role="tab">
                    Chats <span class="badge bg-primary rounded-pill ms-2">32</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab">
                    Archived <span class="badge bg-primary rounded-pill ms-2">08</span>
                  </a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="messages" role="tabpanel">
                <!-- Search bar -->
                <div class="p-2 py-3 bg-light rounded search-bar">
                <div class="input-group">
                    <input type="search" class="form-control border-0 " placeholder="Search">
                    <button type="submit" class="btn btn-primary" id="button-addon2">
                    <i class="bi bi-search"></i> <!-- Update the icon class here -->
                    </button>
                </div>
                </div>
<!-- Chat messages -->
<div class="chat-box">
  <!-- Sender's message list -->
  <div class="message-list">
    <!-- Sender 1 -->
    <div class="message incoming d-flex align-items-start">
      <div class="message-profile">
        <img src="/assets/images/faces/face3.jpg" alt="Sender 1 Avatar" width="40px" class="avatar avatar-sm bg--light rounded-circle">
      </div>
      <div>
        <div class="message-content  text-dark  p-2">
          <p><strong>Daddy Hanz</strong><br>Hi, can you help me?!<br><span class="message-timestamp text-xs float-end">2h</span></p>
        </div>
      </div>
    </div>

    <!-- Sender 2 -->
    <div class="message outgoing d-flex align-items-start">
      <div class="message-profile">
        <img src="/assets/images/faces/face2.jpg" alt="Sender 2 Avatar" width="40px" class="avatar avatar-sm bg-primary-light rounded-circle">
      </div>
      <div>
        <div class="message-content text-dark  p-2">
          <p><strong>Bbaby Gorl</strong><br>hi, what's IT/CS Diff.??<br><span class="message-timestamp text-xs float-end">1h</span></p>
        </div>
      </div>
    </div>

    <!-- Add more sender's messages here -->
  </div>
</div>



                  <div class="chat-box">
                    <!-- Archived messages -->
                    <!-- Repeat this structure for more archived messages -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-12">
          <div class="card">
            <div class="card-body px-4 py-3 border-bottom">
              <!-- User information -->
              <div class="d-md-flex d-block justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                <img src="/assets/images/faces/face1.jpg"  width="60px" alt="User Avatar" class="avatar avatar-lg bg-primary-light rounded-circle me-3">

                  <div>
                    <a href="#" class="text-primary"><strong>Mical Clark</strong></a>
                    <p class="mb-0 text-success">Active Now</p>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
                  <a href="#" class="btn btn-primary btn-circle rounded-circle">
                       <!-- user info icon -->
                  <i class="fas fa-info-circle"></i>

                  </a>
                    <i class="fa fa-ellipsis-v"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <!-- Chat messages -->
            <div class="chat-box">
                <!-- Incoming message with profile -->
                <div class="message incoming d-flex justify-content-end">
                    <div class="message-content bg-light text-dark rounded p-2" style="border-radius: 25px 25px 25px 0;">
                        <p>Hello there!</p>
                    </div>
                    <div class="message-profile ml-2">
                        <img src="/assets/images/faces/face1.jpg" alt="Incoming User Avatar" width="40px" class="avatar avatar-sm bg-primary-light rounded-circle">
                    </div>
                </div>

                <!-- Outgoing message with profile -->
                <div class="message outgoing d-flex">
                    <div class="message-profile mr-2">
                        <img src="/assets/images/wmsu-logo-1@2x.png" alt="Outgoing User Avatar" width="40px" class="avatar avatar-sm bg-primary-light rounded-circle">
                        <span class="profile-name"></span>
                    </div>
                    <div class="message-content bg-primary text-white rounded p-1" style="border-radius: 25px 25px 0 25px; display: flex; align-items: center; justify-content: center;">
                        <p>Hi, how can I help you?</p>
                    </div>
                </div>
                <!-- Incoming message with profile -->
                <div class="message incoming d-flex justify-content-end">
                    <div class="message-content bg-light text-dark rounded p-2" style="border-radius: 25px 25px 25px 0;">
                        <p>I miss you baby  </p>
                    </div>
                    <div class="message-profile ml-2">
                        <img src="/assets/images/faces/face1.jpg" alt="Incoming User Avatar" width="40px" class="avatar avatar-sm bg-primary-light rounded-circle">
                    </div>
                </div>
                <!-- Outgoing message with profile -->
                <div class="message outgoing d-flex">
                    <div class="message-profile mr-2">
                        <img src="/assets/images/wmsu-logo-1@2x.png" alt="Outgoing User Avatar" width="40px" class="avatar avatar-sm bg-primary-light rounded-circle">
                        <span class="profile-name"></span>
                    </div>
                    <div class="message-content bg-primary text-white rounded  p-2" style="border-radius:25px 25px 0 25px; display: flex; align-items: center; justify-content: center;">
                        <p>????</p>
                    </div>
                </div>
                <!-- Outgoing message with profile -->
                <div class="message outgoing d-flex">
                    <div class="message-profile mr-2">
                        <img src="/assets/images/wmsu-logo-1@2x.png" alt="Outgoing User Avatar" width="40px" class="avatar avatar-sm bg-primary-light rounded-circle">
                        <span class="profile-name"></span>
                    </div>
                    <div class="message-content bg-primary text-white rounded p-1 mt-1" style="border-radius:25px 25px 0 25px; display: flex; align-items: center; justify-content: center;">
                        <p>ulol miss mo mukha mo</p>
                    </div>
                </div>
                <!-- Add more static chat messages here -->
            </div>

            <div class="card-footer">
              <!-- Message input field and buttons -->
              <div class="d-md-flex d-block justify-content-between align-items-center">
                <input class="form-control py-2  me-5" type="text" placeholder="Type something here...">
                <div class="d-flex justify-content-between align-items-center mt-3 mt-md-0">
                <!-- Font Awesome Link Icon -->
                <!-- Font Awesome Link Icon -->
                <button type="button" class="btn btn-secondary rounded-circle me-2 bg-white">
                <i class="fas fa-link text-black"></i>
                </button>

                <!-- Font Awesome Image Icon -->
                <button type="button" class="btn btn-secondary rounded-circle me-2 bg-white">
                <i class="fas fa-image text-black"></i>
                </button>

                <!-- Font Awesome Face Icon -->
                <button type="button" class="btn btn-secondary rounded-circle me-2 bg-white">
                <i class="fas fa-smile text-black"></i>
                </button>

                <!-- Font Awesome Microphone Icon -->
                <button type="button" class="btn btn-secondary rounded-circle me-2 bg-white">
                <i class="fas fa-microphone text-black"></i>
                </button>

                <!-- Font Awesome Camera Icon -->
                <button type="button" class="btn btn-secondary rounded-circle me-2 bg-white">
                <i class="fas fa-camera text-black"></i>
                </button>

                <!-- Font Awesome Send Icon -->
                <button type="button" class="btn btn-primary rounded-circle me-1 bg-blue">
                <i class="fas fa-paper-plane text-white"></i>
                </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End chatbox content -->

    </main><!-- End #main -->
 
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{ asset('admina-assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('admin-assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
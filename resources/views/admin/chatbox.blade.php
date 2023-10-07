@include('layout.header')


<body class="admin-dashboard">

  <!-- ======= Navbar ======= -->
  @include('layout.navbar')

  <!-- ======= Sidebar ======= -->
  @include('layout.sidebar')

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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-3 col-12">
                            <div class="box dash-chat" id="chat-bx">
                                <div class="box-body p-0">
                                    <ul class="nav nav-tabs customtab nav-justified" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#messages" role="tab">Chats <span class="badge badge-pill mx-5">32</span> </a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab">Archived <span class="badge badge-pill mx-5">08</span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="messages" role="tabpanel">
                                            <div class="p-2 py-10 bg-light rounded search-bar">
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon2" type="submit" class="btn"><i class="fa fa-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                                                </div>
                                            </div>
                                            <div class="chat-box-six2">
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light avr-round" src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Mical Clark</strong></a>
                                                        <p class="mb-0">Hi, are you there?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">10:00 PM</span>
                                                    <span class="badge badge-primary">2</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-danger avatar avatar-lg" href="#"><img class="bg-success-light avr-round" src="{{ asset('admin-assets/avatar/avatar-2.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Joanna Henna</strong></a>
                                                        <p class="mb-0">Looking for some help..anyone?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">1:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-warning avatar avatar-lg" href="#"><img class="bg-warning-light avr-round" src="{{ asset('admin-assets/avatar/avatar-3.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Hanna Garski</strong></a>
                                                        <p class="mb-0">Are you still alive.</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">1:20 PM</span>
                                                    <span class="badge badge-primary">1</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-danger-light avr-round" src="{{ asset('admin-assets/avatar/avatar-4.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Johen Doe</strong></a>
                                                        <p class="mb-0">Selling New car</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">12:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-info-light avr-round" src="{{ asset('admin-assets/avatar/avatar-5.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Jane Orchard</strong></a>
                                                        <p class="mb-0">How are you today?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">1:15 AM</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-danger avatar avatar-lg" href="#"><img class="bg-success-light avr-round" src="{{ asset('admin-assets/avatar/avatar-6.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Abdullah</strong></a>
                                                        <p class="mb-0">Hi, are you there?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">1:15 AM</span>
                                                    <span class="badge badge-primary">5</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-warning avatar avatar-lg" href="#"><img class="bg-primary-light avr-round" src="{{ asset('admin-assets/avatar/avatar-7.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Robert Albert</strong></a>
                                                        <p class="mb-0">going to help you with new products.</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">9:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-warning-light avr-round" src="{{ asset('admin-assets/avatar/avatar-8.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Maisha</strong></a>
                                                        <p class="mb-0">Hi, are you there?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">2:00 PM</span>
                                                    <span class="badge badge-primary">1</span>
                                                    </div>
                                                </div>									
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contacts" role="tabpanel">									
                                            <div class="p-2 py-10 bg-light rounded search-bar">
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon4" type="submit" class="btn"><i class="fa fa-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                                                </div>
                                            </div>
                                            <div class="chat-box-six2">										
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-danger avatar avatar-lg" href="#"><img class="bg-success-light avr-round" src="{{ asset('admin-assets/avatar/avatar-6.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Abdullah</strong></a>
                                                        <p class="mb-0">Hi, are you there?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">1:15 AM</span>
                                                    <span class="badge badge-primary">5</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-warning avatar avatar-lg" href="#"><img class="bg-primary-light avr-round" src="{{ asset('admin-assets/avatar/avatar-7.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Robert Albert</strong></a>
                                                        <p class="mb-0">going to help you with new products.</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">9:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                    <div class="d-flex align-items-center">
                                                        <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-warning-light avr-round" src="{{ asset('admin-assets/avatar/avatar-8.png') }}" alt="..."></a>
                                                        <div>
                                                        <a class="hover-primary mb-5" href="#"><strong>Maisha</strong></a>
                                                        <p class="mb-0">Hi, are you there?</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                    <span class="d-block mb-5 fs-12">2:00 PM</span>
                                                    <span class="badge badge-primary">1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>								
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-12">
                            <div class="row">
                                <div class="col-xl-12 col-12">
                                    <div class="box">
                                    <div class="box-body px-20 py-10 bb-1 bbsr-0 bber-0">
                                        <div class="d-md-flex d-block justify-content-between align-items-center w-p100">
                                            <div class="d-flex align-items-center">
                                                <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="..."></a>
                                                <div>
                                                <a class="hover-primary mb-5" href="#"><strong>Mical Clark</strong></a>
                                                <p class="mb-0 fs-12 text-success">Active Now</p>
                                                </div>
                                            </div>
                                            <div class="mt-15 mt-md-0 d-flex align-items-center gap-2">
            
                                                <a href="#" class="hover-primary"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                            </div>
                                            
                                        </div>								             
                                    </div>

                                    <div class="box-body mb-30">
                                        <div class="chat-box-six">
                                            <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0">Hello There!</p>
                                                    </div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div>
                                            
                                            <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="ms-15 status-success avatar avatar-lg" href="#"><img class="bg-danger-light rounded-circle" src="{{ asset('admin-assets/avatar/avatar-2.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div>
                                            
                                            <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0">is there new product arrived?</p>
                                                    </div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0">and when i can get my delivery... it’s being late almost</p>
                                                    </div>
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div>
                                            
                                            <div class="spt-line mb-30">
                                                <p class="mb-0 text-fade"><span class="bg-white">New Messages</span></p>
                                            </div>
                                            
                                            <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="ms-15 status-success avatar avatar-lg" href="#"><img class="bg-danger-light rounded-circle" src="{{ asset('admin-assets/avatar/avatar-2.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                        <p class="mb-0">is there new product arrived?</p>
                                                    </div>
                                                    <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                        <p class="mb-0">and when i can get my delivery... it’s being late almost</p>
                                                    </div>
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div>
                                            
                                            <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>											
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                        <div class="box-footer">
                                            <div class="d-md-flex d-block justify-content-between align-items-center">
                                                <input class="form-control b-0 py-10" type="text" placeholder="Type something here...">
                                                <div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class='bx bx-link-alt' ></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class='bx bxs-image-alt' ></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class='bx bxs-microphone' ></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class='bx bxs-camera' ></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle btn-primary">
                                                        <i class='bx bx-send'></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
                <!-- Modal -->
                <div class="modal modal-right fade" id="modal-right" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header no-border pb-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0 bg-white">
                            <div class="media-list media-list-divided">						  
                                <div>
                                    <div class="text-center mb-20">
                                        <a href="#"><img class="w-80 h-80 mb-15 bg-primary-light rounded10" src="{{ asset('admin-assets/avatar/avatar-1.png') }}" alt="..."></a>
                                        <h4 class="mb-0">Mical Clark</h4>
                                    </div>
                                    <small>Ranking</small>
                                    <div class="d-flex gap-2 justify-content-evenly">
                                        <button type="button" class="w-p100 waves-effect waves-light btn btn-primary">Cold</button>
                                        <button type="button" class="w-p100 waves-effect waves-light btn btn-outline btn-primary">Warm</button>
                                        <button type="button" class="w-p100 waves-effect waves-light btn btn-outline btn-primary">Hot</button>
                                    </div>
                                </div>
                                <hr class="my-30">
                                <div>
                                    <div class="mb-15 d-flex gap-2 justify-content-between align-items-center">
                                        <h5 class="mb-0">Customer Information</h5>
                                        <button type="button" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-edit"></i></button>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Phone Number</p>
                                        <p class="mb-0 fw-600">+1 541 236 8790</p>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Email Address</p>
                                        <p class="mb-0 fw-600">johen_doe@dummy.com</p>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Birth Date</p>
                                        <p class="mb-0 fw-600">21 July 1983</p>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Gender</p>
                                        <p class="mb-0 fw-600">Male</p>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Address</p>
                                        <p class="mb-0 fw-600">4008 480th Hwy, Campti, LA, 71411</p>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Licence Number</p>
                                        <p class="mb-0 fw-600">412-485-097-004</p>
                                    </div>
                                    <div class="mb-10">
                                        <p class="text-fade mb-0">Current Website</p>
                                        <p class="mb-0 fw-600">www.dummy.com</p>
                                    </div>
                                </div>
                                <hr class="my-30">
                                <div class="dash-tag">
                                    <div class="mb-15 d-flex gap-2 justify-content-between align-items-center">
                                        <h5 class="mb-0">Tags</h5>
                                        <button type="button" class="waves-effect waves-light btn btn-sm btn-primary-light">+ Add New</button>
                                    </div>
                                    <div class="d-inline-flex">
                                        <input type="text" value="brand new car,lamborghini,old car, corporate,marketing,naire,new arrived,sold out" data-role="tagsinput" placeholder="add tags"/> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layout.footer')

</body>

</html>
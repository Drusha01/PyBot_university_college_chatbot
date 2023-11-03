@section('title', 'Pybot | Chat Management') <!-- Set the page title -->

@section('chatbox', 'active')
<div>
<main id="main" class="main">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chat Messages</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="box dash-chat" id="chat-bx">
                        <div class="box-body p-0">
                            <!-- Recent Chats -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="messages" role="tabpanel">
                                    <div class="row mb-2">
                                        <div class="col-11">
                                            <div class="bg-light rounded search-bar">
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button id="button-addon2" type="submit" class="btn"><i class="bi bi-search"></i></button>
                                                </div>
                                                <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <div class="navbar-nav navbar-nav-right">
                                                <div class="nav-item dropdown">
                                                    <a href="#" class="nav-link" data-bs-toggle="collapse" href="#filterDropdown" role="button" aria-expanded="false" aria-controls="filterDropdown">
                                                        <i class="bi bi-funnel"></i>
                                                    </a>
                                                </div>
                                                <ul class="collapse" id="filterDropdown"class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="">
                                                    <div>
                                                        <a class="nav-link dropdown-item" data-target="#all-chats" tabindex="-1">
                                                            <i class="bi bi-chat-square-text"></i>
                                                            <span>All Chats</span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a class="nav-link dropdown-item" data-target="#active-contacts" tabindex="-1">
                                                            <i class="bi bi-person-check"></i>
                                                            <span>Active Contacts</span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a class="nav-link dropdown-item" data-target="#archived-chats">
                                                            <i class="bi bi-archive"></i>
                                                            <span>Archived Chats</span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a class="nav-link dropdown-item" data-target="#spam-messages" tabindex="-1">
                                                            <i class="bi bi-bookmark-x"></i>
                                                            <span>Spam Messages</span>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a class="nav-link dropdown-item" data-target="#trash-bin" tabindex="-1">
                                                            <i class="bi bi-trash3"></i>
                                                            <span>Trash Bin</span>
                                                        </a>
                                                    </div>
                                                </ul><!-- .dropdown-menu -->
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="scrollbar-y chat-box-six2 custminh-500 cqh-31">
                                        <ul class="nav nav-tabs nav-tabs-vertical-custom nav-justified" role="tablist">
                                            <li class="nav-item"> 
                                                <a class="nav-link fade show p-0" data-toggle="tab" href="#first" role="tab">
                                                    <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                        <div class="d-flex align-items-center w-100 pr-10">
                                                            <span class="me-15 status-success avatar avatar-lg"><img class="bg-primary-light avr-round" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."></span>
                                                            <div class="text-left text-dark w-100">
                                                            <span class="hover-primary mb-5"><strong>Mical Clark</strong></span>
                                                            <p class="mb-0">Hi, are you there?</p>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                        <span class="d-block mb-5 fs-12 text-nowrap">10:00 PM</span>
                                                        <span class="badge badge-primary">2</span>
                                                        </div>
                                                    </div>
                                                </a> 
                                            </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link fade show p-0" data-toggle="tab" href="#second" role="tab">
                                                    <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                        <div class="d-flex align-items-center w-100 pr-10">
                                                            <span class="me-15 status-success avatar avatar-lg"><img class="bg-primary-light avr-round" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></span>
                                                            <div class="text-left text-dark w-100">
                                                            <span class="hover-primary mb-5"><strong>Sarah Burg</strong></span>
                                                            <p class="mb-0">Hi, are you there?</p>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                        <span class="d-block mb-5 fs-12 text-nowrap">9:00 PM</span>
                                                        <span class="badge badge-primary"></span>
                                                        </div>
                                                    </div>
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="" role="tabpanel">
                            <div class="box">
                                <div class="box-body px-20 py-10 bb-1 bbsr-0 bber-0">
                                    <div class="d-flex justify-content-between align-items-center w-p100">
                                        <div class="d-flex align-items-center w-100 pr-10">
                                            
                                        </div>
                                        <div class="mt-15 mt-md-0 d-flex align-items-center gap-2">

                                            <a href="#" class="hover-primary"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                        </div>

                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="d-flex justify-content-center align-items-center text-muted scrollbar-y chat-box-six custminh-350 cqh-31">
                                        <div class="row text-center">
                                            <h3 class="col-12 text-secondary">Open a Message</h3>
                                            <p class="col-12">To open, click from the Chat List you want to view message.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="first" role="tabpanel">
                            <div class="box">
                                <div class="box-body px-20 py-10 bb-1 bbsr-0 bber-0">
                                    <div class="d-flex justify-content-between align-items-center w-p100">
                                        <div class="d-flex align-items-center w-100 pr-10">
                                            <a class="me-15 status-success avatar avatar-lg" href="#modal-right"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."></a>
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

                                <div class="box-body">
                                    <div class="scrollbar-y chat-box-six custminh-350 cqh-31">
                                        <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                            <div>
                                                <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."></a>
                                            </div>
                                            <div>
                                                <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                    <p class="mb-0 p-2">Hello There!</p>
                                                </div>
                                                <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                    <p class="mb-0 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                                <p class="text-muted mb-15">2 minutes ago</p>
                                            </div>
                                        </div>

                                        <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                            <div>
                                                <a class="ms-15 status-success avatar avatar-lg" href="#"><img class="bg-danger-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></a>
                                            </div>
                                            <div>
                                                <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                    <p class="mb-0 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <p class="text-muted mb-15">2 minutes ago</p>
                                            </div>
                                        </div>

                                        <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                            <div>
                                                <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."></a>
                                            </div>
                                            <div>
                                                <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                    <p class="mb-0 p-2">is there new product arrived?</p>
                                                </div>
                                                <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                    <p class="mb-0 p-2">and when i can get my delivery... it’s being late almost</p>
                                                </div>
                                                <p class="text-muted mb-15">2 minutes ago</p>
                                            </div>
                                        </div>

                                        <div class="spt-line mb-30">
                                            <p class="mb-0 text-fade"><span class="bg-white">New Messages</span></p>
                                        </div>

                                        <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                            <div>
                                                <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."></a>
                                            </div>
                                            <div>
                                                <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                    <p class="mb-0 p-2">Hi, are you there?</p>
                                                </div>
                                                <p class="text-muted mb-15">2 minutes ago</p>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="second" role="tabpanel">
                            <div class="box">
                                <div class="box-body px-20 py-10 bb-1 bbsr-0 bber-0">
                                    <div class="d-flex justify-content-between align-items-center w-p100">
                                        <div class="d-flex align-items-center w-100 pr-10">
                                            <a class="me-15 status-success avatar avatar-lg" href="#modal-right"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></a>
                                            <div>
                                            <a class="hover-primary mb-5" href="#"><strong>Sarah Burg</strong></a>
                                            <p class="mb-0 fs-12 text-success">Active Now</p>
                                            </div>
                                        </div>
                                        <div class="mt-15 mt-md-0 d-flex align-items-center gap-2">

                                            <a href="#" class="hover-primary"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                        </div>

                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="scrollbar-y chat-box-six custminh-350 cqh-31">
                                        <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                            <div>
                                                <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></a>
                                            </div>
                                            <div>
                                                <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                    <p class="mb-0 p-2">Hello There!</p>
                                                </div>
                                                <p class="text-muted mb-15">one minute ago</p>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="box-footer px-2">
                            <div class="d-md-flex d-sm-block justify-content-between align-items-center">
                                <textarea class="form-control form-control-sm border-0 py-10 mb-3 mr-3" rows="2" id="newmessage" name="newmessage" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type something here..."></textarea>
                                <div class="d-flex justify-content-evenly align-items-center mt-md-0">
                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary d-grid align-content-sm-center">
                                        <i class='bx bx-link-alt' ></i>
                                    </button>
                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary d-grid align-content-sm-center">
                                        <i class='bx bxs-image-alt' ></i>
                                    </button>
                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary d-grid align-content-sm-center">
                                        <i class='bx bxs-microphone' ></i>
                                    </button>
                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary d-grid align-content-sm-center">
                                        <i class='bx bxs-camera' ></i>
                                    </button>
                                    <button type="button" class="waves-effect waves-circle btn btn-circle btn-primary d-grid align-content-sm-center">
                                        <i class='bx bx-send'></i>
                                    </button>
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
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header no-border pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0 bg-white">
                    <div class="media-list media-list-divided">
                        <div>
                            <div class="text-center mb-20">
                                <a href="#"><img class="w-80 h-80 mb-15 bg-primary-light rounded10" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."></a>
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
    <!-- /.modal -->
    </div>
</div>
<!-- /.content-wrapper -->

</main><!-- End #main -->
</div>


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
                    <div class="col-md-5 col-12 mb-2">
                        <div class="box dash-chat" id="chat-bx">
                            <div class="box-body p-0">
                                <!-- Recent Chats -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="messages" role="tabpanel">
                                        <div class="row mb-2">
                                            <div class="col-9 pr-0">
                                                <div class="bg-light rounded search-bar">
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button id="button-addon2" type="submit" class="btn"><i class="bi bi-search"></i></button>
                                                    </div>
                                                    <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="navbar-nav btn-group p-0">
                                                    <div class="nav-item dropdown">
                                                    <a class="nav-link count-indicator btn btn-outline-light dropdown-toggle" id="filterDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-funnel"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="filterDropdown">
                                                        <a class="dropdown-item filter-option" data-filter-category="all" tabindex="-1">
                                                        <i class="bi bi-chat-square-text"></i>
                                                        <span>All Chats</span>
                                                        </a>
                                                        <a class="dropdown-item filter-option" data-filter-category="active" tabindex="-1">
                                                        <i class="bi bi-person-check"></i>
                                                        <span>Active Contacts</span>
                                                        </a>
                                                        <a class="dropdown-item filter-option" data-filter-category="archived" tabindex="-1">
                                                        <i class="bi bi-archive"></i>
                                                        <span>Archived Chats</span>
                                                        </a>
                                                        <a class="dropdown-item filter-option" data-filter-category="spam" tabindex="-1">
                                                        <i class="bi bi-bookmark-x"></i>
                                                        <span>Spam Messages</span>
                                                        </a>
                                                        <a class="dropdown-item filter-option" data-filter-category="trash" tabindex="-1">
                                                        <i class="bi bi-trash3"></i>
                                                        <span>Trash Bin</span>
                                                        </a>
                                                    </div></div>
                                                </div>
                                                </div>
                                        </div> 
                                        <div class="scrollbar-y chat-box-six2 cqh-24 overflow-x-hidden">
                                            <ul class="nav nav-tabs nav-tabs-vertical nav-justified" role="tablist">
                                                @forelse ($chat_box_list as $key => $value)
                                                    <li class="nav-item" > 
                                                        <a class="nav-link fade show p-0" wire:click="chat_box_selected({{$value->cbc_chat_box_id}})" @if($value->cbc_user_id == $chat_box['chat_box_user_sender']) style="background-color:white;" @endif >
                                                            <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                                <div class="d-flex align-items-center w-100 pr-10">
                                                                    <span class="me-15 status-success avatar avatar-lg">
                                                                        @if( $value->user_profile_picture == 'default.png')
                                                                            <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="bg-primary-light avr-round" alt="User Profile" >
                                                                        @else
                                                                            <img  class="bg-primary-light avr-round" style="border-radius: 50%;" src="{{asset('storage/images/resize/'.$value->user_profile_picture)}}" alt="">
                                                                        @endif
                                                                        <!-- <img class="bg-primary-light avr-round" src="{{ asset('admin-assets/media/avatar/avatar-1.png') }}" alt="..."> -->
                                                                    </span>
                                                                    <div class="text-left text-dark w-100">
                                                                    <p class="mb-5"><strong>{{ $value->user_firstname.' '.$value->user_middlename.' '.$value->user_lastname}}</strong></p>
                                                                    <span class="hover-primary mb-0"><strong>{{$value->cbc_chat_content}}</strong></span>
                                                                
                                                                    </div>
                                                                </div>
                                                                <div class="text-end">
                                                                <span class="d-block mb-5 fs-12 text-nowrap">{{$value->date_created}}</span>
                                                                <!-- <span class="badge badge-primary">2</span> -->
                                                                </div>
                                                            </div>
                                                        </a> 
                                                    </li>
                                                @empty
                                                    <li class="nav-item"> 
                                                        <a class="nav-link fade show p-0" data-toggle="tab" href="#second" role="tab">
                                                            <div class="p-20 bb-1 d-flex align-items-center justify-content-between pull-up">
                                                                <div class="d-flex align-items-center w-100 pr-10">
                                                                    <span class="me-15 status-success avatar avatar-lg"><img class="bg-primary-light avr-round" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></span>
                                                                    <div class="text-left text-dark w-100">
                                                                    <span class="hover-primary mb-5"><strong>No Data yet</strong></span>
                                                                    <!-- <p class="mb-0">Hi, are you there?</p> -->
                                                                    </div>
                                                                </div>
                                                                <div class="text-end">
                                                                <!-- <span class="d-block mb-5 fs-12 text-nowrap">9:00 PM</span> -->
                                                                <span class="badge badge-primary"></span>
                                                                </div>
                                                            </div>
                                                        </a> 
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade @if($chat_content) @else show active @endif" id="" role="tabpanel">
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
                                        <div class="d-flex justify-content-center align-items-center text-muted scrollbar-y chat-box-six cqh-24">
                                            <div class="row text-center px-2">
                                                <h3 class="col-12 text-secondary">Open a Message</h3>
                                                <p class="col-12">To open, click from the Chat List you want to view message.</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade @if($chat_content) show active @endif" >
                                <div class="box">
                                    <div class="box-body px-20 py-10 bb-1 bbsr-0 bber-0">
                                        @if($chat_box)
                                        <div class="d-flex justify-content-between align-items-center w-p100">
                                            <div class="d-flex align-items-center w-100 pr-10">
                                                <a class="me-15 status-success avatar avatar-lg" href="#modal-right">
                                                    @if( $chat_box['user_profile_picture'] == 'default.png')
                                                        <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" class="bg-primary-light avr-round" alt="User Profile" >
                                                    @else
                                                        <img  class="bg-primary-light avr-round" style="border-radius: 50%;" src="{{asset('storage/images/resize/'.$chat_box['user_profile_picture'])}}" alt="">
                                                    @endif
                                                </a>
                                                <div>
                                                <a class="hover-primary mb-5" href="#"><strong>{{$chat_box['user_firstname'].' '.$chat_box['user_middlename'].' '.$chat_box['user_lastname']}}</strong></a>
                                                <p class="mb-0 fs-12 text-success">Active Now</p>
                                                </div>
                                            </div>
                                            <div class="mt-15 mt-md-0 d-flex align-items-center gap-2">

                                                <a href="#" class="hover-primary"><i class='bx bx-dots-vertical-rounded' ></i></a>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="box-body" wire:poll.2000ms="update_content_data()">
                                        <div class="scrollbar-y chat-box-six cqh-24">
                                            @foreach ($chat_content as $key =>$value)
                                                @if($value->cbc_user_id != $chat_box['chat_box_user_sender'])
                                                <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                                    <div>
                                                        <div class="chat-comment d-table max-w-p70 bg-primary mr-50 mb-15 px-15 py-10 rounded10 bter-0" >
                                                            <p class="mb-0 p-2 " >{{$value->cbc_chat_content}}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                @else
                                                <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                                    <div>
                                                        <div class="chat-comment d-table max-w-p70 bg-light  ml-50 mb-15 px-15 py-10 rounded10 bter-0">
                                                            <p class="mb-0 p-2 text-wrap">{{$value->cbc_chat_content}}</p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                            

                                          

                                            <!-- <div class="lt-bx mb-30 d-flex align-items-start w-p100">
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
                                                        <p class="mb-0 p-2">is there new product arrived?</p>
                                                    </div>
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div> -->

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="second" role="tabpanel">
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
                                        <div class="scrollbar-y chat-box-six cqh-24">
                                            <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="me-15 status-success avatar avatar-lg" href="#"><img class="bg-primary-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0 p-2">Hello There!</p>
                                                    </div>
                                                    <div class="chat-comment box-shadowed d-table max-w-p70 bg-primary mb-15 px-15 py-10 rounded10 btsr-0">
                                                        <p class="mb-0 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                    <p class="text-muted mb-15">1 minute ago</p>
                                                </div>
                                            </div>
                                            <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                                <div>
                                                    <a class="ms-15 status-success avatar avatar-lg" href="#"><img class="bg-danger-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-3.png') }}" alt="..."></a>
                                                </div>
                                                <div>
                                                    <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                        <p class="mb-0 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <p class="text-muted mb-15">2 minutes ago</p>
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->
                            <div class="box-footer px-2">
                                <div class="d-md-flex d-sm-block justify-content-between align-items-center">
                                    <textarea class="form-control form-control-sm border-0 py-10 mb-3 mt-3 mr-3" wire:model.defer="chat_content_details" rows="2" id="newmessage" name="newmessage"  placeholder="Type something here..."></textarea>
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
                                        <button type="button" class="waves-effect waves-circle btn btn-circle btn-primary d-grid align-content-sm-center" wire:click="send_message()">
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
 
    </main>
</div>

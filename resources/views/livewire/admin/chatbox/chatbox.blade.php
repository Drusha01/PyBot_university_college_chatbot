@section('title', 'Pybot | Chat Management') <!-- Set the page title -->

@section('chatbox', 'active')
<div>
<main id="main" class="main">

<div class="pagetitle">
    <h1>Chat Management</h1>
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
                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <h4>Recent</h4>
                                </div>
                                <div>
                                    <li class="nav-item dropdown">
                                        <button class="nav-link dropdown-toggle" data-toggle="dropdown" data-offset="0,10" aria-expanded="false">
                                            <!-- filter -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                                                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
                                            </svg>
                                            <span>Filter</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" style="">
                                            <ul class="tyn-list-links nav nav-tabs border-0" role="tablist">
                                                <li>
                                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#all-chats" aria-selected="false" role="tab" tabindex="-1">
                                                        <!-- chat-square-text -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
                                                        </svg>
                                                        <span>All Chats</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="nav-link" data-toggle="tab" data-target="#active-contacts" aria-selected="false" role="tab" tabindex="-1">
                                                        <!-- person-check -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                                                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"></path>
                                                        </svg>
                                                        <span>Active Contacts</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="nav-link active" data-toggle="tab" data-target="#archived-chats" aria-selected="true" role="tab">
                                                        <!-- archive -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"></path>
                                                        </svg>
                                                        <span>Archived Chats</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="nav-link" data-toggle="tab" data-target="#spam-messages" aria-selected="false" role="tab" tabindex="-1">
                                                        <!-- bookmark-x -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-x" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z"></path>
                                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                                                        </svg>
                                                        <span>Spam Messages</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="nav-link" data-toggle="tab" data-target="#trash-bin" aria-selected="false" role="tab" tabindex="-1">
                                                        <!-- trash -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                                        </svg>
                                                        <span>Trash Bin</span>
                                                    </button>
                                                </li>
                                            </ul><!-- .nav -->
                                        </div><!-- .dropdown-menu -->
                                    </li>
                                </div>
                            </div>
                            <!-- Recent Chats -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="messages" role="tabpanel">
                                    <div class="bg-light rounded search-bar">
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button id="button-addon2" type="submit" class="btn"><i class="bi bi-search"></i></button>
                                        </div>
                                        <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                                        </div>
                                    </div>
                                    <div class="scrollbar-y chat-box-six2 cqh-40">
                                        <ul class="nav nav-tabs nav-tabs-vertical customtab nav-justified" role="tablist">
                                            <li class="nav-item"> 
                                                <a class="nav-link fade active show p-0" data-toggle="tab" href="#first" role="tab">
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
                                                <a class="nav-link fade show p-0" data-toggle="tab" href="#" role="tab">
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
                        <div class="tab-pane fade show active" id="first" role="tabpanel">
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
                                    <div class="scrollbar-y chat-box-six cqh-39">
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

                                        <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                            <div>
                                                <a class="ms-15 status-success avatar avatar-lg" href="#"><img class="bg-danger-light rounded-circle" src="{{ asset('admin-assets/media/avatar/avatar-2.png') }}" alt="..."></a>
                                            </div>
                                            <div>
                                                <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                    <p class="mb-0 p-2">is there new product arrived?</p>
                                                </div>
                                                <div class="chat-comment d-table max-w-p70 bg-light mb-15 px-15 py-10 rounded10 bter-0">
                                                    <p class="mb-0 p-2">and when i can get my delivery... it’s being late almost</p>
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
                                                    <p class="mb-0 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <p class="text-muted mb-15">2 minutes ago</p>
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
        <div class="modal modal-xl fade" id="modal-right" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body cqh-30">
                        <form>
                            <div class="form-group-row">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="addquestion">Question/s</label>
                                            <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                                        </div>
                                        <div id="add-container"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="addresponse">Responses</label>
                                            <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
                                        </div>
                                        <div id="add-container2"></div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center mb-3">
                                        <button id="add_data" class="btn btn-success  btn-icon float-right"  type="button"><i class="bi bi-plus-lg"></i></button>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="addtag" class="form-label">Tag</label>
                                            <input type="text" name="addtag" id="addtag2" class="tags form-control" value="General, Informational, Specific" data-role="tagsinput"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid gap-3">
                                            <label class="form-label">For</label>
                                            <div class="col d-inline-flex"> 
                                                <div class="col-2">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" checked="checked" value="IT"> IT
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="CS"> CS
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="ACT"> ACT
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

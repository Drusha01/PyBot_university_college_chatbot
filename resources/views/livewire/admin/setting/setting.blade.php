<div>
  <main id="main" class="main">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Setting</li>
        </ol>
      </nav>
    </div>

    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12 col-12">
            <div class="cqh-32">
              <div class="row">
                <ul class="nav nav-tabs nav-tabs-vertical-custom col-md-2 col-sm-12 pr-0" id="v-tabs-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active rounded-left" id="v-tabs-general-tab" data-toggle="tab" href="#v-tabs-general" role="tab" aria-controls="v-tabs-general" aria-selected="true" wire:ignore.self>General</a>
                  </li>
                  <li class="nav-item wrap-text" role="presentation">
                    <a class="nav-link  rounded-left" id="cms-tab" data-toggle="tab" href="#cms" role="tab" aria-controls="cms" aria-selected="false" wire:ignore.self>Content Management System</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link rounded-left" id="system-assets-tab" data-toggle="tab" href="#system-assets" role="tab" aria-controls="system-assets" aria-selected="false" wire:ignore.self>System Assets</a>
                  </li>
                </ul>

                <div class="tab-content overflow-auto cqh-30 col-md-10 col-sm-12" id="v-tabs-tabContent">
                  <div class="tab-pane fade show active" id="v-tabs-general" role="tabpanel" aria-labelledby="v-tabs-general-tab" tabindex="0" wire:ignore.self>
                    <div class="row">
                      <div class="col-12 ">
                        <details open>
                          <summary><h4 class="">My Notifications</h4></summary>
                            <div class="content border-top">
                              <form action="">
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="notif_when">Notify me when</label>
                                      <div class="col-12">
                                        <div class="col-12">
                                          <label class="form-check-label" for="check1">
                                            <input class="form-check-input mr-2" type="checkbox" id="check1">
                                            Active on Contact
                                          </label>
                                        </div>
                                        <div class="col-12">
                                          <label class="form-check-label" for="check2">
                                            <input class="form-check-input mr-2" type="checkbox" id="check2">
                                            Change of Access roles
                                          </label>
                                        </div>
                                        <div class="col-12">
                                          <label class="form-check-label" for="check3">
                                            <input class="form-check-input mr-2" type="checkbox" id="check3">
                                            New User has initiate a chat
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <fieldset class="checkbox-switch">
                                      <legend class="col-6 legend-left">Email Notifications</legend>
                                      <input type="checkbox" id="checkbox-1"> 
                                      <label for="checkbox-1" class="checkbox-right"></label>
                                    </fieldset>
                                    <fieldset class="checkbox-switch">
                                      <legend class="col-6 legend-left">System Notifications</legend>
                                      <input type="checkbox" id="checkbox-2"> 
                                      <label for="checkbox-2" class="checkbox-right"></label>
                                    </fieldset>
                                  </div>
                                </div>
                              </form>
                            </div>
                        </details>
                      </div>
                      
                      <div class="col-12">
                        <details>
                          <summary><h4 class="">My Settings</h4></summary>
                            <div class="content border-top">
                              <form action="">
                                <div class="row">
                                  <div class="col-10">
                                    <label for="mode">Appearance</label>
                                  </div>
                                  <div class="col-2">
                                    <select class="form-control form-control-sm" name="mode" id="">
                                      <option value="">Light</option>
                                      <option value="">Dark</option>
                                    </select>
                                  </div>
                                </div>
                              </form>
                            </div>
                        </details>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="system-assets" role="tabpanel" aria-labelledby="system-assets-tab" tabindex="0" wire:ignore.self>
                    <div class="row">
                      <div class="col-12 ">
                        <details open>
                          <summary><h4 class="">Manage System Asset</h4></summary>
                          <div class="content border-top">
                            <div class="row">
                              <div class="col-12 mb-20">
                                <div class="row">
                                  <div class="col-md-4 col-sm-12 mb-3">
                                    <!-- Image preview -->
                                    <img class="w-75" id="logoPreview" src="{{ asset('storage/content/system_asset/'.$system_asset_logo) }}" alt="System Logo">
                                  </div>
                                  <div class="col-md-8 col-sm-12">
                                    @if(isset($system_asset['system_asset_id']))
                                      <form wire:submit.prevent="edit_system_assets({{$system_asset['system_asset_id']}})">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="systemName">System Name:</label>
                                                <input class="form-control form-control-sm" wire:model.defer="system_asset.system_asset_name" type="text" required>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="systemLogo">System Logo:</label> 
                                                <input class="form-control form-control-sm form-control-file"  wire:model.defer="system_asset.system_asset_logo"  type="file" accept="image/*" >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="col-md-1 sticky-bottom">
                                          <button type="submit" class="btn btn-primary mt-3" >Save</button>
                                        </div>
                                      </form>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </details>
                      </div>
                    </div>
                  </div>
                  
                  <div class="tab-pane fade " id="cms" role="tabpanel" aria-labelledby="cms-tab" tabindex="0" wire:ignore.self>
                    <div class="row">
                      <div class="col-12">
                        <details open>
                          <summary><h4 class="">Page Assets</h4></summary>
                            <div class="content border-top">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item active" role="presentation">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">Home</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">About Us</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">Academic Programs</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="admission-tab" data-toggle="tab" href="#admission" role="tab" aria-controls="admission" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">Admission</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">FAQ/Forums</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="carousel-tab" data-toggle="tab" href="#carousel" role="tab" aria-controls="carousel" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">Carousel</a>
                                </li>
                               
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="false" wire:ignore.self wire:click="active_page(' ')">Faculty and Staff</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <!-- HOME TAB -->
                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab"  wire:ignore.self> 
                                  <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addHomeModal">Add Home</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="homeTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                        <tr>
                                          <th>Section</th>
                                          <th>Description</th>
                                          <th>Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Home Section</td>
                                          <td>Static content for the Home section goes here.</td>
                                          <td>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#editHomeModal">Edit</button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteHomeModal">Delete</button>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>                                  
    
                                  <div class="modal fade" id="addHomeModal" tabindex="-1" role="dialog" aria-labelledby="addHomeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addHomeModalLabel">Add Home Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="form-group">
                                              <label for="homeSectionContent">Title:</label>
                                              <input type="text" class="form-control form-control-sm" id="homeSectionContent" placeholder="Enter Title for the Home section">
                                            </div>
                                            <div class="form-group">
                                              <label for="homeSectionContent">Content:</label>
                                              <input type="text" class="form-control form-control-sm" id="homeSectionContent" placeholder="Enter content for the Home section">
                                            </div>
                                            <button type="submit" class="btn btn-success">Save</button>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade" id="editHomeModal" tabindex="-1" role="dialog" aria-labelledby="editHomeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editHomeModalLabel">Edit Home Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="form-group">
                                              <label for="editHomeSectionContent">Title:</label>
                                              <input type="text" class="form-control form-control-sm" id="editHomeSectionContent" value="Current content goes here">
                                            </div>
                                            <div class="form-group">
                                              <label for="editHomeSectionContent">Content:</label>
                                              <input type="text" class="form-control form-control-sm" id="editHomeSectionContent" value="Current content goes here">
                                            </div>
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal fade" id="deleteHomeModal" tabindex="-1" role="dialog" aria-labelledby="deleteHomeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteHomeModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Are you sure you want to delete the Home section?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- HOME TAB END -->
              
                                <!-- ABOUT US TAB -->
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab"  wire:ignore.self >
                                  <button class="btn btn-primary float-right" wire:click="edit_about_us_content()">Edit Page About us</button>
                                  <button class="btn btn-primary float-right" wire:click="add_about_us()">Add About Us</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="aboutUsTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                        <tr>
                                          @foreach ($about_us_filter as $item => $value)
                                              @if($value)
                                                  <th >{{$item}}</th>
                                              @endif
                                          @endforeach
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @forelse ($about_us_data  as $item => $value)
                                            <tr>
                                              @if($about_us_filter['#'])
                                                  <td>{{ $loop->index+1 }}</td>
                                              @endif
                                              @if($about_us_filter['Logo'])
                                                  <td>
                                                      <img src="{{asset('storage/content/about_us/'.$value->about_us_logo)}}" alt="" style="height: 200px; ">
                                                  </td>
                                              @endif
                                              @if($about_us_filter['Header'])
                                                  <td>
                                                      <div>
                                                          {{$value->about_us_header}}
                                                      </div>
                                                  </td>
                                              @endif
                                              @if($about_us_filter['Content'])
                                                  <td class="align-middle">
                                                      <p>{{$value->about_us_content}}</p>
                                                  </td>
                                              @endif
                                              @if($about_us_filter['Order'])
                                                  <td class="align-middle"> 
                                                      <div class="btn-group-vertical btn-group-sm " role="group" aria-label="Basic example">
                                                          <button type="button" class="btn btn-outline-dark" wire:click="move_up_about_us({{$value->about_us_order}})"><i class="bx bx-up-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                          <button type="button" class="btn btn-outline-dark" wire:click="move_down_about_us({{$value->about_us_order}})"><i class="bx bx-down-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                      </div>
                                                  </td>
                                              @endif
                                              @if($about_us_filter['Action'])
                                                  <td class="align-middle"> 
                                                      @if($access_role['R']==0)
                                                      <button class="btn btn-primary" wire:click="view_about_us({{$value->about_us_id}})" >View</button>
                                                      @endif
                                                      @if($access_role['U']==1)
                                                      <button class="btn btn-success" wire:click="edit_about_us({{$value->about_us_id}})" >Edit</button>
                                                      @endif
                                                      @if($access_role['D']==1)
                                                      <button class="btn btn-danger" wire:click="delete_about_us({{$value->about_us_id}})">Delete</button>
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
                                  <div class="modal fade" id="editAboutUsPageModal" tabindex="-1" role="dialog" aria-labelledby="editAboutUsPageModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editAboutUsPageModalLabel">Edit About Us Page Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($about_us_page['about_us_page_id'])
                                          <form wire:submit.prevent="save_edit_about_us_content({{$about_us_page['about_us_page_id']}})">
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Content:</label>
                                                <textarea  type="text" class="form-control" wire:model.defer="about_us_page.about_us_page_content" required></textarea>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-success">
                                                  Save
                                              </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Add About Us Modal -->
                                  <div class="modal fade" id="addAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="addAboutUsModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addAboutUsModalLabel">Add About Us Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form wire:submit.prevent="save_add_about_us()">
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Image:</label><br>
                                              <input  type="file" class="form-control" wire:model.defer="about_us.about_us_logo" accept="image/jpg"required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Header:</label>
                                              <input  type="text" class="form-control" wire:model.defer="about_us.about_us_header" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Content:</label>
                                              <textarea  type="text" class="form-control" wire:model.defer="about_us.about_us_content" required></textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-primary">
                                                  Add
                                              </button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="modal fade" id="editAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="editAboutUsModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editAboutUsModalLabel">Edit About Us Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($about_us['about_us_id'])
                                          <form wire:submit.prevent="save_edit_about_us({{$about_us['about_us_id']}})">
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Logo:</label><br>
                                                <input  type="file" class="form-control" wire:model.defer="about_us.about_us_logo" accept="image/jpg">
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Header:</label>
                                                <input  type="text" class="form-control" wire:model.defer="about_us.about_us_header" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Content:</label>
                                                <textarea  type="text" class="form-control" wire:model.defer="about_us.about_us_content" required></textarea>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-success">
                                                  Save
                                              </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete About Us Modal -->
                                  <div class="modal fade" id="deleteAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="deleteAboutUsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteAboutUsModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($about_us['about_us_id'])
                                          <form wire:submit.prevent="save_delete_about_us({{$about_us['about_us_id']}})">
                                            <div class="modal-body">
                                              <p>Are you sure you want to delete the About Us section?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                <button type="submit" class="btn btn-success">
                                                    Save
                                                </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- ABOUT US TAB END -->

                                <!-- ACADEMIC TAB -->
                                <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab"  wire:ignore.self>
                                  <button class="btn btn-primary float-right" wire:click="add_academic()">Add Academic</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="academicTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                      <tr>
                                          @foreach ($academic_filter as $item => $value)
                                              @if($value)
                                                  <th >{{$item}}</th>
                                              @endif
                                          @endforeach
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @forelse ($academic_data  as $item => $value)
                                            <tr>
                                              @if($academic_filter['#'])
                                                  <td>{{ $loop->index+1 }}</td>
                                              @endif
                                              @if($academic_filter['Logo'])
                                                  <td>
                                                      <img src="{{asset('storage/content/academic/'.$value->academic_logo)}}" alt="" style="height: 200px; ">
                                                  </td>
                                              @endif
                                              @if($academic_filter['Header'])
                                                  <td>
                                                      <div>
                                                          {{$value->academic_header}}
                                                      </div>
                                                  </td>
                                              @endif
                                              @if($academic_filter['Content'])
                                                  <td class="align-middle">
                                                      <p>{{$value->academic_content}}</p>
                                                  </td>
                                              @endif
                                              @if($academic_filter['Order'])
                                                  <td class="align-middle"> 
                                                      <div class="btn-group-vertical btn-group-sm " role="group" aria-label="Basic example">
                                                          <button type="button" class="btn btn-outline-dark" wire:click="move_up_academic({{$value->academic_order}})"><i class="bx bx-up-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                          <button type="button" class="btn btn-outline-dark" wire:click="move_down_academic({{$value->academic_order}})"><i class="bx bx-down-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                      </div>
                                                  </td>
                                              @endif
                                              @if($academic_filter['Action'])
                                                  <td class="align-middle"> 
                                                      @if($access_role['R']==0)
                                                      <button class="btn btn-primary" wire:click="view_academic({{$value->academic_id}})" >View</button>
                                                      @endif
                                                      @if($access_role['U']==1)
                                                      <button class="btn btn-success" wire:click="edit_academic({{$value->academic_id}})" >Edit</button>
                                                      @endif
                                                      @if($access_role['D']==1)
                                                      <button class="btn btn-danger" wire:click="delete_academic({{$value->academic_id}})">Delete</button>
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


                                  <div class="modal fade" id="addAcademicModal" tabindex="-1" role="dialog" aria-labelledby="addAcademicModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addAcademicModalLabel">Add Academic Programs Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form wire:submit.prevent="save_add_academic()">
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Image:</label><br>
                                              <input  type="file" class="form-control" wire:model.defer="academic.academic_logo" accept="image/jpg"required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Header:</label>
                                              <input  type="text" class="form-control" wire:model.defer="academic.academic_header" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Content:</label>
                                              <textarea  type="text" class="form-control" wire:model.defer="academic.academic_content" required></textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-primary">
                                                  Add
                                              </button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="modal fade" id="editAcademicModal" tabindex="-1" role="dialog" aria-labelledby="editAcademicModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editAcademicModalLabel">Edit Academic Programs Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($academic['academic_id'])
                                          <form wire:submit.prevent="save_edit_academic({{$academic['academic_id']}})">
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Logo:</label><br>
                                                <input  type="file" class="form-control" wire:model.defer="academic.academic_logo" accept="image/jpg">
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Header:</label>
                                                <input  type="text" class="form-control" wire:model.defer="academic.academic_header" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Content:</label>
                                                <textarea  type="text" class="form-control" wire:model.defer="academic.academic_content" required></textarea>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-success">
                                                  Save
                                              </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete About Us Modal -->
                                  <div class="modal fade" id="deleteAcademicModal" tabindex="-1" role="dialog" aria-labelledby="deleteAcademicModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteAcademicModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($academic['academic_id'])
                                          <form wire:submit.prevent="save_delete_academic({{$academic['academic_id']}})">
                                            <div class="modal-body">
                                              <p>Are you sure you want to delete the academic program section?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- ACADEMIC END TAB -->

                                <!-- Admission Tab -->
                                <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab"  wire:ignore.self >
                                  <button class="btn btn-primary float-right" wire:click="add_admission()">Add Admission</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="admissionTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                      <tr>
                                          @foreach ($admission_filter as $item => $value)
                                              @if($value)
                                                  <th >{{$item}}</th>
                                              @endif
                                          @endforeach
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @forelse ($admission_data  as $item => $value)
                                            <tr>
                                              @if($admission_filter['#'])
                                                  <td>{{ $loop->index+1 }}</td>
                                              @endif
                                              @if($admission_filter['Logo'])
                                                  <td>
                                                      <img src="{{asset('storage/content/admission/'.$value->admission_logo)}}" alt="" style="height: 200px; ">
                                                  </td>
                                              @endif
                                              @if($admission_filter['Header'])
                                                  <td>
                                                      <div>
                                                          {{$value->admission_header}}
                                                      </div>
                                                  </td>
                                              @endif
                                              @if($admission_filter['Content'])
                                                  <td class="align-middle">
                                                      <p>{{$value->admission_content}}</p>
                                                  </td>
                                              @endif
                                              @if($admission_filter['Order'])
                                                  <td class="align-middle"> 
                                                      <div class="btn-group-vertical btn-group-sm " role="group" aria-label="Basic example">
                                                          <button type="button" class="btn btn-outline-dark" wire:click="move_up_admission({{$value->admission_order}})"><i class="bx bx-up-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                          <button type="button" class="btn btn-outline-dark" wire:click="move_down_admission({{$value->admission_order}})"><i class="bx bx-down-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                      </div>
                                                  </td>
                                              @endif
                                              @if($admission_filter['Action'])
                                                  <td class="align-middle"> 
                                                      @if($access_role['R']==0)
                                                      <button class="btn btn-primary" wire:click="view_admission({{$value->admission_id}})" >View</button>
                                                      @endif
                                                      @if($access_role['U']==1)
                                                      <button class="btn btn-success" wire:click="edit_admission({{$value->admission_id}})" >Edit</button>
                                                      @endif
                                                      @if($access_role['D']==1)
                                                      <button class="btn btn-danger" wire:click="delete_admission({{$value->admission_id}})">Delete</button>
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


                                  <div class="modal fade" id="addadmissionModal" tabindex="-1" role="dialog" aria-labelledby="addadmissionModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addadmissionModalLabel">Add admission Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form wire:submit.prevent="save_add_admission()">
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Image:</label><br>
                                              <input  type="file" class="form-control" wire:model.defer="admission.admission_logo" accept="image/jpg"required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Header:</label>
                                              <input  type="text" class="form-control" wire:model.defer="admission.admission_header" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Content:</label>
                                              <textarea  type="text" class="form-control" wire:model.defer="admission.admission_content" required></textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-primary">
                                                  Add
                                              </button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                  
                                  <div class="modal fade" id="editadmissionModal" tabindex="-1" role="dialog" aria-labelledby="editadmissionModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editadmissionModalLabel">Edit admission Programs Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($admission['admission_id'])
                                          <form wire:submit.prevent="save_edit_admission({{$admission['admission_id']}})">
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Logo:</label><br>
                                                <input  type="file" class="form-control" wire:model.defer="admission.admission_logo" accept="image/jpg">
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Header:</label>
                                                <input  type="text" class="form-control" wire:model.defer="admission.admission_header" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Content:</label>
                                                <textarea  type="text" class="form-control" wire:model.defer="admission.admission_content" required></textarea>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-success">
                                                  Save
                                              </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete About Us Modal -->
                                  <div class="modal fade" id="deleteadmissionModal" tabindex="-1" role="dialog" aria-labelledby="deleteadmissionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteadmissionModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($admission['admission_id'])
                                          <form wire:submit.prevent="save_delete_admission({{$admission['admission_id']}})">
                                            <div class="modal-body">
                                              <p>Are you sure you want to delete the admission section?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Admission END Tab -->

                                <!-- FAQ/Forums Tab -->
                                <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab"  wire:ignore.self >
                                  <button class="btn btn-primary float-right" wire:click="add_faq()">Add FAQ</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="faqTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                          <tr>
                                          @foreach ($faq_filter as $item => $value)
                                              @if($value)
                                                  <th >{{$item}}</th>
                                              @endif
                                          @endforeach
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($faq_data  as $item => $value)
                                            <tr>
                                                @if($faq_filter['#'])
                                                    <td>{{ $loop->index+1 }}</td>
                                                @endif
                                                @if($faq_filter['Question'])
                                                    <td class="align-left">    
                                                        <p>{{$value->faq_question}}</p>
                                                    </td>
                                                @endif
                                                @if($faq_filter['Answer'])
                                                    <td class="align-left">
                                                        <p>{{$value->faq_answer}}</p>
                                                    </td>
                                                @endif
                                                @if($faq_filter['Order'])
                                                    <td class="align-middle"> 
                                                        <div class="btn-group-vertical btn-group-sm " role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-outline-dark" wire:click="move_up_faq({{$value->faq_order}})"><i class="bx bx-up-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                            <button type="button" class="btn btn-outline-dark" wire:click="move_down_faq({{$value->faq_order}})"><i class="bx bx-down-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                        </div>
                                                    </td>
                                                @endif
                                                @if($faq_filter['Action'])
                                                    <td class="align-middle"> 
                                                        @if($access_role['R']==0 && 0)
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ViewCarouselModal" >View</button>
                                                        @endif
                                                        @if($access_role['U']==1)
                                                        <button class="btn btn-success" wire:click="edit_faq({{$value->faq_id}})" >Edit</button>
                                                        @endif
                                                        @if($access_role['D']==1)
                                                        <button class="btn btn-danger" wire:click="delete_faq({{$value->faq_id}})">Delete</button>
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
                                  <!-- Add FAQ Modal -->
                                  <div class="modal fade" id="AddFAQModal" tabindex="-1" role="dialog" aria-labelledby="AddFAQModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="AddFAQModalLabel">Add FAQ/Forums Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form wire:submit.prevent="save_add_faq()">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="addRoomCapacity">Question:</label>
                                                    <textarea  type="text" class="form-control" wire:model.defer="faq.faq_question" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="addRoomCapacity">Answer:</label>
                                                    <textarea  type="text" class="form-control" wire:model.defer="faq.faq_answer" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                <button type="submit" class="btn btn-primary" >
                                                    Add
                                                </button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Edit FAQ Modal -->
                                  <div class="modal fade" id="EditFAQModal" tabindex="-1" role="dialog" aria-labelledby="EditFAQModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="EditFAQModalLabel">Edit FAQ/Forums Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class modal-body>
                                        @if($faq['faq_id'])
                                          <form wire:submit.prevent="save_edit_faq({{$faq['faq_id']}})">
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <label for="addRoomCapacity">Question:</label>
                                                      <textarea  type="text" class="form-control" wire:model.defer="faq.faq_question" required></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="addRoomCapacity">Answer:</label>
                                                      <textarea  type="text" class="form-control" wire:model.defer="faq.faq_answer" required></textarea>
                                                  </div>
                                                
                                              </div>
                                              <hr>
                                              <div class="modal-footer">
                                                  <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                  <button type="submit" class="btn btn-success">
                                                      Save
                                                  </button>
                                              </div>
                                          </form>
                                        @endif
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete FAQ Modal -->
                                  <div class="modal fade" id="DeleteFAQModal" tabindex="-1" role="dialog" aria-labelledby="DeleteFAQModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="DeleteFAQModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if($faq['faq_id'])
                                          <form wire:submit.prevent="confirm_delete_faq({{$faq['faq_id']}})">
                                              <div class="modal-body">
                                              <p>Are you sure you want to delete this faq?</p>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button"  class="btn btn-secondary"data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                  <button type="submit" class="btn btn-danger">
                                                      Delete
                                                  </button>
                                              </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- FAQ/Forums end Tab -->

                                <!-- Carousel Tab -->
                                <div class="tab-pane fade" id="carousel" role="tabpanel" aria-labelledby="carousel-tab"  wire:ignore.self>
                                  <button class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#AddCarouselModal" >Add Carousel</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="carouselTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                          <tr>
                                            @foreach ($carousel_filter as $item => $value)
                                                @if($value)
                                                    <th >{{$item}}</th>
                                                @endif
                                            @endforeach
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @forelse ($carousel_data as $item => $value)
                                              <tr>
                                                  @if($carousel_filter['#'])
                                                      <td>{{ $loop->index+1 }}</td>
                                                  @endif
                                                  @if($carousel_filter['Carousel content'])
                                                      <td>
                                                          <div >
                                                              {{$value->carousel_header_title}}
                                                          </div>
                                                          <br>
                                                          <img src="{{asset('storage/content/carousel/'.$value->carousel_content_image)}}" alt="" style="height: 200px; width:200px; ">
                                                      </td>
                                                  @endif
                                                  @if($carousel_filter['Paragraphs'])
                                                      <td class="align-middle">
                                                          <p>{{$value->carousel_paragraph_paragraph}}</p>
                                                      </td>
                                                  @endif
                                                  @if($carousel_filter['Order'])
                                                      <td class="align-middle"> 
                                                          <div class="btn-group-vertical btn-group-sm " role="group" aria-label="Basic example">
                                                              <button type="button" class="btn btn-outline-dark" wire:click="move_up_carousel({{$value->carousel_id}})"><i class="bx bx-up-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                              <button type="button" class="btn btn-outline-dark" wire:click="move_down_carousel({{$value->carousel_id}})"><i class="bx bx-down-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                          </div>
                                                      </td>
                                                  @endif
                                                  @if($carousel_filter['Action'])
                                                      <td class="align-middle"> 
                                                          @if($access_role['R']==0 && 0)
                                                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ViewCarouselModal" >View</button>
                                                          @endif
                                                          @if($access_role['U']==1)
                                                          <button class="btn btn-success" wire:click="edit_carousel({{$value->carousel_id}})" >Edit</button>
                                                          @endif
                                                          @if($access_role['D']==1)
                                                          <button class="btn btn-danger" wire:click="delete_carousel({{$value->carousel_id}})">Delete</button>
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
                                  <!-- Add Carousel Modal -->
                                  <div class="modal fade" id="AddCarouselModal" tabindex="-1" role="dialog" aria-labelledby="AddCarouselModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="AddCarouselModalLabel">Add Carousel Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form wire:submit.prevent="add_carousel()">
                                          <div class="modal-body">
                                              <div class="form-group">
                                                  <label for="addRoomCapacity">Carousel Header:</label>
                                                  <input  type="text" class="form-control" wire:model.defer="carousel_header_title" required>
                                              </div>
                                              <div class="form-group">
                                                  <label for="addRoomCapacity">Paragraph:</label>
                                                  <textarea  type="text" class="form-control" wire:model.defer="carousel_paragraph_paragraph" required></textarea>
                                              </div>
                                              <div class="form-group">
                                                  <label for="addRoomCapacity">Carousel Background Image:</label><br>
                                                  <input  type="file" class="form-control" wire:model.defer="carousel_content_image" accept="image/jpg"required>
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary"data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-primary">
                                                  Add
                                              </button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Edit Carousel Modal -->
                                  <div class="modal fade" id="EditCarouselModal" tabindex="-1" role="dialog" aria-labelledby="EditCarouselModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="EditCarouselModalLabel">Edit Carousel Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if(isset($edit_carousel_data))
                                          <form wire:submit.prevent="save_edit_carousel({{$carousel_id}})">
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <label for="addRoomCapacity">Carousel Header:</label>
                                                      <input  type="text" class="form-control" wire:model.defer="carousel_header_title" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="addRoomCapacity">Paragraph:</label>
                                                      <textarea  type="text" class="form-control" wire:model.defer="carousel_paragraph_paragraph" required></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="addRoomCapacity">Carousel Background Image:</label><br>
                                                      <input  type="file" class="form-control" wire:model.defer="carousel_content_image" id=carousel-{{$carousel_image_id}} >
                                                  </div>
                                              </div>
                                              <hr>
                                              <div class="modal-footer">
                                                  <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                  <button type="submit" class="btn btn-primary">
                                                      Save
                                                  </button>
                                              </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete Carousel Modal -->
                                  <div class="modal fade" id="deleteCarouselModal" tabindex="-1" role="dialog" aria-labelledby="deleteCarouselModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteCarouselModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Are you sure you want to delete the Carousel section?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Carousel end Tab -->

                                <!-- Programs Tab -->
                                <div class="tab-pane fade" id="programs" role="tabpanel" aria-labelledby="programs-tab"  wire:ignore.self>
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addProgramsModal">Add Programs</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="programsTable" style="min-width: 100%;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>Section</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Programs Section</td>
                                            <td>Title</td>
                                            <td>Static content for the Programs section goes here.</td>
                                            <td>
                                              <button class="btn btn-info" data-toggle="modal" data-target="#editProgramsModal">Edit</button>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteProgramsModal">Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  <!-- Add Programs Modal -->
                                  <div class="modal fade" id="addProgramsModal" tabindex="-1" role="dialog" aria-labelledby="addProgramsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addProgramsModalLabel">Add Programs Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="form-group">
                                              <label for="addProgramsImage">Image:</label>
                                              <input type="file" class="form-control form-control-sm form-control-file" id="addProgramsImage">
                                            </div>
                                            <div class="form-group">
                                              <label for="addProgramsFullName">Full Name:</label>
                                              <input type="text" class="form-control form-control-sm" id="addProgramsFullName" placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                              <label for="addProgramsPosition">Position:</label>
                                              <input type="text" class="form-control form-control-sm" id="addProgramsPosition" placeholder="Enter position">
                                            </div>
                                            <div class="form-group">
                                              <label for="addProgramsTitle">Title:</label>
                                              <input type="text" class="form-control form-control-sm" id="addProgramsTitle" placeholder="Enter title">
                                            </div>
                                            <div class="form-group">
                                              <label for="addProgramsDescription">Description:</label>
                                              <textarea class="form-control form-control-sm" id="addProgramsDescription" rows="4" placeholder="Enter description"></textarea>
                                            </div>
                                            <!--  add more form fields as needed -->

                                            <button type="submit" class="btn btn-success">Save</button>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Edit Programs Modal -->
                                  <div class="modal fade" id="editProgramsModal" tabindex="-1" role="dialog" aria-labelledby="editProgramsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editProgramsModalLabel">Edit Programs Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <div class="form-group">
                                              <label for="editProgramsTitle">Title:</label>
                                              <input type="text" class="form-control form-control-sm" id="editProgramsTitle" placeholder="Edit title">
                                            </div>
                                            <div class="form-group">
                                              <label for="editProgramsDescription">Description:</label>
                                              <textarea class="form-control form-control-sm" id="editProgramsDescription" rows="4" placeholder="Edit description"></textarea>
                                            </div>
                                            <!--  add more form fields for editing as needed -->

                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete Programs Modal -->
                                  <div class="modal fade" id="deleteProgramsModal" tabindex="-1" role="dialog" aria-labelledby="deleteProgramsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteProgramsModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Are you sure you want to delete the Programs section?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Programs end Tab -->

                                <!-- Faculty and Staff Tab -->
                                <div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab"  wire:ignore.self >
                                  <button class="btn btn-primary float-right" wire:click="add_faculty()">Add Faculty</button>
                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered mt-3" id="facultyTable" style="min-width: 100%;">
                                      <thead class="thead-dark">
                                        <tr>
                                          @foreach ($faculty_filter as $item => $value)
                                            @if($value)
                                              <th >{{$item}}</th>
                                            @endif
                                          @endforeach
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @forelse ($faculty_data as $item => $value)
                                              <tr>
                                                  @if($faculty_filter['#'])
                                                      <td>{{ $loop->index+1 }}</td>
                                                  @endif
                                                  @if($faculty_filter['Image'])
                                                    <td>
                                                        <img src="{{asset('storage/content/faculty/'.$value->faculty_picture)}}" alt="" style="height: 200px; width:200px; ">
                                                    </td>
                                                  @endif
                                                  @if($faculty_filter['Fullname'])
                                                      <td class="align-middle">
                                                          <p>{{$value->faculty_fullname}}</p>
                                                      </td>
                                                  @endif
                                                  @if($faculty_filter['Position'])
                                                      <td class="align-middle">
                                                          <p>{{$value->faculty_position}}</p>
                                                      </td>
                                                  @endif
                                                  @if($faculty_filter['Title'])
                                                      <td class="align-middle">
                                                          <p>{{$value->faculty_title}}</p>
                                                      </td>
                                                  @endif
                                                  @if($faculty_filter['Content'])
                                                      <td class="align-middle">
                                                          <p>{{$value->faculty_description}}</p>
                                                      </td>
                                                  @endif
                                                  @if($faculty_filter['Order'])
                                                      <td class="align-middle"> 
                                                          <div class="btn-group-vertical btn-group-sm " role="group" aria-label="Basic example">
                                                              <button type="button" class="btn btn-outline-dark" wire:click="move_up_faculty({{$value->faculty_id}})"><i class="bx bx-up-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                              <button type="button" class="btn btn-outline-dark" wire:click="move_down_faculty({{$value->faculty_id}})"><i class="bx bx-down-arrow-alt" style="font-size:20px; vertical-align: middle;" ></i></button>
                                                          </div>
                                                      </td>
                                                  @endif
                                                  @if($faculty_filter['Action'])
                                                      <td class="align-middle"> 
                                                          @if($access_role['R']==0 && 0)
                                                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ViewfacultyModal" >View</button>
                                                          @endif
                                                          @if($access_role['U']==1)
                                                          <button class="btn btn-success" wire:click="edit_faculty({{$value->faculty_id}})" >Edit</button>
                                                          @endif
                                                          @if($access_role['D']==1)
                                                          <button class="btn btn-danger" wire:click="delete_faculty({{$value->faculty_id}})">Delete</button>
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
                                  <!-- Add Faculty Modal -->
                                  <div class="modal fade" id="addFacultyModal" tabindex="-1" role="dialog" aria-labelledby="addFacultyModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addFacultyModalLabel">Add Faculty and Staff Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form wire:submit.prevent="save_add_faculty()">
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Image:</label><br>
                                              <input  type="file" class="form-control" wire:model.defer="faculty.faculty_picture" accept="image/jpg"required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Fullname:</label>
                                              <input  type="text" class="form-control" wire:model.defer="faculty.faculty_fullname" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Position:</label>
                                              <input  type="text" class="form-control" wire:model.defer="faculty.faculty_position" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Title:</label>
                                              <input  type="text" class="form-control" wire:model.defer="faculty.faculty_title" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="addRoomCapacity">Content:</label>
                                              <textarea  type="text" class="form-control" wire:model.defer="faculty.faculty_description" required></textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                              <button type="submit" class="btn btn-primary">
                                                  Add
                                              </button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Edit Faculty Modal -->
                                  <div class="modal fade" id="editFacultyModal" tabindex="-1" role="dialog" aria-labelledby="editFacultyModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="editFacultyModalLabel">Edit Faculty and Staff Section</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if(isset($faculty['faculty_id']))
                                          <form wire:submit.prevent="save_edit_faculty({{$faculty['faculty_id']}})">
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Image:</label><br>
                                                <input  type="file" class="form-control" wire:model.defer="faculty.faculty_picture" accept="image/jpg">
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Fullname:</label>
                                                <input  type="text" class="form-control" wire:model.defer="faculty.faculty_fullname" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Position:</label>
                                                <input  type="text" class="form-control" wire:model.defer="faculty.faculty_position" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Title:</label>
                                                <input  type="text" class="form-control" wire:model.defer="faculty.faculty_title" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="addRoomCapacity">Content:</label>
                                                <textarea  type="text" class="form-control" wire:model.defer="faculty.faculty_description" required></textarea>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                <button type="submit" class="btn btn-success">
                                                    Save
                                                </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Delete Faculty Modal -->
                                  <div class="modal fade" id="deleteFacultyModal" tabindex="-1" role="dialog" aria-labelledby="deleteFacultyModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteFacultyModalLabel">Confirm Deletion</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        @if(isset($faculty['faculty_id']))
                                          <form wire:submit.prevent="save_delete_faculty({{$faculty['faculty_id']}})">
                                            <div class="modal-body">
                                              <p>Are you sure you want to delete the Faculty?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"  class="btn btn-secondary "data-bs-dismiss="modal" id='btn_close1'>Close</button>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                          </form>
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Faculty and Staff end Tab -->
                              </div>
                            </div>
                        </details>
                      </div>
                    </div>
                  </div>

                 
                  <!-- <div class="tab-pane fade" id="v-tabs-privacy" role="tabpanel" aria-labelledby="v-tabs-privacy-tab" tabindex="0" wire:ignore.self>
                    <div class="row">
                      <div class="col-12 ">
                        <details open>
                          <summary><h4 class="">Manage Privacy</h4></summary>
                            <div class="content border-top">
                              <form action="">
                                <div class="row">
                                  <div class="col-12 mb-20">
                                    <div class="row">
                                      <div class="col-md-4 col-sm-12 mb-3">
                                        <img class="w-75" id="logoPreview" src="{{ asset('admin-assets\media\defaults\default-image.png') }}" alt="System Logo">
                                      </div>
                                      <div class="col-md-8 col-sm-12">
                                        <div class="row">
                                          <div class="col-md-5">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="systemName">System Name:</label>
                                                <input class="form-control form-control-sm" id="systemName" type="text">
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="systemLogo">System Logo:</label> 
                                                <input class="form-control form-control-sm form-control-file" id="systemLogo" type="file" accept="image/*" onchange="previewImage(this, 'logoPreview')">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="systemEmail">Email:</label>
                                                <input class="form-control form-control-sm" id="systemEmail" type="email">
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="systemContact">Contact:</label>
                                                <input class="form-control form-control-sm" id="systemContact" type="text">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                        </details>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->      
    </div>
    <script>
      function previewImage(input, previewId) {
        var imgPreview = document.getElementById(previewId);
        
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            imgPreview.src = e.target.result;
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
  </main>
</div>

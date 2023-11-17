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
            <div class="cqh-31">
              <div class="row">
                  <ul class="nav nav-tabs nav-tabs-vertical-custom col-md-2 col-sm-12 pr-0" id="v-tabs-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link rounded-left" id="v-tabs-general-tab" data-toggle="tab" href="#v-tabs-general" role="tab" aria-controls="v-tabs-general" aria-selected="false" wire:ignore.self>General</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active rounded-left" id="v-tabs-preference-tab" data-toggle="tab" href="#v-tabs-preference" role="tab" aria-controls="v-tabs-preference" aria-selected="true" wire:ignore.self>Preferences</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link rounded-left" id="v-tabs-account-tab" data-toggle="tab" href="#v-tabs-account" role="tab" aria-controls="v-tabs-account" aria-selected="false" wire:ignore.self>System Assets</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link rounded-left" id="v-tabs-privacy-tab" data-toggle="tab" href="#v-tabs-privacy" role="tab" aria-controls="v-tabs-privacy" aria-selected="false" wire:ignore.self>Privacy</a>
                    </li>
                  </ul>
                  <div class="tab-content overflow-auto cqh-30 col-md-10 col-sm-12" id="v-tabs-tabContent">
                    <div class="tab-pane fade" id="v-tabs-general" role="tabpanel" aria-labelledby="v-tabs-general-tab" tabindex="0">
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

                    <div class="tab-pane fade show active" id="v-tabs-preference" role="tabpanel" aria-labelledby="v-tabs-preference-tab" tabindex="0">
                      <div class="row">
                        <div class="col-12 ">
                          <details>
                            <summary><h4 class="">Manage Details</h4></summary>
                              <div class="content border-top">
                                <form action="">
                                  <div class="row">
                                    <div class="col-12 mb-20">
                                      <div class="row">
                                        <div class="col-md-4 col-sm-12 mb-3">
                                          <!-- Image preview -->
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
                                                  <input class="form-control form-control-sm form-control-file" id="systemLogo" type="file" accept="image/*" onchange="previewImage(this, document.getElementById('logoPreview'))">
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
                        <div class="col-12">
                          <details open>
                            <summary><h4 class="">Page Assets</h4></summary>
                              <div class="content border-top">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About Us</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false">Academic</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="admission-tab" data-toggle="tab" href="#admission" role="tab" aria-controls="admission" aria-selected="false">Admission</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="false">FAQ/Forums</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="carousel-tab" data-toggle="tab" href="#carousel" role="tab" aria-controls="carousel" aria-selected="false">Carousel</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="programs-tab" data-toggle="tab" href="#programs" role="tab" aria-controls="programs" aria-selected="false">Programs</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="false">Faculty and Staff</a>
                                  </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                  <!-- HOME TAB -->
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                    <!-- Add Home Modal -->
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
                                              <!--   add more form fields here   -->

                                              <button type="submit" class="btn btn-success">Save</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Edit Home Modal -->
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
                                              <!--  add more form fields -->

                                              <button type="submit" class="btn btn-success">Save Changes</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Delete Home Modal -->
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
                                  <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addAboutUsModal">Add About Us</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="aboutUsTable" style="min-width: 100%;">
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
                                            <td>About Us Section</td>
                                            <td>About pybot</td>
                                            <td>Static content for the About Us section goes here.</td>
                                            <td>
                                              <button class="btn btn-info" data-toggle="modal" data-target="#editAboutUsModal">Edit</button>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteAboutUsModal">Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!-- Add About Us Modal -->
                                    <div class="modal fade" id="addAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="addAboutUsModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="addAboutUsModalLabel">Add About Us Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="aboutUsContent">Title:</label>
                                                <textarea class="form-control form-control-sm" id="aboutUsContent"  placeholder="Enter Title"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="aboutUsContent">Content:</label>
                                                <textarea class="form-control form-control-sm" id="aboutUsContent"  placeholder="Enter content"></textarea>
                                              </div>
                                              <!--  add more form fields  -->

                                              <button type="submit" class="btn btn-success">Save</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Edit About Us Modal -->
                                    <div class="modal fade" id="editAboutUsModal" tabindex="-1" role="dialog" aria-labelledby="editAboutUsModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="editAboutUsModalLabel">Edit About Us Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="editAboutUsContent">Title:</label>
                                                <textarea class="form-control form-control-sm" id="editAboutUsContent"  placeholder="Edit content for About Us section"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="editAboutUsContent">Content:</label>
                                                <textarea class="form-control form-control-sm" id="editAboutUsContent"  placeholder="Edit content for About Us section"></textarea>
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
                                          <div class="modal-body">
                                            <p>Are you sure you want to delete the About Us section?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- ABOUT US TAB END -->

                                  <!-- ACADEMIC TAB -->
                                  <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab">
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addAcademicModal">Add Academic</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="academicTable" style="min-width: 100%;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>Section</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Academic Section</td>
                                            <td>Image.</td>
                                            <td>Static content for the Academic section goes here.</td>
                                            <td>
                                              <button class="btn btn-info" data-toggle="modal" data-target="#editAcademicModal">Edit</button>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteAcademicModal">Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                      <!-- Add Academic Modal -->
                                    <div class="modal fade" id="addAcademicModal" tabindex="-1" role="dialog" aria-labelledby="addAcademicModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="addAcademicModalLabel">Add Academic Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="formFileSm" class="form-label">Upload Image</label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                              </div>
                                              <div class="form-group">
                                                <label for="academicTitle">Title:</label>
                                                <input type="text" class="form-control form-control-sm" id="academicTitle" placeholder="Enter title for Academic section">
                                              </div>
                                              <div class="form-group">
                                                <label for="academicContent">Content:</label>
                                                <textarea class="form-control form-control-sm" id="academicContent" placeholder="Enter content for Academic section"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="academicButton">Button:</label>
                                                <input type="text" class="form-control form-control-sm" id="academicButton" placeholder="Enter text for button">
                                              </div>
                                              <!-- Add more form fields as needed -->
                                              <button type="submit" class="btn btn-success">Save</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Edit Academic Modal -->
                                    <div class="modal fade" id="editAcademicModal" tabindex="-1" role="dialog" aria-labelledby="editAcademicModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="editAcademicModalLabel">Edit Academic Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="formFileSm" class="form-label">Upload Image</label>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                              </div>
                                              <div class="form-group">
                                                <label for="academicTitle">Title:</label>
                                                <input type="text" class="form-control form-control-sm" id="academicTitle" placeholder="Enter title for Academic section">
                                              </div>
                                              <div class="form-group">
                                                <label for="academicContent">Content:</label>
                                                <textarea class="form-control form-control-sm" id="academicContent" placeholder="Enter content for Academic section"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="academicButton">Button:</label>
                                                <input type="text" class="form-control form-control-sm" id="academicButton" placeholder="Enter text for button">
                                              </div>
                                              <!-- Add more form fields for editing as needed -->
                                              <button type="submit" class="btn btn-success">Save Changes</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Delete Academic Modal -->
                                    <div class="modal fade" id="deleteAcademicModal" tabindex="-1" role="dialog" aria-labelledby="deleteAcademicModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="deleteAcademicModalLabel">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p>Are you sure you want to delete the Academic section?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- ACADEMIC END TAB -->

                                  <!-- Admission Tab -->
                                  <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addAdmissionModal">Add Admission</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="admissionTable" style="min-width: 100%;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>Section</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Admission Section</td>
                                            <td></td>
                                            <td>Static content for the Admission section goes here.</td>
                                            <td>
                                              <button class="btn btn-info" data-toggle="modal" data-target="#editAdmissionModal">Edit</button>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteAdmissionModal">Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!-- Add Admission Modal -->
                                    <div class="modal fade" id="addAdmissionModal" tabindex="-1" role="dialog" aria-labelledby="addAdmissionModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="addAdmissionModalLabel">Add Admission Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                  <label for="formFileSm" class="form-label">Upload Image</label>
                                                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                </div>
                                                <div class="form-group">
                                                  <label for="academicTitle">Title:</label>
                                                  <input type="text" class="form-control form-control-sm" id="academicTitle" placeholder="Enter title for Academic section">
                                                </div>
                                                <div class="form-group">
                                                  <label for="academicContent">Content:</label>
                                                  <textarea class="form-control form-control-sm" id="academicContent" placeholder="Enter content for Academic section"></textarea>
                                                </div>
                                                <div class="form-group">
                                                  <label for="academicButton">Button:</label>
                                                  <input type="text" class="form-control form-control-sm" id="academicButton" placeholder="Enter text for button">
                                                </div>
                                              <!--  add more form fields  -->

                                              <button type="submit" class="btn btn-success">Save</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Edit Admission Modal -->
                                    <div class="modal fade" id="editAdmissionModal" tabindex="-1" role="dialog" aria-labelledby="editAdmissionModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="editAdmissionModalLabel">Edit Admission Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                  <label for="formFileSm" class="form-label">Upload Image</label>
                                                  <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                </div>
                                                <div class="form-group">
                                                  <label for="academicTitle">Title:</label>
                                                  <input type="text" class="form-control form-control-sm" id="academicTitle" placeholder="Enter title for Academic section">
                                                </div>
                                                <div class="form-group">
                                                  <label for="academicContent">Content:</label>
                                                  <textarea class="form-control form-control-sm" id="academicContent" placeholder="Enter content for Academic section"></textarea>
                                                </div>
                                                <div class="form-group">
                                                  <label for="academicButton">Button:</label>
                                                  <input type="text" class="form-control form-control-sm" id="academicButton" placeholder="Enter text for button">
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
                                    <!-- Delete Admission Modal -->
                                    <div class="modal fade" id="deleteAdmissionModal" tabindex="-1" role="dialog" aria-labelledby="deleteAdmissionModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class modal-content>
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="deleteAdmissionModalLabel">Confirm Deletion</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Are you sure you want to delete the Admission section?</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- Admission END Tab -->

                                  <!-- FAQ/Forums Tab -->
                                  <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addFAQModal">Add FAQ</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="faqTable" style="min-width: 100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                              <th>Section</th>
                                              <th>Question</th>
                                              <th>answer</th>
                                              <th>Actions</th>
                                              <th></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>FAQ/Forums Section</td>
                                              <td>what is wmsu?</td>
                                              <td>WMSU stands for Western Mindanao State University</td>
                                        
                                              <td>
                                                <button class="btn btn-info" data-toggle="modal" data-target="#editFAQModal">Edit</button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteFAQModal">Delete</button>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                    <!-- Add FAQ Modal -->
                                    <div class="modal fade" id="addFAQModal" tabindex="-1" role="dialog" aria-labelledby="addFAQModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="addFAQModalLabel">Add FAQ/Forums Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="faqQuestion">Question:</label>
                                                <input type="text" class="form-control form-control-sm" id="faqQuestion" placeholder="Enter question for FAQ/Forums">
                                              </div>
                                              <div class="form-group">
                                                <label for="faqAnswer">Answer:</label>
                                                <textarea class="form-control form-control-sm" id="faqAnswer" rows="4" placeholder="Enter answer for FAQ/Forums"></textarea>
                                              </div>
                                              <!-- Add more form fields as needed -->

                                              <button type="submit" class="btn btn-success">Save</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Edit FAQ Modal -->
                                    <div class="modal fade" id="editFAQModal" tabindex="-1" role="dialog" aria-labelledby="editFAQModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="editFAQModalLabel">Edit FAQ/Forums Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class modal-body>
                                            <form>
                                              <div class="form-group">
                                                <label for="faqQuestion">Question:</label>
                                                <input type="text" class="form-control form-control-sm" id="faqQuestion" placeholder="Enter question for FAQ/Forums">
                                              </div>
                                              <div class="form-group">
                                                <label for="faqAnswer">Answer:</label>
                                                <textarea class="form-control form-control-sm" id="faqAnswer" rows="4" placeholder="Enter answer for FAQ/Forums"></textarea>
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
                                    <!-- Delete FAQ Modal -->
                                    <div class="modal fade" id="deleteFAQModal" tabindex="-1" role="dialog" aria-labelledby="deleteFAQModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="deleteFAQModalLabel">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p>Are you sure you want to delete the FAQ/Forums section?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- FAQ/Forums end Tab -->

                                  <!-- Carousel Tab -->
                                  <div class="tab-pane fade" id="carousel" role="tabpanel" aria-labelledby="carousel-tab">
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addCarouselModal">Add Carousel</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="carouselTable" style="min-width: 100%;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>Section</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Carousel Section</td>
                                            <td>Static content for the Carousel section goes here.</td>
                                            <td>
                                              <button class="btn btn-info" data-toggle="modal" data-target="#editCarouselModal">Edit</button>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteCarouselModal">Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!-- Add Carousel Modal -->
                                    <div class="modal fade" id="addCarouselModal" tabindex="-1" role="dialog" aria-labelledby="addCarouselModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="addCarouselModalLabel">Add Carousel Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="carouselTitle">Title:</label>
                                                <input type="text" class="form-control form-control-sm" id="carouselTitle" placeholder="Enter title">
                                              </div>
                                              <div class="form-group">
                                                <label for="carouselDescription">Description:</label>
                                                <textarea class="form-control form-control-sm" id="carouselDescription" rows="4" placeholder="Enter description"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="carouselImage">Image:</label>
                                                <input type="file" class="form-control form-control-sm form-control-file" id="carouselImage">
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
                                    <!-- Edit Carousel Modal -->
                                    <div class="modal fade" id="editCarouselModal" tabindex="-1" role="dialog" aria-labelledby="editCarouselModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="editCarouselModalLabel">Edit Carousel Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="editCarouselTitle">Title:</label>
                                                <input type="text" class="form-control form-control-sm" id="editCarouselTitle" placeholder="Edit title">
                                              </div>
                                              <div class="form-group">
                                                <label for="editCarouselDescription">Description:</label>
                                                <textarea class="form-control form-control-sm" id="editCarouselDescription" rows="4" placeholder="Edit description"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="editCarouselImage">Image:</label>
                                                <input type="file" class="form-control form-control-sm form-control-file" id="editCarouselImage">
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
                                  <div class="tab-pane fade" id="programs" role="tabpanel" aria-labelledby="programs-tab">
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
                                  <div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
                                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addFacultyModal">Add Faculty</button>
                                    <div class="table-responsive">
                                      <table class="table table-hover table-bordered mt-3" id="facultyTable" style="min-width: 100%;">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>Section</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Faculty and Staff Section</td>
                                            <td>Static content for the Faculty </td>
                                            <td>
                                              <button class="btn btn-info" data-toggle="modal" data-target="#editFacultyModal">Edit</button>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteFacultyModal">Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!-- Add Faculty Modal -->
                                    <div class="modal fade" id="addFacultyModal" tabindex="-1" role="dialog" aria-labelledby="addFacultyModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="addFacultyModalLabel">Add Faculty and Staff Section</h5>
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
                                              <!--  add more form fields for adding as needed -->

                                              <button type="submit" class="btn btn-success">Save</button>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Edit Faculty Modal -->
                                    <div class="modal fade" id="editFacultyModal" tabindex="-1" role="dialog" aria-labelledby="editFacultyModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="editFacultyModalLabel">Edit Faculty and Staff Section</h5>
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
                                          <div class="modal-body">
                                            <p>Are you sure you want to delete the Faculty and Staff section?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>
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
                    <div class="tab-pane fade" id="v-tabs-account" role="tabpanel" aria-labelledby="v-tabs-acoount-tab" tabindex="0">
                      <div class="row">
                        <div class="col-12 ">
                          <details open>
                            <summary><h4 class="">Manage Account</h4></summary>
                              <div class="content border-top">
                                <form action="">
                                  <div class="row">
                                    <div class="col-12 mb-20">
                                      <div class="row">
                                        <div class="col-md-4 col-sm-12 mb-3">
                                          <!-- Image preview -->
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
                                                  <input class="form-control form-control-sm form-control-file" id="systemLogo" type="file" accept="image/*" onchange="previewImage(this, document.getElementById('logoPreview'))">
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
                    </div>
                    <div class="tab-pane fade" id="v-tabs-privacy" role="tabpanel" aria-labelledby="v-tabs-privacy-tab" tabindex="0">
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
                                          <!-- Image preview -->
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
                    </div>
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

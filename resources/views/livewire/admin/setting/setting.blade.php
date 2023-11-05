@section('title', 'Pybot | Settings') <!-- Set the page title -->

@section('setting', 'active')
<div>
<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Setting</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-12">
          <div class="custminh-600 cqh-31">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-tabs nav-tabs-vertical-custom col-3 pr-0" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active rounded-left" id="v-tabs-general-tab" data-toggle="tab" data-target="#v-tabs-general" type="button" role="tab" aria-controls="v-tabs-general" aria-selected="true">General</button>
                  <button class="nav-link rounded-left" id="v-tabs-preference-tab" data-toggle="tab" data-target="#v-tabs-preference" type="button" role="tab" aria-controls="v-tabs-preference" aria-selected="false">Preferences</button>
                  <button class="nav-link rounded-left" id="v-tabs-report-tab" data-toggle="tab" data-target="#v-tabs-report" type="button" role="tab" aria-controls="v-tabs-report" aria-selected="false">Reports</button>
                  <button class="nav-link rounded-left" id="v-tabs-account-tab" data-toggle="tab" data-target="#v-tabs-account" type="button" role="tab" aria-controls="v-tabs-account" aria-selected="false">Account</button>
                  <button class="nav-link rounded-left" id="v-tabs-privacy-tab" data-toggle="tab" data-target="#v-tabs-privacy" type="button" role="tab" aria-controls="v-tabs-privacy" aria-selected="false">Privacy</button>
                </div>
                <div class="tab-content custminh-600 scrollbar-y cqh-31 col-9" id="v-tabs-tabContent">
                  <div class="tab-pane fade show active" id="v-tabs-general" role="tabpanel" aria-labelledby="v-tabs-general-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12 mb-25">
                        <h4 class="">My Notifications</h4><hr>
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
                              <fieldset class="radio-switch">
                                <legend class="col-6 legend-left">Email Notifications</legend>
                                <input type="radio" id="radio-1"> 
                                <label for="radio-1" class="radio-right"></label>
                              </fieldset>
                              <fieldset class="radio-switch">
                                <legend class="col-6 legend-left">System Notifications</legend>
                                <input type="radio" id="radio-2"> 
                                <label for="radio-2" class="radio-right"></label>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                      </div>
                      
                      <div class="col-12">
                        <h4 class="">My Settings</h4><hr>
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
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-tabs-preference" role="tabpanel" aria-labelledby="v-tabs-preference-tab" tabindex="0">
                    <div class="row">
                      <div class="col-12 mb-25">
                        <h4 class="">Manage Details</h4><hr>
                        <form action="">
                          <div class="row">
                            <div class="col-12 mb-20">
                              <div class="row">
                                <div class="col-4">
                                  <!-- Image preview -->
                                  <img class="w-75" id="logoPreview" src="{{ asset('admin-assets\media\defaults\default-image.png') }}" alt="System Logo">
                                </div>
                                <div class="col-8">
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
                                          <input class="form-control form-control-sm" id="systemLogo" type="file" accept="image/*" onchange="previewImage(this, document.getElementById('logoPreview'))">
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
                      <div class="col-12">
                      <h4 class="">Page Assets</h4>
                      <hr>
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
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addHomeModal">Add Home</button>
                            <table class="table mt-3" id="homeTable">
                              <thead>
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
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editHomeModal">Edit</button>
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
                                      <label for="homeSectionContent">Content:</label>
                                      <input type="text" class="form-control" id="homeSectionContent" placeholder="Enter content for the Home section">
                                    </div>
                                    <!--   add more form fields here   -->

                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                      <label for="editHomeSectionContent">Content:</label>
                                      <input type="text" class="form-control" id="editHomeSectionContent" value="Current content goes here">
                                    </div>
                                    <!--  add more form fields -->

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                          <!-- HOME TAB END -->
         
                          <!-- ABOUT US TAB -->
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addAboutUsModal">Add About Us</button>
                            <table class="table mt-3" id="aboutUsTable">
                              <thead>
                                <tr>
                                  <th>Section</th>
                                  <th>Description</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>About Us Section</td>
                                  <td>Static content for the About Us section goes here.</td>
                                  <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAboutUsModal">Edit</button>
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
                                      <label for="aboutUsContent">Content:</label>
                                      <textarea class="form-control" id="aboutUsContent" rows="4" placeholder="Enter content for About Us section"></textarea>
                                    </div>
                                    <!--  add more form fields  -->

                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                      <label for="editAboutUsContent">Content:</label>
                                      <textarea class="form-control" id="editAboutUsContent" rows="4" placeholder="Edit content for About Us section"></textarea>
                                    </div>
                                    <!--  add more form fields for editing as needed -->

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                          <!-- ABOUT US TAB END -->

                          <!-- ACADEMIC TAB -->
                        <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addAcademicModal">Add Academic</button>
                            <table class="table mt-3" id="academicTable">
                              <thead>
                                <tr>
                                  <th>Section</th>
                                  <th>Description</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Academic Section</td>
                                  <td>Static content for the Academic section goes here.</td>
                                  <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAcademicModal">Edit</button>
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
                                        <label for="academicContent">Content:</label>
                                        <textarea class="form-control" id="academicContent" rows="4" placeholder="Enter content for Academic section"></textarea>
                                      </div>
                                      <!--  add more form fields  -->

                                      <button type="submit" class="btn btn-primary">Save</button>
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
                                  <div class modal-body>
                                    <form>
                                      <div class="form-group">
                                        <label for="editAcademicContent">Content:</label>
                                        <textarea class="form-control" id="editAcademicContent" rows="4" placeholder="Edit content for Academic section"></textarea>
                                      </div>
                                      <!--  add more form fields for editing as needed -->

                                      <button type="submit" class="btn btn-primary">Save Changes</button>
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
                        <!-- ACADEMIC END TAB -->

                        <!-- Admission Tab -->
                        <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addAdmissionModal">Add Admission</button>
                            <table class="table mt-3" id="admissionTable">
                              <thead>
                                <tr>
                                  <th>Section</th>
                                  <th>Description</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Admission Section</td>
                                  <td>Static content for the Admission section goes here.</td>
                                  <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAdmissionModal">Edit</button>
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
                                        <label for="admissionContent">Content:</label>
                                        <textarea class="form-control" id="admissionContent" rows="4" placeholder="Enter content for Admission section"></textarea>
                                      </div>
                                      <!--  add more form fields  -->

                                      <button type="submit" class="btn btn-primary">Save</button>
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
                                        <label for="editAdmissionContent">Content:</label>
                                        <textarea class="form-control" id="editAdmissionContent" rows="4" placeholder="Edit content for Admission section"></textarea>
                                      </div>
                                      <!--  add more form fields for editing as needed -->

                                      <button type="submit" class="btn btn-primary">Save Changes</button>
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
                        <!-- Admission END Tab -->


                        <!-- FAQ/Forums Tab -->
                        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addFAQModal">Add FAQ</button>
                              <table class="table mt-3" id="faqTable">
                                <thead>
                                  <tr>
                                    <th>Section</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>FAQ/Forums Section</td>
                                    <td>Static content for the FAQ/Forums section goes here.</td>
                                    <td>
                                      <button class="btn btn-primary" data-toggle="modal" data-target="#editFAQModal">Edit</button>
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
                                      <label for="faqContent">Content:</label>
                                      <textarea class="form-control" id="faqContent" rows="4" placeholder="Enter content for FAQ/Forums section"></textarea>
                                    </div>
                                    <!--  add more form fields  -->

                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                      <label for="editFAQContent">Content:</label>
                                      <textarea class="form-control" id="editFAQContent" rows="4" placeholder="Edit content for FAQ/Forums section"></textarea>
                                    </div>
                                    <!--  add more form fields for editing as needed -->

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                        <!-- FAQ/Forums end Tab -->

                        <!-- Carousel Tab -->
                        <div class="tab-pane fade" id="carousel" role="tabpanel" aria-labelledby="carousel-tab">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addCarouselModal">Add Carousel</button>
                            <table class="table mt-3" id="carouselTable">
                              <thead>
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
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editCarouselModal">Edit</button>
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
                                      <input type="text" class="form-control" id="carouselTitle" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                      <label for="carouselDescription">Description:</label>
                                      <textarea class="form-control" id="carouselDescription" rows="4" placeholder="Enter description"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="carouselImage">Image:</label>
                                      <input type="file" class="form-control-file" id="carouselImage">
                                    </div>
                                    <!--  add more form fields as needed -->

                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                      <input type="text" class="form-control" id="editCarouselTitle" placeholder="Edit title">
                                    </div>
                                    <div class="form-group">
                                      <label for="editCarouselDescription">Description:</label>
                                      <textarea class="form-control" id="editCarouselDescription" rows="4" placeholder="Edit description"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="editCarouselImage">Image:</label>
                                      <input type="file" class="form-control-file" id="editCarouselImage">
                                    </div>
                                    <!--  add more form fields for editing as needed -->

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                        <!-- Carousel end Tab -->

                        <!-- Programs Tab -->
                        <div class="tab-pane fade" id="programs" role="tabpanel" aria-labelledby="programs-tab">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addProgramsModal">Add Programs</button>
                              <table class="table mt-3" id="programsTable">
                                <thead>
                                  <tr>
                                    <th>Section</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Programs Section</td>
                                    <td>Static content for the Programs section goes here.</td>
                                    <td>
                                      <button class="btn btn-primary" data-toggle="modal" data-target="#editProgramsModal">Edit</button>
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
                                      <label for="addProgramsTitle">Title:</label>
                                      <input type="text" class="form-control" id="addProgramsTitle" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                      <label for="addProgramsDescription">Description:</label>
                                      <textarea class="form-control" id="addProgramsDescription" rows="4" placeholder="Enter description"></textarea>
                                    </div>
                                    <!--  add more form fields as needed -->

                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                      <input type="text" class="form-control" id="editProgramsTitle" placeholder="Edit title">
                                    </div>
                                    <div class="form-group">
                                      <label for="editProgramsDescription">Description:</label>
                                      <textarea class="form-control" id="editProgramsDescription" rows="4" placeholder="Edit description"></textarea>
                                    </div>
                                    <!--  add more form fields for editing as needed -->

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                        <!-- Programs end Tab -->


                        <!-- Faculty and Staff Tab -->
                        <div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addFacultyModal">Add Faculty</button>
                            <table class="table mt-3" id="facultyTable">
                              <thead>
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
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editFacultyModal">Edit</button>
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
                                      <label for="addFacultyTitle">Title:</label>
                                      <input type="text" class="form-control" id="addFacultyTitle" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                      <label for="addFacultyDescription">Description:</label>
                                      <textarea class="form-control" id="addFacultyDescription" rows="4" placeholder="Enter description"></textarea>
                                    </div>
                                    <!--  add more form fields for adding as needed -->

                                    <button type="submit" class="btn btn-primary">Save</button>
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
                                      <label for="editFacultyTitle">Title:</label>
                                      <input type="text" class="form-control" id="editFacultyTitle" placeholder="Edit title">
                                    </div>
                                    <div class="form-group">
                                      <label for="editFacultyDescription">Description:</label>
                                      <textarea class="form-control" id="editFacultyDescription" rows="4" placeholder="Edit description"></textarea>
                                    </div>
                                    <!--  add more form fields for editing as needed -->

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
                        <!-- Faculty and Staff end Tab -->
                 
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-tabs-report" role="tabpanel" aria-labelledby="v-tabs-report-tab" tabindex="0">
                        <div class="row">
                          
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-tabs-account" role="tabpanel" aria-labelledby="v-tabs-acoount-tab" tabindex="0">
                        <div class="row">...
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-tabs-privacy" role="tabpanel" aria-labelledby="v-tabs-privacy-tab" tabindex="0">
                        <div class="row">...
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
  </div>

</main><!-- End #main -->
</div>

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
                        <h4 class="">Page Assets</h4><hr>
                        <form action="">
                          <div class="row">
                            <div class="col-12">
                              <details class="mt-0">
                                <summary>Home</summary>
                                <div class="content">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua..</p>
                                </div>
                              </details>

                              <details>
                                <summary>About Us</summary>
                                <div class="content">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                </div>
                              </details>

                              <details>
                                <summary>Academic</summary>
                                <div class="content">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua..</p>
                                </div>
                              </details>
                            </div>
                          </div>
                        </form>
                      </div>
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

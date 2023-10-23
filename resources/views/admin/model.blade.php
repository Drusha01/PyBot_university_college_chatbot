@extends('layout.app')
@section('title', 'Pybot | Model') <!-- Set the page title -->

@section('model', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Model asdfs</h1>
      <nav>
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Model</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <!-- Tab Navigation -->
    <ul class="nav nav-tabs" id="adminTabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#build-tab">Builds</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#deploy-tab">Deployment</a>
        </li>
        <div class="row position-absolute">
            <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#addModal">Add Intents</button>
            <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#trainModal">Train</button>
            <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#deployModal">Publish</button>
        </div>
    </ul>
    <div class="row">
        <div class="col-xl-12 col-12 mb-20">
            <!-- Tab Content -->
            <div class="tab-content h-100">
                <!-- Training tab -->
                <div class="tab-pane fade show active" id="build-tab">
                    <div class="container-fluid">
                        <!-- Admin Table -->
                        <div class="table-responsive">
                            <table id="example1" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Information</th>
                                        <th>Title</th>
                                        <th>Version</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                    <tr>
                                        <td></td>
                                        <td>New File</td>
                                        <td>Announcements</td>
                                        <td>trainingv1.2023-10-16</td>
                                        <td>10/16/2023</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Updated File</td>
                                        <td>Programs</td>
                                        <td>trainingv0.2023-10-15</td>
                                        <td>10/15/2023</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                        <!-- End build Table -->
                    </div>
                </div>
                <!-- Deploy tab -->
                <div class="tab-pane fade show" id="deploy-tab">
                    <div class="container-fluid">
                        <!-- Admin Table -->
                        <div class="table-responsive">
                            <table id="example2" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Information</th>
                                        <th>Title</th>
                                        <th>Version</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                    <tr>
                                        <td></td>
                                        <td>New File</td>
                                        <td>Announcements</td>
                                        <td>trainingv1.2023-10-16</td>
                                        <td>10/16/2023</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Updated File</td>
                                        <td>Programs</td>
                                        <td>trainingv0.2023-10-15</td>
                                        <td>10/15/2023</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                        <!-- End Admin Table -->
                    </div>
                </div>

            </div>
        </div>

        <div class="modal modal-xl fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body cqh-50">
                        <button id="add_data" class="btn btn-success btn-rounded btn-icon float-right"  type="button"><i class="bi bi-plus-circle-dotted"></i></button>
                        <form>
                            <div class="form-group-row">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="add-container">
                                            <div class="form-group">
                                                <label for="addquestion">Question/s</label>
                                                <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="add-container2">
                                            <div class="form-group">
                                                <label for="addresponse">Responses</label>
                                                <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="addtag" class="form-label">Tag</label>
                                            <input type="text" id="addtag" class="form-control" value="General, Informational, Specific" data-role="tagsinput"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span>For
                                            <div class="">
                                                    <label>
														<input type="checkbox" class="flat" checked="checked"  value="IT"> IT
													</label>
                                                    <label>
                                                        <input type="checkbox" class="flat" value="CS"> CS
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" class="flat" value="ACT"> ACT
                                                    </label>
                                            </div>
                                            </span>
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

        <div class="modal modal-xl fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body cqh-50">
                        <button id="add_data" class="btn btn-success btn-rounded btn-icon float-right"  type="button"><i class="bi bi-plus-circle-dotted"></i></button>
                        <form>
                            <div class="form-group-row">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="add-container">
                                            <div class="form-group">
                                                <label for="addquestion">Question/s</label>
                                                <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="add-container2">
                                            <div class="form-group">
                                                <label for="addresponse">Responses</label>
                                                <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="addtag" class="form-label">Tag</label>
                                            <input type="text" id="addtag" class="form-control" value="General, Informational, Specific" data-role="tagsinput"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span>For
                                            <div class="">
                                                    <label>
														<input type="checkbox" class="flat" checked="checked"  value="IT"> IT
													</label>
                                                    <label>
                                                        <input type="checkbox" class="flat" value="CS"> CS
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" class="flat" value="ACT"> ACT
                                                    </label>
                                            </div>
                                            </span>
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
  </main><!-- End #main -->

@endsection
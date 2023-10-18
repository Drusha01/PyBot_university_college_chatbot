@section('title', 'Pybot | College Student Council') <!-- Set the page title -->

@section('csc', 'active')
<div>
<main id="main" class="main">

<div class="pagetitle">
    <h1>College Student Council</h1>
    <nav>
        <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="colleges">Colleges</a></li>
        <li class="breadcrumb-item active"aria-current="page">CCS</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<button class="btn btn-success float-right m-2" data-toggle="modal" data-target="#AddModal">Add Data</button>


<!-- Tab Navigation -->
<ul class="nav nav-tabs" id="DeptTabs">
    <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="#IT-management-tab">IT</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#CS-management-tab">CS </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#ACT-management-tab">ACT </a>
    </li>
</ul>

<!-- Tab Content -->
<div class="tab-content">
<!-- IT Management Tab -->
<div class="tab-pane fade show active" id="IT-management-tab">
  <div class="container-fluid">
        <div class="table-responsive">
            <table id="example1" class="display responsive nowrap" style="width:100%">
            <caption>These data can be modified and structured before calling as a function in the model</caption>
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th>Questions</th>
                    <th>Tags</th>
                    <th>Responses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                <tr>
                    <td></td>
                    <td>How can I view the class schedule?</td>
                    <td>Specific</td>
                    <td class="response-column">
                        <p>Check and extract your associated class pdf file from the official page of...</p>
                        <p>If you're already enroll there would be an email with your schedule attached</p>
                        <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                    </td>
                </tr>
                <tr>
                <td></td>
                    <td>What documents do I need for enrollment?</td>
                    <td>General</td>
                    <td class="response-column">
                        <p>Answer 1</p>
                        <p>Answer 2</p>
                        <p>Answer 3</p>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
            </table>
        </div>
  </div>
</div>

<!-- CS Management Tab -->
<div class="tab-pane fade" id="CS-management-tab">
  <div class="container-fluid">
    <div class="table-responsive">
        <table id="example2" class="display responsive nowrap" style="width:100%">
            <caption>These data can be modified and structured before calling as a function in the model</caption>
            <thead class="thead-dark">
                <tr>
                <th></th>
                    <th>Questions</th>
                    <th>Tags</th>
                    <th>Responses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                <tr>
                <td></td>
                    <td>How can I view the class schedule?</td>
                    <td>Specific</td>
                    <td class="response-column">
                    <p>Check and extract your associated class pdf file from the official page of...</p>
                    <p>If you're already enroll there would be an email with your schedule attached</p>
                    <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                    </td>
                </tr>
                <tr>
                <td></td>
                    <td>What documents do I need for enrollment?</td>
                    <td>General</td>
                    <td class="response-column">
                    <p>Answer 1</p>
                    <p>Answer 2</p>
                    <p>Answer 3</p>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
  </div>
</div>

<!-- ACT Management Tab -->
<div class="tab-pane fade" id="ACT-management-tab">
  <div class="container-fluid">
    <div class="table-responsive">
        <table id="example3" class="display responsive nowrap" style="width:100%">
          <caption>These data can be modified and structured before calling as a function in the model</caption>
          <thead class="thead-dark">
              <tr>
                <th></th>
                  <th>Questions</th>
                  <th>Tags</th>
                  <th>Responses</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <!-- Add your table rows dynamically using server-side data or JavaScript -->
              <tr>
                <td></td>
                  <td>How can I view the class schedule?</td>
                  <td>Specific</td>
                  <td class="response-column">
                    <p>Check and extract your associated class pdf file from the official page of...</p>
                    <p>If you're already enroll there would be an email with your schedule attached</p>
                    <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                  </td>
                    <td class="text-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                    </td>
              </tr>
              <tr>
              <td></td>
                  <td>What documents do I need for enrollment?</td>
                  <td>General</td>
                  <td class="response-column">
                    <p>Answer 1</p>
                    <p>Answer 2</p>
                    <p>Answer 3</p>
                  </td>
                  <td class="text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                    <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                  </td>
              </tr>
              <!-- Add more rows as needed -->
          </tbody>
        </table>
    </div>
  </div>
</div>

  <div class="modal modal-xl fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
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
                <button id="edit_data" class="btn btn-success btn-rounded btn-icon float-right"  type="button"><i class="bi bi-plus-circle-dotted"></i></button>
                <form>
                    <div class="form-group-row">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="edit-container">
                                    <div class="form-group">
                                        <label for="addquestion">Question/s</label>
                                        <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edit-container2">
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

<script>
$('#add_data').on('click', function() {
    var newIntent = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
            </div>

    `;
    var newIntent2 = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
            </div>

    `;
    $('.add-container').append(newIntent);
    $('.add-container2').append(newIntent2);


});
$('#edit_data').on('click', function() {
    var newIntent = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
            </div>

    `;
    var newIntent2 = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
            </div>

    `;
    $('.edit-container').append(newIntent);
    $('.edit-container2').append(newIntent2);


});
</script>
</div>

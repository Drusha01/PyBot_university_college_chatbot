@extends('layout.app')
@section('title', 'Pybot | Department') <!-- Set the page title -->

@section('department', 'active')


@section('content')

    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Department Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Department</li>
                </ol>
            </nav>
        </div>

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
              <div class="table-responsive-sm m-3">
                <button class="btn btn-success float-start m-2" data-toggle="modal" data-target="#AddModal">Add</button>
                <table id="example1" class="table caption-top table-sm table-bordered hover" style="width:100%">
                  <caption>These data can be modified and structured before calling as a function in the model</caption>
                  <thead class="thead-dark">
                      <tr>
                          <th>Questions</th>
                          <th>Tags</th>
                          <th>Responses</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Add your table rows dynamically using server-side data or JavaScript -->
                      <tr>
                   
                          <td>How can I view the class schedule?</td>
                          <td>Specific</td>
                          <td class="response-column">
                            <p>Check and extract your associated class pdf file from the official page of...</p>
                            <p>If you're already enroll there would be an email with your schedule attached</p>
                            <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                          </td>
                          <td class="text-center align-middle">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                          </td>
                      </tr>
                      <tr>
                    
                          <td>What documents do I need for enrollment?</td>
                          <td>General</td>
                          <td class="response-column">
                            <p>Answer 1</p>
                            <p>Answer 2</p>
                            <p>Answer 3</p>
                          </td>
                          <td class="text-center align-middle">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                          </td>
                      </tr>
                      <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
          </div>
        </div>

        <!-- IT dep Tab -->
        <div class="tab-pane fade" id="CS-management-tab">
          <div class="container-fluid">
              <div class="table-responsive-sm m-3">
                <button class="btn btn-success float-start m-2" data-toggle="modal" data-target="#AddModal">Add</button>
                <table id="example1" class="table caption-top table-sm table-bordered hover" style="width:100%">
                  <caption>These data can be modified and structured before calling as a function in the model</caption>
                  <thead class="thead-dark">
                      <tr>
                          <th>Questions</th>
                          <th>Tags</th>
                          <th>Responses</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Add your table rows dynamically using server-side data or JavaScript -->
                      <tr>
                   
                          <td>How can I view the class schedule?</td>
                          <td>Specific</td>
                          <td class="response-column">
                            <p>Check and extract your associated class pdf file from the official page of...</p>
                            <p>If you're already enroll there would be an email with your schedule attached</p>
                            <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                          </td>
                          <td class="text-center align-middle">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                          </td>
                      </tr>
                      <tr>
                    
                          <td>What documents do I need for enrollment?</td>
                          <td>General</td>
                          <td class="response-column">
                            <p>Answer 1</p>
                            <p>Answer 2</p>
                            <p>Answer 3</p>
                          </td>
                          <td class="text-center align-middle">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                          </td>
                      </tr>
                      <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
          </div>
        </div>

        <!-- act colleges Tab -->
        <div class="tab-pane fade" id="ACT-management-tab">
          <div class="container-fluid">
            <div class="table-responsive-sm m-3">
                <button class="btn btn-success float-start m-2" data-toggle="modal" data-target="#AddModal">Add</button>
                <table id="example1" class="table caption-top table-sm table-bordered hover" style="width:100%">
                  <caption>These data can be modified and structured before calling as a function in the model</caption>
                  <thead class="thead-dark">
                      <tr>
                          <th>Questions</th>
                          <th>Tags</th>
                          <th>Responses</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Add your table rows dynamically using server-side data or JavaScript -->
                      <tr>
                   
                          <td>How can I view the class schedule?</td>
                          <td>Specific</td>
                          <td class="response-column">
                            <p>Check and extract your associated class pdf file from the official page of...</p>
                            <p>If you're already enroll there would be an email with your schedule attached</p>
                            <p>Login to your university credentials and extract from the 'Schedule' menu</p>
                          </td>
                          <td class="text-center align-middle">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                          </td>
                      </tr>
                      <tr>
                    
                          <td>What documents do I need for enrollment?</td>
                          <td>General</td>
                          <td class="response-column">
                            <p>Answer 1</p>
                            <p>Answer 2</p>
                            <p>Answer 3</p>
                          </td>
                          <td class="text-center align-middle">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                          </td>
                      </tr>
                      <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
          </div>
        </div>
          <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="adminAddModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adminAdminModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add Admin form -->
                        <form>
                            <div class="form-group">
                                <label for="addquestion">Question</label>
                                <input type="text" class="form-control" id="addquestion" placeholder="Type Question">
                            </div>
                            <div class="form-group">
                              <label for="addtag">Tag</label>
                              <select class="form-control" id="addtag" multiple>
                                  <option value="Specific">Specific</option>
                                  <option value="General">General</option>
                                  <option value="Information">Information</option>
                              </select>
                          </div>
                          <div class="form-group">
                                <label for="addresponse">Response</label>
                                <input type="text" class="form-control" id="addresponse" placeholder="Type desire response..">
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
@extends('layout.app')
@section('title', 'Pybot | Notification') <!-- Set the page title -->

@section('notification', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Notification</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Notification</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="DeptTabs">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#all-tab">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#unread-tab">Unread </a>
            </li>
        </ul>

      <!-- Tab Content -->
      <div class="tab-content">
        <!-- All Tab -->
        <div class="tab-pane fade show active" id="all-tab">
          <div class="table-responsive-sm m-3">
            <table id="example1" class="table caption-top table-sm table-bordered hover" style="width:100%">
              <caption></caption>
              <thead class="thead-dark">
                  <tr>
                      <th>Questions</th>
                      <th>Tags</th>
                      <th>Responses</th>
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
                  </tr>
                  <tr>
                
                      <td>What documents do I need for enrollment?</td>
                      <td>General</td>
                      <td class="response-column">
                        <p>Answer 1</p>
                        <p>Answer 2</p>
                        <p>Answer 3</p>
                      </td>
                  </tr>
                  <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>

        <!-- Unread Tab -->
        <div class="tab-pane fade" id="unread-tab">
          <div class="table-responsive-sm m-3">
            <table id="example1" class="table caption-top table-sm table-bordered hover" style="width:100%">
              <caption>These data can be modified and structured before calling as a function in the model</caption>
              <thead class="thead-dark">
                  <tr>
                      <th>Questions</th>
                      <th>Tags</th>
                      <th>Responses</th>
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
                  </tr>
                  <tr>
                
                      <td>What documents do I need for enrollment?</td>
                      <td>General</td>
                      <td class="response-column">
                        <p>Answer 1</p>
                        <p>Answer 2</p>
                        <p>Answer 3</p>
                      </td>
                  </tr>
                  <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>

      </div>

  </main><!-- End #main -->


@endsection
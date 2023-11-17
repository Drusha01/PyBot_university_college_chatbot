@section('title', 'Pybot | Notification') <!-- Set the page title -->

@section('setting', 'active')
<div>
<style>
    /* Custom CSS for the table header */
    .custom-bg-color {
        background-color: #05445E;
        color: white;
    }
    .table td, .table th {
        text-align: center;
    }
</style>

    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Notification</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
          <div class="px-20">
            <div class="row mt-4">
              <div class="card p-0">
                <div class="card-header">
                    <div class="btn-group float-right">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Bulk Action
                      </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Mark as Read</a>
                          <a class="dropdown-item" href="#">Delete</a>
                      </div>


                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-hover searchable " style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width:42px;"><input type="checkbox" id="check-all" /></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="row-check" /></td>
                                    <td>Avail</td>
                                    <td>Sali, Khay Abdilla has availed gym-use.</td>
                                    <td>2023-09-18 14:25:57</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewNotificationModal">View</button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteNotificationModal">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="row-check" /></td>
                                    <td>Avail</td>
                                    <td>Sali, Khay Abdilla has availed gym-use.</td>
                                    <td>2023-09-18 14:25:57</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewNotificationModal">View</button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteNotificationModal">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more notifications here -->
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </main><!-- End #main -->

    <!-- View Notification Modal -->
    <div class="modal fade" id="viewNotificationModal" tabindex="-1" role="dialog" aria-labelledby="viewNotificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewNotificationModalLabel">View Notification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add notification details here -->
                    <p><strong>Title:</strong> Avail</p>
                    <p><strong>Message:</strong> Sali, Khay Abdilla has availed gym-use.</p>
                    <p><strong>Time:</strong> 2023-09-18 14:25:57</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Notification Modal -->
    <div class="modal fade" id="deleteNotificationModal" tabindex="-1" role="dialog" aria-labelledby="deleteNotificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteNotificationModalLabel">Delete Notification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this notification?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // THIS ADD CHECKBOX ALL TO TABLE
        $(document).on('change', 'table thead [type="checkbox"]', function(e){
        e && e.preventDefault();
        var $table = $(e.target).closest('table'), $checked = $(e.target).is(':checked');
        $('tbody [type="checkbox"]',$table).prop('checked', $checked);
        $("#btn-del-reports").toggle();
        });
    </script>
</div>

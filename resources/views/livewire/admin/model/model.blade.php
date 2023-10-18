<div>
<main id="main" class="main">

<div class="pagetitle">
<h1>Model</h1>
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
        <a class="nav-link active" data-toggle="tab" href="#data-tab">Data</a>
        <!-- List of JASON display -->
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#build-tab">Builds</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#deploy-tab">Deployment</a>
    </li>
    <div class="d-flex position-absolute" style="right: 3%">
        <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#addModal">Add Intents</button>
        <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#trainModal">Train</button>
        <button class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#publishModal">Publish</button>
    </div>
</ul>

<div class="row">
    <div class="col-xl-12 col-12 mb-20">
        <!-- Tab Content -->
        <div class="tab-content h-100">
            <!-- Data tab -->
            <div class="tab-pane fade show active" id="data-tab">
                <div class="container-fluid">
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="dataTable" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="checkbox"></th>
                                    <th></th>
                                    <th>#</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                <tr>
                                    <th class="checkbox"></th>
                                    <td></td>
                                    <td>1</td>
                                    <td>Version 1</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Build tab -->
            <div class="tab-pane fade" id="build-tab">
                <div class="container-fluid">
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="buildTable" class="display responsive nowrap" style="width:100%">
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
                    <!-- End Build Table -->
                </div>
            </div>
            <!-- Deploy tab -->
            <div class="tab-pane fade" id="deploy-tab">
                <div class="container-fluid">
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="deployTable" class="display responsive nowrap" style="width:100%">
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
</div>

        <div class="modal modal-xl fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body cqh-50">
                        <form>
                        <div class="form-group">
                            <label for="trainingData">Training Data:</label>
                            <input type="file" class="form-control" id="trainingData">
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

        <!-- Train Modal -->

        <div class="modal modal-xl fade" id="trainModal" tabindex="-1" role="dialog" aria-labelledby="trainModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trainModalLabel">Train</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body cqh-50">
                <!-- Add content for the "Train" modal here -->
                <form>
                    <div class="form-group">
                        <label for="trainingData">Training Data:</label>
                        <input type="file" class="form-control" id="trainingData">
                    </div>
                    <!-- Add more form fields or content as needed -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Train</button>
            </div>
        </div>
    </div>
</div>




<!-- Publish Modal -->
<div class="modal modal-xl fade" id="publishModal" tabindex="-1" role="dialog" aria-labelledby="publishModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="publishModalLabel">Publish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body cqh-50">
                <!-- Add content for the "Publish" modal here -->
                <form>
                    <div class="form-group">
                        <label for="publishedVersion">Select Version:</label>
                        <select class="form-control" id="publishedVersion">
                            <option value="version1">Version 1</option>
                            <option value="version2">Version 2</option>
                            <!-- Add more options if needed -->
                        </select>
                    </div>
                    <!-- Add more form fields or content as needed -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Publish</button>
            </div>
        </div>
    </div>
</div>

    </main><!-- End #main -->
</div>

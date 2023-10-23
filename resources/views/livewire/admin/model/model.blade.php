@section('title', 'Pybot | Model') <!-- Set the page title -->

@section('model', 'active')
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

</ul>

<div class="row">
    <div class="col-xl-12 col-12 mb-20">
        <!-- Tab Content -->
        <div class="tab-content h-100">
            <!-- Data tab -->
            <div class="tab-pane fade show active" id="data-tab">
                <div class="container-fluid">
                <button class="btn btn-success float-right mt-2 mb-2" data-toggle="modal" data-target="#addModal">Create</button>
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="example1" class="display responsive nowrap" style="width:100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>Intents</th>
                                    <th>Version</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                <tr>
                                    <th></th>
                                    <td>1</td>
                                    <td>intents_v1</td>
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
                <button class="btn btn-success float-right mt-2 mb-2" data-toggle="modal" data-target="#trainModal">Train</button>
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="example2" class="display responsive nowrap" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>Information</th>
                                    <th>Version</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                <tr>
                                    <td></td>
                                    <td>New File</td>
                                    <td>intents_v1</td>
                                    <td class="text-center">
                                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Updated File</td>
                                    <td>intents_v2</td>
                                    <td class="text-center">
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
                <button class="btn btn-success float-right mt-2 mb-2" data-toggle="modal" data-target="#deployModal">Deploy</button>
                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="example3" class="display responsive nowrap" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>Information</th>
                                    <th>Version</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                <tr>
                                    <td></td>
                                    <td>Current</td>
                                    <td>trainingv1.2023-10-16</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>trainingv0.2023-10-15</td>
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
                        <h5 class="modal-title" id="editModalLabel">Create</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body cqh-50">
                        <form>
                        <div class="form-group">
                            <label for="trainingData">Intents File:</label>
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




<!-- deploy Modal -->
<div class="modal modal-xl fade" id="deployModal" tabindex="-1" role="dialog" aria-labelledby="deployModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deployModalLabel">Deploy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body cqh-50">
                <!-- Add content for the "deploy" modal here -->
                <form>
                    <div class="form-group">
                        <label for="deployedVersion">Select Version:</label>
                        <select class="form-control" id="deployedVersion">
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
                <button type="button" class="btn btn-primary">Deploy</button>
            </div>
        </div>
    </div>
</div>

    </main><!-- End #main -->
</div>

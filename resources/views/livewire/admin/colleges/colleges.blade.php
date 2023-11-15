@section('title', 'Pybot | Colleges') <!-- Set the page title -->
@section('colleges', 'active')

<div>
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Colleges</li>
                </ol>
            </nav>
        </div>


        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="adminTabs">
            <!-- <li class="nav-item">
                <a class="nav-link active @if($active == 'college_management') show  @endif " wire:key="college-management"  wire:click="active_page('college-management')" >College Management</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link @if($active == 'college_management') show active @endif " wire:key="college_management"  wire:click="active_page('college_management')">College Q&A Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($active == 'csc_management') show active @endif " wire:key="csc_management"  wire:click="active_page('csc_management')">College Student Council</a>
            </li>
        </ul>

         <!-- Tab Content -->
        <div class="tab-content">

            <!-- College Management tab -->
            <div class="tab-pane fade @if($active == 'college_management-fsdaf') show active @endif " id="college-management-tab">
                <div class="container-fluid">
                    <!-- Add Admin Button (Opens Add Modal) -->
                    <button class="btn btn-success float-right mt-2 mb-2" data-toggle="modal" data-target="#adminAddModal">Add College</button>

                    <!-- Admin Table -->
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover table-bordered" style="min-width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>College Name</th>
                                    <th>Description </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                <tr>
                                    <td>CCS</td>
                                    <td>College of Computing Studies</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editAdminModal"><i class='bx bxs-edit'></i></button>
                                        <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                                        <button class="btn btn-info" onclick="window.location.href='ccs'"><i class="bi bi-eye-fill"></i></button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <!-- End Admin Table -->
                </div>
                <!-- Add college Modal -->
                <div class="modal fade" id="adminAddModal" tabindex="-1" role="dialog" aria-labelledby="adminAddModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="adminAdminModalLabel">Add Colleges</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body cqh-30">
                                <!-- Add college form -->
                                <form>
                                    <div class="form-group">
                                        <label for="AddAdminFirstName">College Name</label>
                                        <input type="text" class="form-control" id="AddAdminFirstName" placeholder="College  Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="AddAdminMiddleName">Description </label>
                                        <textarea class="form-control" id="AddAdminMiddleName" placeholder="Description"></textarea>
                                    </div>
                                </form>
                                <!-- End Add Admin  -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add College</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit  college -->
                <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="editAdminModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAdminModalLabel">Edit College</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body cqh-30">
                                <!-- Admin Edit Form -->
                                <form>
                                    <div class="form-group">
                                        <label for="editAdminFirstName">College Name</label>
                                        <input type="text" class="form-control" id="editAdminFirstName" placeholder="Edit College name">
                                    </div>
                                    <div class="form-group">
                                        <label for="editAdminMiddleName">Description</label>
                                        <textarea class="form-control" id="editAdminMiddleName" placeholder="Edit Description "></textarea>
                                    </div>
                                    <!-- insert more -->
                                </form>
                                <!-- End Admin Edit Form -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End add College Modal -->
            </div>

            




            <!-- Q&A ------------------------------------------------------------------------------------------ tab -->
            <div class="tab-pane fade @if($active == 'college_management') show active @endif ">
                <div class="container-fluid">
                    <!-- Add user Button (Opens Add user Modal) -->
                    <button class="btn btn-success float-right mt-2 mb-2" wire:click="add_q_and_a('CCS')">Add College Q&A</button>
                    <!-- User Table -->
                    <div class="table-responsive">
                        <table id="example2" class="table table-hover table-bordered" style="width:100%">
                            <caption>These data can be modified and structured before calling as a function in the model</caption>
                            <thead class="thead-dark">
                                <tr>
                                    @foreach ($ccs_q_and_a_filter as $item => $value)
                                        @if ($loop->first && $value)
                                            <th>{{$item}}</th>
                                        @elseif($value)
                                            <th>{{$item}}</th>
                                        @endif
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->

                                @forelse ($ccs_q_and_a_data as $item => $value)
                                    <tr wire:key="q_and_a_id-{{$value['q_and_a_id']}}">
                                        <td>{{$loop->index+1 }}</td>
                                        <td>
                                            @foreach($ccs_q_and_a_data[$item]['questions'] as $q_item => $q_value)
                                                <p>{{($q_item+1).'. '. $q_value}}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$value['tags']}}
                                        </td>
                                        <td>
                                            {{$value['target_type_details']}}
                                        </td>
                                        <td>
                                        @foreach($ccs_q_and_a_data[$item]['answers'] as $a_item => $a_value)
                                            <p>{{($a_item+1).'. '. $a_value}}</p>
                                        @endforeach
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" wire:click="edit_q_and_a({{$value['q_and_a_id']}})"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger" wire:click="delete_q_and_a({{$value['q_and_a_id']}})"><i class='bx bxs-trash'></i></button>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>                    
                </div>
            </div>
                            <!-- Add Q AND A modal -->

            <!-- CSC ----------------------------------------------------------------------------------------------------- tab -->
            <div class="tab-pane fade @if($active == 'csc_management') show active @endif ">
                <div class="container-fluid">
                <button class="btn btn-success float-right mt-2 mb-2" wire:click="add_q_and_a('CSC')">Add CSC Q&A</button>
                    <!-- Role Table -->
                    <div class="table-responsive">
                        <table id="example3" class="table table-hover table-bordered" style="width:100%">
                            <caption>These data can be modified and structured before calling as a function in the model</caption>
                            <thead class="thead-dark">
                                <tr>
                                    @foreach ($csc_q_and_a_filter as $item => $value)
                                        @if ($loop->first && $value)
                                            <th>{{$item}}</th>
                                        @elseif($value)
                                            <th>{{$item}}</th>
                                        @endif
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your table rows dynamically using server-side data or JavaScript -->
                                @forelse ($csc_q_and_a_data as $item => $value)
                                    <tr wire:key="q_and_a_id-{{$value['q_and_a_id']}}">
                                        <td>{{$loop->index+1 }}</td>
                                        <td>
                                            @foreach($csc_q_and_a_data[$item]['questions'] as $q_item => $q_value)
                                                <p>{{($q_item+1).'. '. $q_value}}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$value['tags']}}
                                        </td>
                                        <td>
                                            {{$value['target_type_details']}}
                                        </td>
                                        <td>
                                        @foreach($csc_q_and_a_data[$item]['answers'] as $a_item => $a_value)
                                            <p>{{($a_item+1).'. '. $a_value}}</p>
                                        @endforeach
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" wire:click="edit_q_and_a({{$value['q_and_a_id']}})"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger" wire:click="delete_q_and_a({{$value['q_and_a_id']}})"><i class='bx bxs-trash'></i></button>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                               
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>

                      
                    </div>
                </div>
                
                
                
            </div>

            <!-- End Add User Modal -->

            <!-- End Edit User Modal -->
            <div class="modal modal-xl fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddCollegeModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddCollegeModalLabel">Add</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @if(isset($q_and_a['q_and_a_id']))
                        <form wire:submit.prevent="save_add_q_and_a({{$q_and_a['q_and_a_id'],'CCS'}})">
                            <div class="modal-body cqh-30">
                                    <div class="form-group-row">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                @foreach($q_and_a['questions'] as $key => $value)
                                                <div class="form-group" >
                                                    <label for="editquestion">Question/s</label>
                                                    <textarea wire:key="question-{{$key}}" class="form-control form-control-sm" rows="3" id="editquestion" wire:model="q_and_a.questions.{{$key}}.question_details" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                                                </div>
                                                <button class="btn btn-danger btn-icon remove-entry float-right" type="button" wire:click="remove_question({{$key}})"><i class="bi bi-x-lg"></i></button>
                                                @endforeach
                                                <button wire:key="add_question" class="btn btn-success btn-icon float-right"  wire:click="add_question()" type="button"><i class="bi bi-plus-lg"></i></button>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                @foreach($q_and_a['answers'] as $key => $value)
                                                    <div class="form-group" >
                                                        <label for="editresponse">Responses</label>
                                                        <textarea wire:key="answer-{{$key}}"class="form-control form-control-sm" rows="3" id="editresponse" wire:model="q_and_a.answers.{{$key}}.answer_details" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
                                                    </div>
                                                    <button class="btn btn-danger btn-icon remove-entry float-right" type="button" wire:click="remove_answer({{$key}})"><i class="bi bi-x-lg"></i></button>
                                                @endforeach
                                                <button  wire:key="add_answer" class="btn btn-success btn-icon float-right" wire:click="add_answer()" type="button"><i class="bi bi-plus-lg"></i></button>
                                            </div>
                                            <!-- <div class="col-md-12 d-flex justify-content-center mb-3">
                                                <button id="edit_data" class="btn btn-success btn-icon float-right"  type="button"><i class="bi bi-plus-lg"></i></button>
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="edittag" class="">Tag</label>
                                                    <input type="text" id="edittag" class="form-control form-control-lg" value="General, Informational, Specific" data-role="tagsinput"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-grid gap-3">
                                                    <label class="form-label">For</label>
                                                    <div class="col d-inline-flex"> 
                                                        <div class="col-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" checked="checked" value="IT"> IT
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="CS"> CS
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="ACT"> ACT
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-grid gap-3">
                                                    <label class="form-label">Target</label>
                                                    <select class="form-select" wire:model="q_and_a.target_type_id" id="" >
                                                        @foreach ($target_types as $key =>$value)
                                                            <option value="{{$value->target_type_id }}">{{$value->target_type_details }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <!-- End Add Admin  -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal modal-xl fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editCollegeModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editCollegeModalLabel">Edit Q and A</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @if(isset($q_and_a['q_and_a_id']))
                        <form wire:submit.prevent="save_edit_q_and_a({{$q_and_a['q_and_a_id']}})">
                            <div class="modal-body cqh-30">
                                    <div class="form-group-row">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                @foreach($q_and_a['questions'] as $key => $value)
                                                <div class="form-group" >
                                                    <label for="editquestion">Question/s</label>
                                                    <textarea wire:key="question-{{$key}}" class="form-control form-control-sm" rows="3" id="editquestion" wire:model="q_and_a.questions.{{$key}}.question_details" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                                                </div>
                                                <button class="btn btn-danger btn-icon remove-entry float-right" type="button" wire:click="remove_question({{$key}})"><i class="bi bi-x-lg"></i></button>
                                                @endforeach
                                                <button wire:key="add_edit_question" class="btn btn-success btn-icon float-right"  wire:click="add_question()" type="button"><i class="bi bi-plus-lg"></i></button>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                @foreach($q_and_a['answers'] as $key => $value)
                                                    <div class="form-group" >
                                                        <label for="editresponse">Responses</label>
                                                        <textarea wire:key="answer-{{$key}}"class="form-control form-control-sm" rows="3" id="editresponse" wire:model="q_and_a.answers.{{$key}}.answer_details" onkeyup="this.value = this.value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type desire response.."></textarea>
                                                    </div>
                                                    <button class="btn btn-danger btn-icon remove-entry float-right" type="button" wire:click="remove_answer({{$key}})"><i class="bi bi-x-lg"></i></button>
                                                @endforeach
                                                <button  wire:key="add_edit_answer" class="btn btn-success btn-icon float-right" wire:click="add_answer()" type="button"><i class="bi bi-plus-lg"></i></button>
                                            </div>
                                            <!-- <div class="col-md-12 d-flex justify-content-center mb-3">
                                                <button id="edit_data" class="btn btn-success btn-icon float-right"  type="button"><i class="bi bi-plus-lg"></i></button>
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="edittag" class="">Tag</label>
                                                    <input type="text" id="edittag" class="form-control form-control-lg" value="General, Informational, Specific" data-role="tagsinput"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-grid gap-3">
                                                    <label class="form-label">For</label>
                                                    <div class="col d-inline-flex"> 
                                                        <div class="col-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" checked="checked" value="IT"> IT
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="CS"> CS
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="ACT"> ACT
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-grid gap-3">
                                                    <label class="form-label">Target</label>
                                                    <select class="form-select" wire:model="q_and_a.target_type_id" id="" >
                                                        @foreach ($target_types as $key =>$value)
                                                            <option value="{{$value->target_type_id }}">{{$value->target_type_details }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <!-- End Add Admin  -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal modal-xl fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DeleteModalLabel">Delete Q and A</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @if(isset($q_and_a['q_and_a_id']))
                            <p class="text-center">Are you sure you want to delete this?</p>
                            <form wire:submit.prevent="save_delete_q_and_a({{$q_and_a['q_and_a_id']}})">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
</div>
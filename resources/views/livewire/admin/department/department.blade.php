@section('title', 'Pybot | Departments') <!-- Set the page title -->

@section('department', 'active')
<div>
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Department</li>
                </ol>
            </nav>
        </div>
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="DeptTabs">
            <li class="nav-item">
                <a class="nav-link @if($active == 'it') show active @endif " wire:key="it"  wire:click="active_page('it')">IT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($active == 'cs') show active @endif " wire:key="cs"  wire:click="active_page('cs')">CS </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($active == 'act') show active @endif " wire:key="act"  wire:click="active_page('act')">ACT </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- IT Management Tab -->
            <div class="tab-pane fade @if($active == 'it') show active @endif " id="IT-management-tab">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <button class="btn btn-success float-right mt-2 mb-2" wire:click="add_q_and_a('IT')">Add IT Q&A</button>
                        <table id="example1" class="display responsive nowrap" style="width:100%">
                            <caption>These data can be modified and structured before calling as a function in the model</caption>
                            <thead class="thead-dark">
                                <tr>
                                @foreach ($it_q_and_a_filter as $item => $value)
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
                                @forelse ($it_q_and_a_data as $item => $value)
                                    <tr wire:key="q_and_a_id-{{$value['q_and_a_id']}}">
                                        <td>{{$loop->index+1 }}</td>
                                        <td>
                                            @foreach($it_q_and_a_data[$item]['questions'] as $q_item => $q_value)
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
                                        @foreach($it_q_and_a_data[$item]['answers'] as $a_item => $a_value)
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


            <!-- CS Management Tab -->
            <div class="tab-pane fade @if($active == 'cs') show active @endif " id="CS-management-tab">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <button class="btn btn-success float-right mt-2 mb-2" wire:click="add_q_and_a('CS')">Add CS Q&A</button>
                        <table id="example2" class="display responsive nowrap" style="width:100%">
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
                                @forelse ($cs_q_and_a_data as $item => $value)
                                    <tr wire:key="q_and_a_id-{{$value['q_and_a_id']}}">
                                        <td>{{$loop->index+1 }}</td>
                                        <td>
                                            @foreach($cs_q_and_a_data[$item]['questions'] as $q_item => $q_value)
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
                                        @foreach($cs_q_and_a_data[$item]['answers'] as $a_item => $a_value)
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- CS Management Tab -->
            <div class="tab-pane fade @if($active == 'act') show active @endif " id="ACT-management-tab">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <button class="btn btn-success float-right mt-2 mb-2" wire:click="add_q_and_a('ACT')">Add ACT Q&A</button>
                        <table id="example2" class="display responsive nowrap" style="width:100%">
                            <caption>These data can be modified and structured before calling as a function in the model</caption>
                            <thead class="thead-dark">
                                <tr>
                                @foreach ($act_q_and_a_filter as $item => $value)
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
                                @forelse ($act_q_and_a_data as $item => $value)
                                    <tr wire:key="q_and_a_id-{{$value['q_and_a_id']}}">
                                        <td>{{$loop->index+1 }}</td>
                                        <td>
                                            @foreach($act_q_and_a_data[$item]['questions'] as $q_item => $q_value)
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
                                        @foreach($act_q_and_a_data[$item]['answers'] as $a_item => $a_value)
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal modal-xl fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddModalLabel">Add</h5>
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
            <div class="modal modal-xl fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Q and A</h5>
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

@section('title', 'Pybot | Departments') <!-- Set the page title -->

@section('department', 'active')
<div>
        <!-- Main Content -->
        <main id="main" class="main">
        <div class="pagetitle">
            <h1>Department Management</h1>
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Department</li>
                </ol>
            </nav>
        </div>
        <button class="btn btn-success float-right pb-2" data-toggle="modal" data-target="#AddModal">Add Data</button>


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
                    @foreach ($it_q_and_a_data_filter as $item => $value)
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
                    @forelse ($it_data as $item => $value)
                    <tr>
                        <td></td>
                        <td>{{$loop->index+1 }}</td>
                        <td>
                            @foreach($it_data[$item]['questions'] as $q_item => $q_value)
                                <p>{{($item+1).'. '. $q_value}}</p>
                            @endforeach
                        </td>
                        <td>{{$value['tags']}}</td>
                        <td>
                        @foreach($it_data[$item]['answers'] as $a_item => $a_value)
                            <p>{{($a_item+1).'. '. $a_value}}</p>
                        @endforeach
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    @empty
                    <td>NO RECORDS</td>
                    @endforelse
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
                @foreach ($cs_q_and_a_data_filter as $item => $value)
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
                @forelse ($cs_data as $item => $value)
                    <tr>
                        <td></td>
                        <td>{{$loop->index+1 }}</td>
                        <td>
                            @foreach($cs_data[$item]['questions'] as $q_item => $q_value)
                                <p>{{($item+1).'. '. $q_value}}</p>
                            @endforeach
                        </td>
                        <td>{{$value['tags']}}</td>
                        <td>
                        @foreach($cs_data[$item]['answers'] as $a_item => $a_value)
                            <p>{{($a_item+1).'. '. $a_value}}</p>
                        @endforeach
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    @empty
                    <td>NO RECORDS</td>
                    @endforelse
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
              @foreach ($act_q_and_a_data_filter as $item => $value)
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
              @forelse ($act_data as $item => $value)
                    <tr>
                        <td></td>
                        <td>{{$loop->index+1 }}</td>
                        <td>
                            @foreach($act_data[$item]['questions'] as $q_item => $q_value)
                                <p>{{($item+1).'. '. $q_value}}</p>
                            @endforeach
                        </td>
                        <td>{{$value['tags']}}</td>
                        <td>
                        @foreach($act_data[$item]['answers'] as $a_item => $a_value)
                            <p>{{($a_item+1).'. '. $a_value}}</p>
                        @endforeach
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class='bx bxs-edit'></i></button>
                            <button class="btn btn-danger"><i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                    @empty
                    <tr><td>NO RECORDS</td></tr>
                    @endforelse
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
            <form>
                <div class="modal-body cqh-50">
                    <button id="add_data" class="btn btn-success btn-rounded btn-icon float-right"  type="button"><i class="bi bi-plus-circle-dotted"></i></button>
                        <div class="form-group-row">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="add-container">
                                        <div class="form-group">
                                            <label for="addquestion">Question/s</label>
                                            <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]"  placeholder="Type Question"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="add-container2">
                                        <div class="form-group">
                                            <label for="addresponse">Responses</label>
                                            <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]"  placeholder="Type desire response.."></textarea>
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
                                                <select wire:model.defer="qa_for" class="form-control">
                                                    <option value="0">Select item</option>
                                                @foreach($qa_type as $item => $value)
                                                    <option value="{{$value->q_and_a_type_id}}">{{$value->q_and_a_type_details}}</option>
                                                @endforeach 
                                                </select>
                                        </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    <!-- End Add Admin  -->
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
            </form>
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
                                        <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]"  placeholder="Type Question"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="edit-container2">
                                    <div class="form-group">
                                        <label for="addresponse">Responses</label>
                                        <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]"  placeholder="Type desire response.."></textarea>
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


<script>
$('#add_data').on('click', function() {
    var newIntent = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]"  placeholder="Type Question"></textarea>
            </div>

    `;
    var newIntent2 = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]"  placeholder="Type desire response.."></textarea>
            </div>

    `;
    $('.add-container').append(newIntent);
    $('.add-container2').append(newIntent2);


});
$('#edit_data').on('click', function() {
    var newIntent = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addquestion" name="addquestion[]"  placeholder="Type Question"></textarea>
            </div>

    `;
    var newIntent2 = `
            <div class="form-group">
                <textarea class="form-control form-control-sm" rows="3" id="addresponse" name="addresponse[]"  placeholder="Type desire response.."></textarea>
            </div>

    `;
    $('.edit-container').append(newIntent);
    $('.edit-container2').append(newIntent2);


});
</script>

    </main><!-- End #main -->
</div>

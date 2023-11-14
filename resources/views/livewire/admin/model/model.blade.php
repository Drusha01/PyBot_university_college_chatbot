<div>
@section('title', 'Pybot | Model') <!-- Set the page title -->

@section('model', 'active')
<div>
<main id="main" class="main">

    <div class="pagetitle">
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
                    <button class="btn btn-success float-right mt-2 mb-2" data-toggle="modal" data-target="#addModal">Create New Intents</button>
                        <!-- Admin Table -->
                        <div class="table-responsive">
                            <table id="example1" class="table table-hover table-bordered" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        @foreach ($intent_data_filter as $item => $value)
                                            @if ($loop->first && $value)
                                                <th>{{$item}}</th> 
                                            @elseif($value)
                                                <th>{{$item}}</th>
                                            @endif
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($intent_lists as $item => $value)
                                    <tr wire:key="data-{{$loop->index}}">
                                    @if($intent_data_filter['select'])
                                    <td   wire:click="intent_selected({{$loop->index}})"><input type="checkbox" 
                                    
                                    >
                                    </td>
                                    @endif
                                    @if($intent_data_filter['#'])
                                        <td>{{ $loop->index+1 }}</td>
                                    @endif
                                    @if($intent_data_filter['path'])
                                        <td>{{ $value->directory_path }}</td>
                                    @endif
                                    @if($intent_data_filter['version'])
                                        <td>{{ $value['intent_name'] }}</td>
                                    @endif
                                    @if($intent_data_filter['date_created'])
                                        <td>{{ $value['date_created'] }}</td>
                                    @endif
                                    </tr>
                                @empty
                                    <td class="text-center font-weight-bold" colspan="42">
                                        NO RECORDS 
                                    </td>
                                @endforelse
                                    
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
                            <table id="example2" class="table table-hover table-bordered" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                    @foreach ($model_list_filter as $item => $value)
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
                                @forelse ($model_list as $item => $value)
                                    <tr wire:key="data-{{$loop->index}}">
                                    @if($model_list_filter['select'])
                                    <td   wire:click="intent_selected({{$loop->index}})"><input type="checkbox" 
                                    
                                    >
                                    </td>
                                    @endif
                                    @if($model_list_filter['#'])
                                        <td>{{ $loop->index+1 }}</td>
                                    @endif
                                    @if($model_list_filter['path'])
                                        <td>{{ $value->directory_path }}</td>
                                    @endif
                                    @if($model_list_filter['model'])
                                        <td>{{ $value['model_name'] }}</td>
                                    @endif
                                    @if($model_list_filter['date_created'])
                                        <td>{{ $value['date_created'] }}</td>
                                    @endif
                                    </tr>
                                @empty
                                    <td class="text-center font-weight-bold" colspan="42">
                                        NO RECORDS 
                                    </td>
                                @endforelse
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
                    
                    <button class="btn btn-success float-right mt-2 mb-2 mx-1" data-toggle="modal" data-target="#deployModal">Deploy</button>
                    <button class="btn btn-warning float-right mt-2 mb-2 mx-1" wire:click="restart_deployment()" >Restart</button>
                    <button class="btn btn-danger float-right mt-2 mb-2 mx-1" wire:click="end_deployment()" >End</button>
                        <!-- Admin Table -->
                        <div class="table-responsive">
                            <hr>
                            <div class="text-center"> Currently deployed: {{$selected_model}} </div>
                            <hr>
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
                <div class="modal-body cqh-25">
                <p class="text-center">Are you sure you want to retrain the current data?</p>
                <p class="text-center">Note! this may take some time...</p>
                    
                    <!-- End Add Admin  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="create_new_intent()">Create</button>
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
                <div class="modal-body cqh-25">
                    <!-- Add content for the "Train" modal here -->
                    <label for="trainingData">Select data to train:</label>
                    <br>
                    <select wire:model.defer="selected_intent" class="form-control">
                    <option value=""> Select data </option>
                    @forelse ($intent_lists as $item => $value)
                        <option value="{{$loop->index+1}}">{{ $value['intent_name'] }}</option>
                    @empty
                        <option value=""> NO RECORD </option>
                    @endforelse
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click=train()>Train</button>
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
                <div class="modal-body cqh-25">
                    <!-- Add content for the "deploy" modal here -->
                    <h5>Currently deployed model: model xx</h5>
                    <select wire:model.defer="selected_model" class="form-control">
                        <option value="-1"> Select model </option>
                    @forelse ($model_list as $item => $value)
                        <option value="{{$loop->index}}">{{ $value['model_name'] }}</option>
                    @empty
                        <option value=""> NO RECORD </option>
                    @endforelse
                    </select>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="deploy_model()">Deploy</button>
                </div>
            </div>
        </div>
    </div>

    </main><!-- End #main -->
</div>
</div>

<div>
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profanity Words</li>
                </ol>
            </nav>
        </div>
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="profanity-words">
            <li class="nav-item">
                <a class="nav-link show active" wire:key="it" >Profanity Words</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- IT Management Tab -->
            <div class="tab-pane fade show active py-5" id="IT-management-tab">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <button class="btn btn-success float-right mt-2 mb-2" wire:click="add_profanity_words()">Add profanity words</button>
                        <table id="example1" class="table table-hover table-bordered" style="width:100%">
                            <caption>These data can be modified and structured as a preprocessor in chatbot</caption>
                            <thead class="thead-dark">
                                <tr>
                                @foreach ($profanity_words_filter as $item => $value)
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
                                @forelse ($profanity_words_data as $item => $value)
                                    <tr wire:key="profanity_words-{{$value->id}}">
                                    @if($profanity_words_filter['#'])
                                        <td>{{$loop->index+1 }}</td>
                                    @endif
                                    @if($profanity_words_filter['Sentence'])
                                        <td>{{$value->words}}</td>
                                    @endif
                                    @if($profanity_words_filter['Actions'])
                                        <td class="text-center">
                                            <button class="btn btn-primary" wire:click="edit_profanity_words({{$value->id}})"><i class='bx bxs-edit'></i></button>
                                            <button class="btn btn-danger" wire:click="delete_profanity_words({{$value->id}})"><i class='bx bxs-trash'></i></button>
                                        </td>
                                        @endif
                                    </tr>
                                @empty
                                @endforelse
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                <div class="d-flex justify-content-center text-dark py-5" @click.debounce.250ms="scrollTo({top: 0, behavior: 'smooth'})">
                
                </div>
            </div>



            <div class="modal modal-md fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddModalLabel">Add</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form wire:submit.prevent="save_add_profanity_words()">
                            <div class="form-group col-md-12">
                                <label for="editRoleName">Words</label>
                                <input type="text" class="form-control" placeholder="enter profanity words" wire:model.defer="profanity_words.words" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
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
                        <form wire:submit.prevent="save_edit_profanity_words(@if($profanity_words['id']) {{$profanity_words['id']}} @endif)">
                            <div class="form-group col-md-12">
                                <label for="editRoleName">Words</label>
                                <input type="text" class="form-control" placeholder="enter profanity words" wire:model.defer="profanity_words.words" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal modal-xl fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form wire:submit.prevent="save_delete_profanity_words(@if($profanity_words['id']) {{$profanity_words['id']}} @endif)">
                            <p class="text-center">Are you sure you want to delete this profanity words?</p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->
</div>

<div class="container "style="margin-top:120px">
        <div class="row">
            <!-- Left Column (Chat) -->
            <div class="col-md-12">
                <div class="card border p-0">
                    <div class="card-header bg-success">
                        <h2 class="text-center">Chat Support</h2>
                    </div>
                    <div class="card-body overflow-auto chat-box-six border-bottom" style="max-height:400px" id="chat_content"  wire:poll.2000ms="update_data()">
                        <div class="">
                        <!-- Student's message -->
                        @if($chat_box)
                            @forelse ($chat_content as $key =>$value)
                            @if($value->cbc_user_id == $user_details['user_id'])
                            <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                                <div>
                                    <strong class="mr-3 mb-2 text-right">Me</strong> 
                                    <div class="chat-comment d-table max-w-p70 bg-primary mr-3 mb-15 px-15 py-10 rounded10 bter-0" >
                                        <p class="mb-0 p-2 " >{{$value->cbc_chat_content}}</p>
                                    </div>

                                </div>
                            </div>
                            @else
                            <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                                <div>
                                    <strong class="ml-3 mb-2">Admin</strong> 
                                    <div class="chat-comment d-table max-w-p70 bg-light ml-3 mb-15 px-15 py-10 rounded10 bter-0">
                                        <p class="mb-0 p-2 text-wrap">{{$value->cbc_chat_content}}</p>
                                    </div>
                                    
                                </div>
                            </div>
                            @endif
                            @empty
                            @endforelse
                        @else
                        <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                            <div>
                                <strong class="ml-3 mb-2">Admin</strong> 
                                <div class="chat-comment d-table max-w-p70 bg-light ml-3 mb-15 px-15 py-10 rounded10 bter-0">
                                    <p class="mb-0 p-2 text-wrap">Hi, Start your conversation with admin</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        @endif
                        </div>
                       
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control border-0" wire:model="chat_content_details" placeholder="Type your message...">
                        <div class="input-group-append">
                            <button class="btn btn-success m-0" style="border-radius: 0px 0px 3px 0px !important;" wire:click="send_message()"> Send </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
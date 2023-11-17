<?php

namespace App\Http\Livewire\Components\Chat;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Chat extends Component
{
    public $chat_type;
    public function render()
    {
        return view('livewire.components.chat.chat');
    }
    public function update_chat_type(){
    }


}

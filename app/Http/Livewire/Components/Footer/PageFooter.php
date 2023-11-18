<?php

namespace App\Http\Livewire\Components\Footer;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PageFooter extends Component
{
    public function render()
    {
        return view('livewire.components.footer.page-footer');
    }
}

<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class PartnershipComponent extends Component
{
    public $partnerships;
    public function mount(){
        $this->partnerships = Contact::where('type','partnership')->latest()->get();
    }
    public function render()
    {
        return view('livewire.contact.partnership-component');
    }
}
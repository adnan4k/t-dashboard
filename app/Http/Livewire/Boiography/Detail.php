<?php

namespace App\Http\Livewire\Boiography;

use App\Models\Biography;
use Livewire\Component;

class Detail extends Component
{
    public $biography;
    public $openModal = false;
    protected $listeners = ['openDetailModal' => 'mount'];
    public function openDetailModal(Biography $biography)
    {
        dd($biography);
        $this->$biography = $biography;
        $this->openModal = true;
    }
    public function mount(Biography $biography)
    {
        $this->$biography = $biography;
    }
    public function render()
    {
        return view('livewire.boiography.detail');
    }
}

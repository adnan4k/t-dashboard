<?php

namespace App\Http\Livewire\Boiography;

use App\Models\Biography;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $name;
    public $position;
    public $detail;
    public $image;
    public $is_edit;

    protected $rules = [
        'name' => 'required|string|max:255', // Name is required, must be a string, max length 255
        'position' => 'required|string|max:255', // Position is required, must be a string, max length 255
        'detail' => 'required|string', // Detail is required and must be a string
        'image' => 'nullable|image|max:2048', // Optional image, must be an image file (max 2MB)
    ];
    public function render()
    {
        return view('livewire.boiography.form');
    }

    public function save()
    {
        $this->validate();
        $biography = $this->is_edit ? Biography::find($this->id) : new Biography();

        $biography->name = $this->name;
        $biography->position = $this->position;

        $biography->detail = $this->detail;

        if ($this->image) {
            if ($this->is_edit && $biography->image) {
                Storage::delete($biography->image);
            }

            $path = $this->image->store('biography', 'public'); // Save in the 'storage/app/public/biography' directory
            $biography->image = $path;
        }

        $biography->save();
        $this->reset();

        return redirect()->route('biography');
    }
}

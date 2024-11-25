<?php

namespace App\Http\Livewire\Opportunity\Scholarship;

use App\Models\Scholarship;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $title;
    public $author;
    public $date;
    public $category;
    public $comments = 0; // Default value
    public $image;
    public $link;
    public $is_edit;
    protected $rules = [
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'date' => 'required|date',
        'category' => 'required|string|max:255',
        'comments' => 'nullable|integer|min:0',
        'image' => 'required|url|max:2048', // URL of the image
        'link' => 'required|url|max:2048',
    ];
    
    public function save()
    {
        $this->validate();
    
        $scholarship = $this->is_edit ? Scholarship::findOrFail($this->id) : new Scholarship();
    
        $scholarship->title = $this->title;
        $scholarship->author = $this->author;
        $scholarship->date = $this->date;
        $scholarship->category_id = $this->category_id;
        $scholarship->comments = $this->comments;
    
        if ($this->image) {
            if ($this->is_edit && $scholarship->image) {
                Storage::disk('public')->delete($scholarship->image);
            }
    
            $path = $this->image->store('scholarships', 'public');
            $scholarship->image = $path;
        }
    
        $scholarship->link = $this->link;
    
        $scholarship->save();
    
        $this->reset();
        // toastr()->success($this->is_edit ? 'Scholarship updated successfully!' : 'Scholarship created successfully!');
        return redirect()->route('scholarships');
    }
    
    public function render()
    {
        return view('livewire.opportunity.scholarship.form');
    }
}

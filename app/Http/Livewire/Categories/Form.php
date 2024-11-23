<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Form extends Component
{
    public $title;
    public $description;
    public $is_edit;
    public $isOpen = false;
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',

    ];
  public function openModal(){
    $this->isOpen = true;
    // dd('here it is ');
  }

    public function save()
    {
        $this->validate();
        $category = '';
        if ($this->is_edit) {
            $category = Category::find($this->id);
        } else {
            $category  = new Category();
        }
        $category->title = $this->title;
        $category->description = $this->description;

        $category->save();
        $this->reset();
        // toastr()->success('Created Successfully');
        return redirect()->route('category');
    }

    public function render()
    {
        return view('livewire.categories.form');
    }
}

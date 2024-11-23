<?php

namespace App\Http\Livewire\Blogs;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $image;
    public $author;
    public $category_id;
    public $is_edit;
    public $categories;
    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'required',
        'author' => 'required|string',
        'category_id' => 'required',

    ];
    public function mount()
    {
        $this->categories = Category::get();
    }
    public function save()
    {
        // dd('here is');

        $this->validate();
        $blogs = $this->is_edit ? Blog::find($this->id) : new Blog();

        $blogs->title = $this->title;
        $blogs->content = $this->content;
        $blogs->category_id  = $this->category_id;
        $blogs->author = $this->author;
        if ($this->image) {
            if ($this->is_edit && $blogs->image) {
                Storage::delete($blogs->image);
            }

            $path = $this->image->store('blogs', 'public'); // Save in the 'storage/app/public/blogs' directory
            $blogs->image = $path;
        }

        $blogs->save();
        $this->reset();
        // toastr()->success('Created Successfully');
        return redirect()->route('blogs');
    }

    public function render()
    {
        return view('livewire.blogs.form');
    }
}

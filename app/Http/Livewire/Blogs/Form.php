<?php

namespace App\Http\Livewire\Blogs;

use App\Models\Blog;
use Livewire\Component;

class Form extends Component
{
    public $title;
    public $content;
    public $image;
    public $author;
    public $category_id;
    public $is_edit;
    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'required',
        'author' => 'required|string',
        'category_id' => 'required',

    ];

    public function save()
    {
        $this->validate();
        $blogs = '';
        if ($this->is_edit) {
            $blogs = Blog::find($this->id);
        } else {
            $blogs  = new Blog();
        }
        $blogs->title = $this->title;
        $blogs->content = $this->content;
        $blogs->category_id  = $this->category_id;
        $blogs->author = $this->author;


        $blogs->save();
        $this->reset();
        toastr()->success('Created Successfully');
        return redirect()->route('blogs');
    }

    public function render()
    {
        return view('livewire.blogs.form');
    }
}

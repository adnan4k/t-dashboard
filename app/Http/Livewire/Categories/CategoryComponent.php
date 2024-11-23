<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.categories.category-component');
    }
}

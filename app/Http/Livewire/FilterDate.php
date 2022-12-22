<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;

class FilterDate extends Component
{
    public $category_id;
    public $query;

    public function render()
    {
        $categories = Category::get();
        return view('livewire.filter-date', ['categories'=>$categories]);
    }

    public function filter()
    {

       $saved= $this->emitTo('show-posts','reloadPosts', $this->category_id, $this->query);
        dd($saved);
    }

    public function hei(){
        dd('sss');
    }
}

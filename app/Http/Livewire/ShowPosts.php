<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts;

    protected $listeners = ['reloadPost' => 'reloadPost'];
    //This method will be avaliable on blad becouse is livewire!
    public function mount()
    {
        $this->posts = Post::get();
    }
    //====================================================================

    public function render()
    {

        return view('livewire.show-posts');
    }
    //==========================================================================

    public function reloadPosts($category_id, $query)
    {
        dd('hi');
        $this->posts=Post::query();

        if($category_id)
        {
            $this->posts = $this->posts->where('category_id', $category_id);
        }

        if($query)
        {
            $this->posts = $this->posts->where('title', 'like' , '%' .$query . '%');
        }

        $this->posts= $this->posts->get();
    }
}

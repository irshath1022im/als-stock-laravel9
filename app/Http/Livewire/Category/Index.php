<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';




    public function render()
    {
        $result = Category::with('store')
                        ->orderByDesc('id')
                        ->paginate(10);
        return view('livewire.category.index',['categories' => $result]);
    }
}

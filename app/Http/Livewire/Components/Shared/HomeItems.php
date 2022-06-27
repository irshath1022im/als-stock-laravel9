<?php

namespace App\Http\Livewire\Components\Shared;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class HomeItems extends Component
{

    public $category_id;


    use WithPagination; 

    protected $paginationTheme = 'bootstrap';

    protected $listeners=[
            'sendSelectedCategory' => 'selectedCategory',
            'sentSelectedStore' => 'receiveSelectedStore'
        ];


    public function selectedCategory($category_id)
    {
        $this->category_id = $category_id;
    }

    public function receiveSelectedStore()
    {
        $this->category_id = null;
    }

    public function render()
        {
            $result = Item::when($this->category_id, function($q){
                return $q->where('category_id', $this->category_id);
            })
            ->when($this->category_id == null, function($q){
                return $q;
            })
            ->paginate(6);
            return view('livewire.components.shared.home-items',['items' => $result]);
        }
}

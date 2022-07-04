<?php

namespace App\Http\Livewire\Components\Shared;

use App\Models\Item;
use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class HomeItems extends Component
{

    public $category_id;
    public $store_id = 1;


    use WithPagination; 

    protected $paginationTheme = 'bootstrap';

    protected $listeners=[
            'sendSelectedCategory' => 'selectedCategory',
            'sentSelectedStore' => 'receiveSelectedStore'
        ];


    public function selectedCategory($category_id)
    {
        $this->category_id = $category_id;
        $this->resetPage();
    }

    public function receiveSelectedStore($store_id)
    {
        $this->category_id = null;
        $this->store_id = $store_id;
        $this->resetPage();
    }



    public function render()
        {
           
            // when the category is null

            if(!$this->category_id)
            {
                $store = Store::with('items')->find($this->store_id);
                $itemCollection = $store->items;
            
                $result = collect($itemCollection)->simplePaginate(9);
            } else {

                $result = Item::when($this->category_id, function($q){
                    return $q->where('category_id', $this->category_id);
                })
                ->paginate(6);
    

            }

            return view('livewire.components.shared.home-items', ['items' => $result]);
        }


    
}

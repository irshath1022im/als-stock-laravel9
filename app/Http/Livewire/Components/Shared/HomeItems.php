<?php

namespace App\Http\Livewire\Components\Shared;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class HomeItems extends Component
{

    public $category_id;
    public $store_id;


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

            //When the store id is null, display all items
            //when the store id is not null
                //if category is null , related store items
                //if category is not null, related store and categoreis


            if(!isset($this->store_id))
            {
                $result = Item::with('category')->paginate(12);
            }
            elseif(isset($this->store_id) && !isset($this->category_id))

            {
                // $storeItems = Store::with('category','items')->find($this->store_id);


                // $result = $storeItems->items->simplePaginate(10);

                //get the categories belongs to selected store

                $categoriesForStoreId = Category::where('store_id', $this->store_id)->get();
                // dd($categoriesForStoreId);

                // dd($categoriesForStoreId->pluck('id'));

                // $categoryCollection = $categoriesForStoreId->get('id');
                //use the

                // $itemsQUery = Item::with(['category' => function($query){
                //     return $query->with(['store' => function($q){
                //         return $q->where('id', $this->store_id);
                //     }]);
                // }])->get();



                // $result = $itemsQUery->simplePaginate(4);

                $result = Item::whereIn('category_id', $categoriesForStoreId->pluck('id'))->with('category')->paginate(12);

            }
            elseif(isset($this->store_id) && isset($this->category_id))
            {
                $result = Item::where('category_id', $this->category_id)->with('category')->paginate(10);
            }

            // if(!$this->category_id)
            // {
            //     $store = Store::with('items')->find($this->store_id);
            //     $itemCollection = $store->items;

            //     $result = collect($itemCollection)->simplePaginate(9);


            // } else {

            //     $result = Item::when($this->category_id, function($q){
            //         return $q->where('category_id', $this->category_id);
            //     })
            //     ->with('category')
            //     ->paginate(6);


            // }

            return view('livewire.components.shared.home-items', ['items' => $result]);
        }



}

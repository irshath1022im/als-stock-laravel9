<?php

namespace App\Http\Livewire\StoreRequestItems;

use App\Models\StoreRequestItem;
use Livewire\Component;

class StoreRequestItems extends Component
{

    public $store_request_id;
    public $selectedItemIdForDelete;

    protected $listeners=['newItemAdded'];


    public function newItemAdded()
    {

    }


    public function itemForDelete($item_id)
    {
        $this->selectedItemIdForDelete = $item_id;
        $this->dispatchBrowserEvent('openModal');
    }

    public function deleteItem()
    {
        StoreRequestItem::find($this->selectedItemIdForDelete)->delete();

        $this->selectedItemIdForDelete = null;

        session()->flash('message', 'Item Has been Deleted');

        $this->newItemAdded();


    }

    public function mount($store_request_id)
    {
        $this->store_request_id = $store_request_id;
    }

    public function render()
    {

        $result = StoreRequestItem::where('store_request_id', $this->store_request_id)
                                    ->with(['itemSize' => function($query){
                                        return $query->with('item','size');
                                    }])
                                    ->get();
        return view('livewire.store-request-items.store-request-items',['store_request_items' => $result]);
    }
}

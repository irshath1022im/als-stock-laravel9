<?php

namespace App\Http\Livewire\StoreRequestItems;

use App\Models\ItemSize;
use App\Models\ItemTransectionLog;
use App\Models\StoreRequestItem;
use Livewire\Component;

class StoreRequestItemsForm extends Component
{

    public $store_request_id;
    public $item_size_id;
    public $qty;
    public $remark;
    public $selectedItemId;
    public $item_sizes=[];
    public $availableQty;



    protected $rules=[
        'store_request_id' => 'required',
        'item_size_id' => 'required',
        'qty' => 'required',
        'remark'=>''
    ];

    protected $listeners=['sendSelectedItemId' => 'receiveSelectedItemId'];


    public function receiveSelectedItemId($id)
    {
        $this->selectedItemId = $id;
        $this->item_sizes = ItemSize::where('item_id', $id)->with('size')->get();

    }

    public function updatedItemSizeId()
    {

            if(!empty($this->item_size_id ))

            {
                $this->availableQty = $this->item_size_id;

                $total = ItemSize::with('transectionLogs','storeRequestItems')->find($this->item_size_id);

                $this->availableQty = $total->transectionLogs->sum('qty') - $total->storeRequestItems->sum('qty');
            }



    }


    public function formSubmit()
    {
        $validated =$this->validate();

        $data= [
            'store_request_id' => $validated['store_request_id'],
            'item_size_id' => $validated['item_size_id'],
            'qty' => $validated['qty'],
            'remark' => $validated['remark']
        ];

        StoreRequestItem::create($data);
        $this->resetExcept('store_request_id');
        session()->flash('created', 'Item Has been Added...');
    }

    public function mount($store_request_id)
    {
        $this->store_request_id = $store_request_id;
    }


    public function render()
    {
        return view('livewire.store-request-items.store-request-items-form');
    }
}

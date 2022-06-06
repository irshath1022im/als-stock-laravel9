<?php

namespace App\Http\Livewire\Components\ItemQty;

use App\Models\ItemTransectionLog;
use Livewire\Component;

class QtyByItemSize extends Component
{
    public $item_id;
    public $item_size;

    public function mount($item_id, $size_id)
    {

        $this->item_id = $item_id;
        $this->item_size = $size_id;

    }

    

    public function render()
    {
       $result = ItemTransectionLog::with('size')->where('item_id', $this->item_id)
             ->where('size_id', $this->item_size)
             ->sum('qty');
        

        return view('livewire.components.item-qty.qty-by-item-size',['qty' => $result]);
    }
}

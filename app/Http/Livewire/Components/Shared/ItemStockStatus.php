<?php

namespace App\Http\Livewire\Components\Shared;

use App\Models\ItemTransectionLog;
use Livewire\Component;

class ItemStockStatus extends Component
{

        public $qty;

    public function mount($item_id)
    {

       $this->qty = ItemTransectionLog::where('item_id', $item_id)
                                        ->sum('qty');
    //    $this->qty = $result->sum('qty');
    }


    public function render()
    {
        return view('livewire.components.shared.item-stock-status');
    }
}

<?php

namespace App\Http\Livewire\Components\ItemSize;

use App\Models\Item;
use App\Models\ItemSize;
use App\Models\Size;
use Livewire\Component;

class ItemSizeByItemId extends Component
{

    public $item_id;
    public $item_name;
    // public $item_sizes;
    public $sizes= [];



    public function mount($item_id)
    {
        // $this->sizes = Size::get();
        $this->item_id = $item_id;
        // $this->item_name = $item['item'];
        // $this->item_sizes = $item_sizes;
    }



    public function render()
    {
        // $result = Item::with('itemSize')->find($this->item_id);

        $result = ItemSize::where('item_id', $this->item_id)->with('size','transectionLogs')->get();

        return view('livewire.components.item-size.item-size-by-item-id',['item_sizes' => $result]);
    }




}

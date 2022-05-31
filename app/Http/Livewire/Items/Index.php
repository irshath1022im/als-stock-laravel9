<?php

namespace App\Http\Livewire\Items;

use App\Models\Item;
use Livewire\Component;

class Index extends Component
{

    

    public function render()
    {
        $result = Item::paginate(5);
        return view('livewire.items.index', ['items' => $result]);
    }
}

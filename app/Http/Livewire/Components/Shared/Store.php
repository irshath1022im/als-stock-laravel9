<?php

namespace App\Http\Livewire\Components\Shared;

use App\Models\Store as ModelsStore;
use Livewire\Component;

class Store extends Component
{

    public $selected_store;


    public function updatedSelectedStore()
    {
        $this->emit('sentSelectedStore', $this->selected_store);

    }


    public function render()
    {
        $result = ModelsStore::get();
        return view('livewire.components.shared.store',['stores' => $result]);
    }
}

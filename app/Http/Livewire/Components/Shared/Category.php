<?php

namespace App\Http\Livewire\Components\Shared;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{

    public $store=1;
    public $selected_category;

    protected $listeners = ['sentSelectedStore' => 'SelectedStore'];

    public function SelectedStore($store)
    {
        $this->selected_category = null;
        $this->store = $store;
    }

    public function updatedSelectedCategory()
    {
        $this->emit('sendSelectedCategory', $this->selected_category);
    }

    

    public function render()
    {

        $result = ModelsCategory::where('store_id' , $this->store)->get();
        return view('livewire.components.shared.category',['categories' => $result]);
    }
}

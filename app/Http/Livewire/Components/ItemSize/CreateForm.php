<?php

namespace App\Http\Livewire\Components\ItemSize;

use App\Models\ItemSize;
use App\Models\Size;
use Livewire\Component;

class CreateForm extends Component
{

    public $sizes = [];
    public $size;
    public $item_id;

    protected $rules = [
        'size' => 'required',
        'item_id' => 'required'
    ];


    public function formSubmit()
    {
        $this->validate();

        $result = ItemSize::firstOrCreate([
            'item_id' => $this->item_id,
            'size_id' => $this->size
        ]);

    //   dd($result);

        session()->flash('created', 'Item Size has been addedd');
        redirect()->route('items.show',['item' => $this->item_id]);

    }

    public function mount($item_id)
    {

        $this->sizes = Size::get();
        $this->item_id= $item_id;
    }




    public function render()
    {
        return view('livewire.components.item-size.create-form');
    }
}

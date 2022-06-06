<?php

namespace App\Http\Livewire\Components\Transections;

use App\Models\ItemSize;
use App\Models\ItemTransectionLog;
use App\Models\TransectionType;
use Livewire\Component;

class CreateForm extends Component
{
    
    public $item_id;
    public $availableSizes= [];
    public $size_id;
    public $transections_type=[];
    public $qty;
    public $transection_type;
    public $remark;
    public $date;

    protected $rules=[
        'date' => 'required',
        'item_id' => 'required',
        'size_id' => 'required',
        'qty' => 'required',
        'transection_type' => 'required',
        'remark' => ''
    ];


    public function formSubmit()
    {
        $validated = $this->validate();

        ItemTransectionLog::create($validated);

        $this->reset(['size_id', 'qty','transection_type']);

        session()->flash('created', 'Qty is being added');


        
    }


    public function mount($item_id)
    {
        $this->item_id = $item_id;
        $this->availableSizes = ItemSize::with('size')->where('item_id', $item_id)
                                ->get();

        $this->transections_type = TransectionType::get();


    }

    
    public function render()
    {
        return view('livewire.components.transections.create-form');
    }
}

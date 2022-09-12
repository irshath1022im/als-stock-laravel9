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
    public $item_size_id;

    protected $rules=[
        'date' => 'required',
        'item_size_id' => 'required',
        'qty' => 'required',
        'transection_type' => 'required',
        'remark' => ''
    ];

    protected $listeners =['dataForTransectionForm'];

    public function dataForTransectionForm($item_id, $size_id)
    {
        $this->item_id = $item_id;
        $this->item_size_id = $size_id;
    }

    public function formSubmit()
    {
        $validated = $this->validate();

        ItemTransectionLog::create($validated);

        // $this->reset(['size_id', 'qty','transection_type']);

        session()->flash('created', 'Qty is being added');

        return redirect()->route('items.show',['item' => $this->item_id]);



    }


    public function mount()
    {
        // $this->item_id = $item_id;
        // $this->availableSizes = ItemSize::with('size')->where('item_id', $item_id)
        //                         ->get();

        $this->transections_type = TransectionType::get();


    }


    public function render()
    {
        return view('livewire.components.transections.create-form');
    }
}

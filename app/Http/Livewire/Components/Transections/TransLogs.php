<?php

namespace App\Http\Livewire\Components\Transections;

use App\Models\ItemTransectionLog;
use Livewire\Component;

class TransLogs extends Component
{

    public $item_id;

    public function mount($item_id)
    {
        $this->item_id = $item_id;
    }

    public function render()
    {

        $result = ItemTransectionLog::with(['size','transectionType'])->where('item_id', $this->item_id)->get();
        return view('livewire.components.transections.trans-logs',['logs' => $result]);
    }
}

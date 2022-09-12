<?php

namespace App\Http\Livewire\StoreRequest;

use App\Models\StoreReuqest;
use Livewire\Component;

class Index extends Component
{

    public $isModalOpen=false;

    protected $listeners=['closeOpenForm'];


    public function closeOpenForm()
    {
        $this->isModalOpen = false;
    }


    public function openFormModal($request_id)
    {
        $this->isModalOpen = true;
        $this->emit('openFormRequest', $request_id);
    }

    public function closeForm()
    {
        $this->isModalOpen = !$this->isModalOpen;
    }

    public function render()
    {

        $result =  StoreReuqest::all();

        return view('livewire.store-request.index',['store_requests' => $result]);
    }
}

<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{

    public $stores;
    public $category;
    public $store_id;
    public $editMode = false;
    public $category_id;

    // protected $rules=[
    //     'category' => 'required|unique:categories|not_in',
    //     'store_id' => 'required'
    // ];

    protected $listeners = ['editCategory'];
   

    public function editCategory($category_id)
    {

        $this->resetValidation();

        if($category_id){
            $this->editMode = true;
            $this->category_id = $category_id;

            $result = Category::find($category_id);

                $this->category = $result['category'];
                $this->store_id = $result['store_id'];

        }else {
                $this->editMode = false;
                $this->category_id = null;
                $this->category = null;
                $this->store_id = null;
        }

        // $this->category = $category_id;
    }


    public function formSubmit()
    {
        
       $validated = $this->validate([
           'category' => 'required|unique:categories,category',
           'store_id' => 'required'
       ]);

        Category::create($validated);

        $this->resetValidation();
        session()->flash('created', 'Category is Added...');
        redirect('category');

    }

    public function formUpdateRequest()
    {

        // $this->validate();

        $validated = $this->validate([
            'category' => [
                        'required',
                        Rule::unique('categories')->ignore($this->category_id),
            ],
            'store_id' => 'required'
        ]);

       

        Category::where('id', $this->category_id)
                    ->update($validated);

        $this->resetValidation();
        session()->flash('updated', 'Category is Updated...');
        redirect('category');

    }

    public function mount()
    {
        $this->stores = Store::get();
    }

    public function render()
    {
        return view('livewire.category.create');
    }
}

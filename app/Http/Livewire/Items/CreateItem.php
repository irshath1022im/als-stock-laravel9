<?php

namespace App\Http\Livewire\Items;

use App\Models\Category;
use App\Models\Item;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateItem extends Component
{

    public $item;
    public $item_id;
    public $category_id;
    public $categories=[];
    public $mode;
    public $thumbnail;
    public $filePath;

    use WithFileUploads;

    protected $rules= [
        'item' => 'required',
        'category_id' => 'required',
        'thumbnail' => 'image|max:1024',
    ];


    

    public function AddNewItem()
    {

       
        // dd($fileExtention);

                 $validated = $this->validate();

                 $data = [
                    'item' => $this->item,
                    'category_id' => $this->category_id,
                    'thumbnail' => ''
                ];

                 $result = Item::create($data);



              $fileExtention = $this->thumbnail->getClientOriginalExtension();

             $this->filePath = Storage::disk('public')->putFileAs('itemCoverPhotos', $this->thumbnail, $result->id.'.'.$fileExtention);

                Item::where('id' , $result->id)
                        ->update(['thumbnail' => $this->filePath]);



             session()->flash('created', 'Item Has been added');
             redirect('items/'.$result->id.' ');

        


    }

    public function UpdateItem()
    {

          $this->validate([
                'item'=>'required',
                'category_id' => 'required',
            ]);

        
        if($this->thumbnail)
        {
            $fileExtention = $this->thumbnail->getClientOriginalExtension();

            $this->filePath = Storage::disk('public')->putFileAs('itemCoverPhotos', $this->thumbnail, $this->item_id.'.'.$fileExtention);
        }
     

              

            Item::where('id', $this->item_id)
            ->update([
                'item' => $this->item,
                'category_id' => $this->category_id,
                'thumbnail' => $this->filePath
            ]);

        session()->flash('created', 'Item Has been Updated');
            //  route('items.show', ['item' => $id ];
        redirect('items/'.$this->item_id.' ');
   

    }

    // public function updatedThumbnail()
    // {

    //     $fileExtention = $this->thumbnail->getClientOriginalExtension();

    //     $this->filePath = Storage::disk('public')->putFileAs('itemCoverPhotos', $this->thumbnail, $this->item.'.'.$fileExtention);

        
    // }


    public function mount($item)
    {
        $this->categories = Category::get();

        if($item)
        {
            $this->item_id = $item->id;
            $this->item = $item->item;
            $this->category_id = $item->category_id;
            $this->mode = 'edit';
            $this->filePath = $item->thumbnail;
        }
    }


    public function render()
    {
        return view('livewire.items.create-item');
    }


}

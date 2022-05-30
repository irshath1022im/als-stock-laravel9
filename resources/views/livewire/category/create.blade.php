<div>



    <div wire:loading>
        @component('components.spinner')
            
        @endcomponent
    </div>


    <form wire:loading.remove>
        <div class="mb-3">
          <label for="" class="form-label">Category</label>
          <input type="text"
            class="form-control" placeholder="Category" wire:model.defer="category">
          
           @error('category')
               <div class="alert alert-danger" role="alert">
                   <strong>{{ $message }}</strong>
               </div>
               
           @enderror

        </div>

 
        <div class="mb-3">
            <label for="" class="form-label">Store</label>
            <select class="form-control" name="" id="" wire:model.defer="store_id">
            <option value="">Select</option>
            <option value="1">Uniform</option>
            <option value="2">Promotional Items</option>
            </select>
        </div>

        @error('store_id')
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        
    @enderror

        @if ($editMode)
            <button type="button" class="btn btn-primary" wire:click="formUpdateRequest">Edit</button>

        @else
            
            <button type="button" class="btn btn-primary" wire:click="formSubmit">Submit</button>
        @endif

    </form>
</div>

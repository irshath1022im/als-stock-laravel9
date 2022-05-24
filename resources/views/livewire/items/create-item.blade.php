<div>

    @component('components.alert')
        
    @endcomponent

    <form>

        <div class="mb-3">
            <label for="" class="form-label">Item Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Item Name" aria-describedby="helpId"
                wire:model.defer="item"
            >
            @error('item')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror

             <small id="helpId" class="text-danger">**</small>
        </div>

       
        <div class="mb-3">
          <label for="" class="form-label">Category</label>
          <select class="form-control" name="" id="" 
            wire:model.defer="category_id"
          >
            <option value="">None</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->category }}</option>
                
            @endforeach
          </select>

          <small id="helpId" class="text-danger">**</small>
              @error('category_id')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                
              @enderror
        </div>


-      
      @if($mode == 'edit')

                <strong>{{ $filePath }}</strong>
                </br>
        
                <img src="{{ Storage::url($filePath) }}" class="w-25">

                @endif

                <div class="mb-3">
                    <label for="" class="form-label">Thumbnail</label>
                    <input type="file" class="form-control" wire:model="thumbnail">

                    @error('thumbnail')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        
                        @enderror


                        {{-- {{ $thumbnail->temporaryUrul() }} --}}
                        
                       
                          
{{--                       
                            @isset($thumbnail->temporaryUrl())

                                   <img src="{{ $thumbnail->temporaryUrl()}}" class="w-25">

                            @else

                            <img src="{{ Storage::url($filePath) }}" class="w-25">

                            @endisset --}}
                        {{-- @if ($thumbnail)
                        Photo Preview:
                        <br>
                        <img src="{{ $thumbnail->temporaryUrl() }}" class="w-25">
                        @endif --}}
                </div>
  
  
        <br>
       

        @if ($mode !== 'edit')
  
            <button type="btn" class="btn btn-primary"  wire:click.prevent = "AddNewItem" > Submit</button>

       @else
             <button type="btn" class="btn btn-primary"  wire:click.prevent = "UpdateItem"> Update</button>
       @endif
    



    </form>






</div>

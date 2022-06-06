<div>

    <form>
        <div class="mb-3">
          <label for="" class="form-label">Item Name</label>
          <input type="text"
            class="form-control" name="" id="" disabled wire:model="item_id">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>


        <div class="mb-3">
          <label for="" class="form-label">Sizes</label>
          <select class="form-control" name="" id="" wire:model="size">
            <option>Select</option>

            @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->size }}</option>
            @endforeach

          </select>

          @error('size')
              
          <div class="alert alert-danger" role="alert">
              <strong>{{ $message }}</strong>
          </div>
          
          @enderror


        </div>


        <button type="button" class="btn btn-dark" wire:click="formSubmit">Submit</button>



    </form>















    {{-- end of livewire div --}}
</div>

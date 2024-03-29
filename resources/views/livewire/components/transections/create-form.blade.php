<div>

    @component('components.alert')

    @endcomponent

    <div wire:loading>
        @component('components.spinner')

        @endcomponent
    </div>

    <form action="" >

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Items</label>
                    <input type="text"
                      class="form-control disbaled" disabled wire:model="item_id">
                  </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Item Size ID</label>
                    <input type="text"
                      class="form-control disbaled" disabled wire:model="item_size_id">
                  </div>
            </div>

        </div>


        <div class="row mb-3">

            <div class="col">
                      <label for="" class="form-label">Qty</label>
                      <input type="number" class="form-control" placeholder="Qty" required wire:model.defer="qty">

                      @error('qty')
                      <div class="alert alert-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </div>

                  @enderror
            </div>


            <div class="col mb-3">
                <label for="" class="form-label">Posted Date</label>
                <input type="date"
                class="form-control"  wire:model.defer="date">


                @error('date')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>

            @enderror

            </div>





        </div>


        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Transections</label>
            </div>

            <div class="col">
                <select class="form-control" wire:model.defer="transection_type">
                    <option value="">Select</option>
                    @foreach ($transections_type as $transection)
                        <option value="{{ $transection->id  }}">{{ $transection->type }}</option>
                    @endforeach
                </select>

                @error('transection_type')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>

            @enderror
            </div>
        </div>



        <button type="button" class="btn btn-primary" wire:click="formSubmit"
        wire:loading.attr="disabled">Submit</button>







    </form>

</div>

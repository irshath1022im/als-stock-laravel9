<div>

@component('components.alert')

@endcomponent

<div class="card">
    <div class="card-header">
        <h5>NEW ITEM FOR : <span class="badge bg-white text-danger">{{ $store_request_id }}</span></h5>
    </div>
    <div class="card-body">

        <form wire:submit.prevent ="formSubmit">

            @livewire('components.item-search-bar')


            <div wire:loading>
                @component('components.spinner')

                @endcomponent
            </div>


            <div class="mb-3" wire:loading.remove>
              <label for="" class="form-label">Item Size</label>
              <select class="form-control" wire:model.lazy="item_size_id" >

                <option value="">Select</option>
                @foreach ($item_sizes as $item)
                    <option value="{{ $item->id }}">

                        {{ $item->size->size }}

                        {{-- @if (count($item->transectionLogs) > 0)
                            <span class=" btn badge rounded-pill bg-info">{{ $item->transectionLogs->sum('qty') }}</span>
                        @else
                        <span>0</span>
                        @endif --}}


                    </option>
                @endforeach

              </select>

              <small id="helpId" class="form-text text-muted">Available Qty {{ $item_size_id }}</small>

            @error('item_size_id')

                <div class="alert alert-warning" role="alert">
                            <strong>{{ $message }}</strong>
                </div>

            @enderror

            </div>

            <div class="mb-3">
              <label for="" class="form-label">Qty</label>
              <input type="number"
                class="form-control" wire:model.lazy="qty" placeholder="Qty">

                @error('qty')

                    <div class="alert alert-warning" role="alert">
                        <strong >{{ $message }}</strong>
                    </div>

              @enderror
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Remark</label>
              <textarea class="form-control"wire:model.lazy="remark" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>

    <div class="card-footer text-muted">

    </div>
</div>
















    {{-- In work, do what you enjoy. --}}
</div>

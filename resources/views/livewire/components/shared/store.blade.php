<div>
    <div class="card">
        <div class="card-header">
            STORES
        </div>

        <div class="card-body">


            <form class="p-2">
                @foreach ($stores as $store)
                <button type="button" class="list-group-item list-group-item-action border-bottom  mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="store" value="{{ $store->id }}"
                                @if ($selected_store == $store->id)
                                    checked
                                @endif
                                wire:model="selected_store">
                            <label class="form-check-label" for="">
                                {{ $store->store }}
                            </label>


                            </div>
                </button>
                @endforeach

            </form>

        </div>

    </div>



    {{-- <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active">Active item</button>
        <button type="button" class="list-group-item list-group-item-action">Item</button>
        <button type="button" class="list-group-item list-group-item-action disabled">Disabled item</button>
    </div> --}}


</div>

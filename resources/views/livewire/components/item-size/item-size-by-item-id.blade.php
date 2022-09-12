<div>


    <div class="card">
        <div class="card-header">
            <div class="card-title">ITEM ID :  / {{ $item_id }}</div>
        </div>


        <div class="card-body" wire:loading.remove>

            {{-- @dump($item_sizes) --}}

            @if (count($item_sizes) >= 1)

                <ul class="list-group">

                    @foreach ($item_sizes as $item_size)

                        <li class="list-group-item d-flex justify-content-between align-items-center

                            ">

                            {{-- this btn will send item id and item size id to for create transection form --}}

                            <button class="btn btn-danger btn-sm"
                                data-bs-toggle="modal" data-bs-target="#addTransection"
                                wire:click="$emit('dataForTransectionForm', {{ $item_id }} , {{ $item_size->id }})"
                            >+</button>

                            <button class="btn btn-light" >
                            <span class="badge bg-primary">SIZE ID : {{ $item_size->id }}</span>
                            {{ $item_size->size->size }}
                           </button>

                            {{-- <span class="badge
                                @if (count($item_size->transectionLogs) > 0)
                                bg-success
                            @else
                                bg-secondary
                            @endif

                            badge-pill">

                           QTY {{ $item_size->transectionLogs->sum('qty') - $item_size->storeRequestItems->sum('qty')}}</span> --}}

                           <button type="button" class="btn
                            @if (count($item_size->transectionLogs) > 0)
                                btn-success
                            @else
                                btn-secondary disabled
                            @endif
                                 position-relative">

                             @if (count($item_size->transectionLogs) > 0)
                                InStock
                             @else
                                Not InStock

                            @endif

                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ $item_size->transectionLogs->sum('qty') - $item_size->storeRequestItems->sum('qty')}}
                            </span>

                          </button>

                        </li>

                    @endforeach


                </ul>

            @else

                @component('components.empty',['message' => 'No Transection Logs Found !!!'])

                @endcomponent

            @endif




                            {{-- @livewire('components.item-qty.qty-by-item-size', ['item_size_id' =>  ] ) --}}


                            {{-- @if (count($item_size->transectionLogs) > 0 )

                                 <button class="btn btn-success position-relative m-3 p-2 text-uppercase" type="button">

                                 </button>
                            @else

                            <button class="btn btn-secondary position-relative m-3 p-2 text-uppercase" type="button">
                                {{ $item_size->size->size }}
                             </button>

                            @endif



                    </div>


                --}}



        </div>




    <!-- Button trigger modal -->




      <!-- Modal Transections -->
      <div class="modal fade" id="addTransection" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TRANSECTIONS </h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                            @livewire('components.transections.create-form')


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >Close</button>
                </div>
            </div>
        </div>
    </div>


















</div>

<div>


    <div class="card">
        <div class="card-header">
            <div class="card-title">ITEM :  / {{ $item_id }}

                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modelId">
                    NEW SIZE
                  </button>

                  <button class="btn"
                    data-bs-toggle="modal" data-bs-target="#modelId2"
                  >
                    <span class="badge bg-success p-2">+ TRANSECTIONS</span>
                  </button>




            </div>
        </div>


        <div class="card-body" wire:loading.remove>

            {{-- @dump($item_sizes) --}}

            @if (count($item_sizes) >= 1)

                <ul class="list-group">

                    @foreach ($item_sizes as $item_size)

                        <li class="list-group-item d-flex justify-content-between align-items-center

                            ">
                           <button class="btn btn-light" >
                            <span class="badge bg-primary">ID : {{ $item_size->id }}</span>
                            {{ $item_size->size->size }}
                           </button>
                            <span class="badge
                                @if (count($item_size->transectionLogs) > 0)
                                bg-success
                            @else
                                bg-secondary
                            @endif

                            badge-pill">{{ $item_size->transectionLogs->sum('qty') - $item_size->storeRequestItems->sum('qty')}}</span>
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


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">NEW SIZE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                        @livewire('components.item-size.create-form', ['item_id' => $item_id])


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                </div>
            </div>
        </div>
    </div>


      <!-- Modal Transections -->
      <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TRANSECTIONS </h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                            {{-- @livewire('components.transections.create-form',['item_id' => $item_id]) --}}


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                </div>
            </div>
        </div>
    </div>


















</div>

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


                  <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modelId3">
                    LOGS
                  </button>

            </div>
        </div>


        <div class="card-body" wire:loading.remove>

            {{-- @dump($item_sizes) --}}

            @if (count($item_sizes) >= 1)
            
                    <div class="d-grid gap-2 d-md-block" >

                        @foreach ($item_sizes as $item)


                        <button class="btn btn-primary position-relative m-3 p-2 text-uppercase" type="button">{{ $item->size->size }}

                            @livewire('components.item-qty.qty-by-item-size', ['item_id' => $item_id, 'size_id' => $item->size_id ] )
                        
                        </button>

                        
                        @endforeach
                        
                    </div>
                @else

                <div class="alert alert-warning" role="alert">
                    <strong>NO DATA FOUND...!!!!</strong>
                </div>

                @endif
                


        </div>
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
                    
                            @livewire('components.transections.create-form',['item_id' => $item_id])


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

      <!-- Modal Transection Logs -->
      <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LOGS </h5>
                        <button type="button" class="btn-close" 
                            data-bs-dismiss="modal" 
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                            @livewire('components.transections.trans-logs',['item_id' => $item_id])


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

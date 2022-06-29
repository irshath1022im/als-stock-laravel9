<div>

    <div wire:loading>
        @component('components.spinner')
            
        @endcomponent
    </div>

    {{ $instock }}

    <div class="row" wire:loading.remove>

            @if (count($items) <= 0)
               <div class="alert alert-info" role="alert">
                <strong>No Items Found !!!</strong>
               </div>
               
            @else
                
          
         
            @foreach ($items as $item)
                <div class="col-md-4">

                    <div class="card mb-2" style="width: 18rem">
                        <div class="card-header">
                            <div class="card-title text-uppercase">{{ $item->item }}</div>
                        </div>
                        
                            
                        <div class="card-body">
                            <div class="border borde-primary p-1" style="width: 250px; height:200px">
                                <img class="card-img-top img-fluid" style="width: 240px; height:180px" src="{{ Storage::URL($item->thumbnail)}}">
                            </div>
                         
                        </div>
                        <div class="card-footer">
                            <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('items.show',['item' => $item->id]) }}" role="button">View Item</a>

                            <button type="button" class="btn btn-primary btn-sm"
                               
                            >
                                InStock
                              </button>
                        </div>

                    </div>

                </div>
        
            @endforeach

            @endif

    </div>

    {{ $items->links() }}











    
</div>

<div>

    <div wire:loading>
        @component('components.spinner')
            
        @endcomponent
    </div>

    <div class="row" wire:loading.remove>
            @foreach ($items as $item)
                <div class="col-md-6">

                    <div class="card mb-2" style="width: 18rem">
                        <div class="card-header">
                            <div class="card-title text-uppercase">{{ $item->id }} / {{ $item->item }}</div>
                        </div>
                        <div class="border borde-primary p-1" style="width: 250px; height:200px">
                            <img class="card-img-top" style="width: 250px; height:200px" src="{{ Storage::URL($item->thumbnail)}}">
                        </div>
                            
                        <div class="card-body">
                            <h4 class="card-title">{{  $item->item }}</h4>
                        </div>
                        <div class="card-footer">
                            <a name="" id="" class="btn btn-primary" href="{{ route('items.show',['item' => $item->id]) }}" role="button">View Item</a>
                        </div>

                    </div>

                </div>
        
            @endforeach
    </div>

    {{ $items->links() }}

    
</div>

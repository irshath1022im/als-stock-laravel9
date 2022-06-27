<div>

    <div wire:loading>
        @component('components.spinner')
            
        @endcomponent
    </div>

    <div class="row" wire:loading.remove>
            @foreach ($items as $item)
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{ $item->item }}</div>
                        </div>
                        <img class="card-img-top w-25" src="{{ Storage::URL($item->thumbnail)}}">
                        <div class="card-body">
                            <h4 class="card-title">{{  $item->item }}</h4>
                        </div>
                    </div>

                    {{-- @component('components.itemcard', [
                        'id' => $item->id,
                        'image' => , 
                        'item_name' =>
                        ])


                    
                    @endcomponent --}}

                </div>
        
            @endforeach
    </div>

    {{ $items->links() }}

    
</div>

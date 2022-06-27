<div>

    <div wire:loading>
        @component('components.spinner')
            
        @endcomponent
    </div>

    <div class="row" wire:loading.remove>
            @foreach ($items as $item)
                <div class="col-md-6">

                    @component('components.itemcard', [
                        'id' => $item->id,
                        'image' => Storage::URL($item->thumbnail), 
                        'item_name' => $item->item
                        ])
                    
                    @endcomponent

                </div>
        
            @endforeach
    </div>

    {{ $items->links() }}

    
</div>

<div>
    
    <div wire:loading>
        @component('components.spinner')
            
        @endcomponent
    </div>

    <ul class="list-group" wire:loading.remove>

        @foreach ($categories as $category)
        <button type="button" class="list-group-item list-group-item-action border-bottom  mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category"
                        value="{{ $category->id }}"
                        wire:model="selected_category"
                    >
                    <label class="form-check-label text-uppercase" for="">
                        {{ $category->category }}
                    </label>            
                </div>
        </button>
            
        @endforeach
       
    </ul>


</div>

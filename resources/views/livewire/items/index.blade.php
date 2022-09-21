<div>


    <div class="card">
        <div class="card-header">
            <div class="card-title">ITEMS

                {{-- {{ dd(Auth::user()) }} --}}
               @if (isset(Auth::user()->id) && Auth::user()->id == 1)

               <a name="" id="" class="btn btn-primary" href="{{ route('items.create') }}" role="button">NEW</a>
               @endif


            </div>
        </div>
    <div class="card-body">

        <div class="row">

            @foreach ($items as $item)


            <div class=" col-xs-12 col-md-4 col-lg-3 ">
                @component('components.itemcard', [
                            'image' => $item->thumbnail ?  Storage::url($item->thumbnail) : 'images/cap.jpg' ,

                            'item_name' =>  $item->item ,
                            'id' => $item->id,
                                'category' => $item->category->category
                            ])

                @endcomponent
            </div>

            @endforeach



        </div>

    </div>


    <div class="card-footer">
        {{ $items->links() }}
    </div>

</div>









{{-- end of livewire div --}}
</div>

@extends('layouts.app')

{{-- @dump($items) --}}
@section('content')
   
    <div class="row">
       
        @foreach ($items as $item)
            
       
        <div class=" col-xs-12 col-md-4 col-lg-3 ">
            @component('components.itemcard', [
                        'image' => $item->thumbnail ?  Storage::url($item->thumbnail) : 'images/cap.jpg' ,
                                    
                        'item_name' =>  $item->item ,
                        'id' => $item->id])
            
            @endcomponent
        </div>

        @endforeach

        {{ $items->links() }}

      
      
    </div>

    
@endsection
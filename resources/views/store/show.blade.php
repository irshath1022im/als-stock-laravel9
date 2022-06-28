@extends('layouts.app')

@section('content')

   
<div class="list-group">
    @foreach ($items as $item)
     
            <button type="button" class="list-group-item list-group-item-action">{{ $item->item }}</button>
     
    @endforeach

</div>

{{-- @dump($items) --}}

{{ $items->links() }}


@endsection
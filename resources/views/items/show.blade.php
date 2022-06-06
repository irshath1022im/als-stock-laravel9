@extends('layouts.app')

@section('content')

@component('components.alert')
        
@endcomponent


   <div class="row">

       <div class="col-sm-3 border border-info">
           <h4 class="text-center text-uppercase">{{ $item->item }} </h4>
           {{-- {{ $item->thumbnail }} --}}
            <img src= {{  Storage::url($item->thumbnail) }} class="img-fluid" class="w-25"/>
            
            <a href="{{ route('items.edit', ['item' => $item->id ]) }}">
                <button class="btn btn-sm btn-outline-info">Edit</button>
            </a>
          
       </div>


       <div class="col-sm-9">

            @livewire('components.item-size.item-size-by-item-id',['item_id' => $item->id])
        
       </div>



   </div>


@endsection
@extends('layouts.app')

@section('content')

    @isset($item)
         @livewire('items.create-item',['item' => $item])
    
    @else
        @livewire('items.create-item', ['item' => null])
    @endisset

@endsection
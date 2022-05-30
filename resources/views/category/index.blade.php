@extends('layouts.app')

@section('content')

@component('components.alert')
        
@endcomponent
    
    @livewire('category.index')

@endsection
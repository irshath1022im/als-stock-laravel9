@extends('layouts.app')

@section('content')

@component('components.alert')
        
@endcomponent


   <div class="row">

       <div class="col-sm-3 border border-info">
           <h4 class="text-center text-uppercase">{{ $item->item }} </h4>
           {{ $item->thumbnail }}
            <img src= {{  Storage::url($item->thumbnail) }} class="img-fluid" class="w-25"/>
       </div>

       <div class="col-sm-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>SIZE</th>
                        <th>QTY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">01</td>
                        <td>SMALL</td>
                        <td>15 </td>
                    </tr>
                    <tr>
                        <td scope="row">01</td>
                        <td>LARGE</td>
                        <td>15 </td>
                    </tr>
                    <tr>
                        <td scope="row">01</td>
                        <td>EXTRA LARGE</td>
                        <td>15 </td>
                    </tr>
                </tbody>
            </table>
            
       </div>



   </div>

   <a href="{{ route('items.edit', ['item' => $item->id ]) }}">
    <button class="btn btn-sm btn-outline-info">Edit</button>
</a>

@endsection
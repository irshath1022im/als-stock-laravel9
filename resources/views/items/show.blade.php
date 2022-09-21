@extends('layouts.app')

@section('content')

    @component('components.alert')

    @endcomponent


   <div class="row">

       <div class="col-sm-3 border border-info">
           <h4 class="text-center text-uppercase">{{ $item->item }} </h4>
           {{-- {{ $item->thumbnail }} --}}
            <img src= {{  Storage::url($item->thumbnail) }} class="img-fluid" class="w-25"/>

            @auth

            <a href="{{ route('items.edit', ['item' => $item->id ]) }}">
                <button class="btn btn-sm btn-outline-info">Edit</button>
            </a>
            @endauth

       </div>


       <div class="col-sm-9">

        {{-- @dump($item->itemTransectionLogs) --}}
        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modelId3">
            LOGS
          </button>

          @auth

          <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#addSizeId">
            NEW ITEM SIZE
          </button>

          @endauth

          @livewire('components.item-size.item-size-by-item-id', ['item_id' => $item->id])


       </div>



   </div>


    <!-- Modal Transection Logs -->
    {{-- <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LOGS </h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @if(count($item->itemTransectionLogs) < 1)
                    @component('components.empty',['message' => 'No Transections Found !!!'])

                    @endcomponent

                @else


                  <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>DATE</th>
                            <th>SIZE</th>
                            <th>QTY</th>
                            <th>TYPE</th>
                        </tr>
                    </thead>
                    <tbody>


                  @foreach ($item->itemTransectionLogs as $log)

                            @component('components.itemTransectionsLogs',['log' => $log ])

                            @endcomponent

                @endforeach

                </tbody>
            </table>

            @endif



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >Close</button>
                </div>
            </div>
        </div>
    </div> --}}


        <!-- Modal to create item-size -->
        <div class="modal fade" id="addSizeId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">NEW SIZE</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            @livewire('components.item-size.create-form', ['item_id' => $item->id])


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



@endsection

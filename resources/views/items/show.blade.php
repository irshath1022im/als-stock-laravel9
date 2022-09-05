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

            {{-- @livewire('components.item-size.item-size-by-item-id',['item_id' => $item->id]) --}}

            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modelId3">
                LOGS
              </button>

              {{-- @dump($item->itemSize->transectionLogs) --}}

       </div>



   </div>


    <!-- Modal Transection Logs -->
    <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LOGS </h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                            {{-- @livewire('components.transections.trans-logs',['item_id' => $item_id]) --}}
{{--
                            @if (count($item->itemSize->transectionLogs) > 0)

                            @else
                                Nothing Found
                            @endif --}}


                            @empty($item->itemSize->transectionLogs)

                                @component('components.empty',['message' => 'No Transections Found !!!'])

                                @endcomponent

                                @else

                                data avaialble
                                {{-- @component('components.itemTransectionsLogs',['logs' => $item->itemSize->transectionLogs ])

                                @endcomponent --}}
                            @endempty



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                </div>
            </div>
        </div>
    </div>


@endsection

@extends('layouts.app')


@section('content')
<div class="col-12">



    <div class="card">
        <div class="card-header">
            STORE REQUEST
        </div>
        <div class="card-body">

            <div class="card">
                <div class="card-header">
                    REQUEST INFO
                </div>
                <div class="card-body">

                        <div class="row justify-content-center align-items-center ">
                            <div class="col-sm">
                                <div class="mb-3">
                                <label for="" class="form-label">DATE</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="{{ $store_request->date }}" default="{{ $store_request->date }}">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3">
                                <label for="" class="form-label">Requested By</label>
                                <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="{{ $store_request->requestedBy }}">
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="mb-3">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="{{ $store_request->approvedBy }}">
                                </div>

                            </div>

                            <div class="col-sm">
                                <div class="mb-3">
                                    <label for="" class="form-label">Status</label>
                                    <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="{{ $store_request->status }}">
                                </div>

                            </div>

                        </div>
                </div>

            </div>

    <hr/>


    @livewire('store-request-items.store-request-items-form', ['store_request_id' => $store_request->id])


    @if ($store_request->store_request_items_count > 0)

            @livewire('store-request-items.store-request-items',['store_request_id' => $store_request->id])

            @else

                    @component('components.empty',['message' => 'No Store Request Items Found !!!!'])

                    @endcomponent

                @endif



        </div>

    </div>

</div>
@endsection

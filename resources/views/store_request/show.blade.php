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

            <div class="card">
                <div class="card-header">
                    REQUEST ITEMS
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ITEM</th>
                                    <th scope="col">SIZE</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">REMARK</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($store_request->storeRequestItems as $item)
                                <tr class="">
                                    <td scope="row">{{ $item->id}}</td>
                                    <td scope="row">{{ $item->itemSize->item->item}}</td>
                                    <td scope="row">{{ $item->itemSize->size->size}}</td>
                                    <td scope="row">{{ $item->qty}}</td>
                                    <td scope="row">{{ $item->remark}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>





                </div>

            </div>

        </div>

        <div class="card-footer text-muted">
        <a href="{{ route('printStoreRequest',['id' => $store_request->id]) }}" ><strong>PRINT REPORT</strong></a>
        </div>
</div>
@endsection

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





    @if ($store_request->store_request_items_count > 0)

            @livewire('store-request-items.store-request-items',['store_request_id' => $store_request->id])

            @else

                    @component('components.empty',['message' => 'No Store Request Items Found !!!!'])

                    @endcomponent

                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                        Add Items To Request
                      </button>

    @endif



        </div>

    </div>

</div>





<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="modalTitleId">Modal title</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('store-request-items.store-request-items-form', ['store_request_id' => $store_request->id])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save</button> --}}
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>
@endsection

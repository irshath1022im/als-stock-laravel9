<div>



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

                                    @foreach ($store_request_items as $item)
                                    <tr class="">
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td scope="row">{{ $item->itemSize->item->item}}</td>
                                        <td scope="row">{{ $item->itemSize->size->size}}</td>
                                        <td scope="row">{{ $item->qty}}</td>
                                        <td scope="row">{{ $item->remark}}</td>
                                        <td scope="row"><a name="" id="" class="btn btn-danger btn-sm"  href="#" role="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleItemModal"
                                            wire:click="itemForDelete({{ $item->id }})"
                                            >Delete</a></td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>


<!-- Modal trigger button -->

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div wire:ignore.self class="modal fade" id="deleItemModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true"

>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="modalTitleId">Modal title</h5> --}}
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
               <div class="alert alert-warning" role="alert">
                <strong> Do You want Remove the Items ???</strong>
               </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary"  @if ($selectedItemIdForDelete)

                @else
                    disabled
                @endif


                    wire:click="deleteItem"



                >Yes</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>


    {{-- The Master doesn't talk, he acts. --}}
</div>

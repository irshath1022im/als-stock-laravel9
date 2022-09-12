<div>



    <div wire:loading>

    <button class="btn btn-danger" type="button" disabled>
        <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
        Loading...
      </button>
    </div>

 @component('components.alert')

    @endcomponent


    <div class="card" wire:loading.remove>
        <div class="card-header">
            STORE REQUEST

            <div>
                <button type="button" class="btn btn-primary btn-sm"
                    wire:click="openFormModal(0)"
                 >
                 NEW REQUEST </button>

            </div>

        </div>

        <div class="card-body">



            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr class="text-uppercase">
                            <th scope="col">DATE</th>
                            <th scope="col">REQUESTED BY</th>
                            <th scope="col">APPROVED BY</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">REMARK</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($store_requests as $item)

                        <tr class="text-uppercase">
                            <td scope="row">{{ $item->date }}</td>
                            <td>{{ $item->requestedBy }}</td>
                            <td>{{ $item->approvedBy }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->remark }}</td>
                            <td><a name="" id="" class="btn btn-primary" href="{{ route('storeRequest.show',['storeRequest' => $item->id]) }}" role="button">VIEW</a></td>

                            <td>
                              <button type="button" name="" id="" class="btn btn-primary"
                                wire:click="openFormModal({{ $item->id }})"
                              >EDIT</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

        <div class="card-footer text-muted">
            Footer
        </div>
    </div>




    <div x-data="{open:  @entangle('isModalOpen')}">


        <div
            class="bg-secondary fixed-top h-100 w-100"
            x-cloak
            x-show="open"
            @keydown.escape.prevent.stop="open = false"
            >


            <div class=""
                @click="open = false"
            >
                <div
                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document"
                @click.stop
                 >
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">STORE REQUEST FORM</h5>
                                <button type="button" class="btn-close"  aria-label="Close"
                                    x-on:click="open =false"
                                ></button>
                        </div>
                        <div class="modal-body">

                            @livewire('store-request.new-request-form')


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                             wire:click="closeForm"
                            >Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




















</div>

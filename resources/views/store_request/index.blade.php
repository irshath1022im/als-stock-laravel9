@extends('layouts.app')


@section('content')


    @empty($store_requests)
        @component('components.empty',['message' => 'No More Storage Requests Found !!!'])

        @endcomponent
    @endempty

    <div class="card">
        <div class="card-header">
            STORE REQUEST
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






{{-- <div x-data="{ open: false }" class="d-flex justify-center">
    <!-- Trigger -->
    <span x-on:click="open = true">
        <button class="btn bg-primary">
            Open dialog
        </button>
    </span>

    <!-- Modal -->
    <div
        x-dialog
        x-model="open"
        style="display: none"
        class="fixed inset-0 overflow-y-auto z-10"
    >
        <!-- Overlay -->
        <div
            x-dialog:overlay
            x-transition.opacity
            class="fixed inset-0 bg-secondary bg-opacity-50">
        </div>

        <!-- Panel -->
        <div
            class="relative min-h-screen flex items-center justify-center p-4"
        >
            <div
                x-dialog:panel
                x-transition
                class="relative max-w-xl w-full bg-white rounded-xl shadow-lg overflow-y-auto"
            >
                <!-- Close Button -->
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button type="button" @click="$dialog.close()" class="bg-gray-50 rounded-lg p-2 text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2">
                        <span class="sr-only">Close modal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Body -->
                <div class="p-8">
                    <!-- Title -->
                    <h2 x-dialog:title class="text-2xl font-bold">Modal Title</h2>

                    <!-- Content -->
                    <p class="mt-3 text-gray-600">Your modal text and content goes here.</p>
                </div>

                <!-- Footer -->
                <div class="p-4 flex justify-end space-x-2 bg-gray-50">
                    <button type="button" x-on:click="$dialog.close()" class="text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded-lg px-5 py-2.5">
                        Cancel
                    </button>

                    <button type="button" x-on:click="$dialog.close()" class="bg-slate-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 px-5 py-2.5 rounded-lg text-white">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal trigger button -->
<div>
<button type="button" class="btn btn-primary btn-lg"
    x-on:click="open = true"
>

  Launch
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>



@endsection

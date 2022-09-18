<div>

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

                                    @foreach ($store_request_items as $item)
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

        <div class="card-footer text-muted">
            <a href="{{ route('printStoreRequest',['id' => $store_request_id]) }}" target="_blank"  ><strong>PRINT REPORT</strong></a>
        </div>

    </div>








    {{-- The Master doesn't talk, he acts. --}}
</div>

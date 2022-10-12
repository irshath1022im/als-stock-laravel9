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

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>




    {{-- The Master doesn't talk, he acts. --}}
</div>

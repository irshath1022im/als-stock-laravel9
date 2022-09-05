@extends('layouts.app')


@section('content')
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">DATE</th>
                    <th scope="col">REQUESTED BY</th>
                    <th scope="col">APPROVED BY</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">REMARK</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($store_requests as $item)

                <tr class="">
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


@endsection

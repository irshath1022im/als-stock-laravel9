<div>

    {{-- @dump($logs) --}}

    @if (count($logs) < 1)

        <div class="alert alert-info" role="alert">
            <strong>No Transections found !!!</strong>
        </div>

    @else



    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>DATE</th>
                <th>SIZE</th>
                <th>QTY</th>
                <th>TYPE</th>
            </tr>
        </thead>
        <tbody>



            {{-- @foreach ($logs as $log)

            <tr>
                <td scope="row">{{ $log->id }}</td>
                <td scope="row">{{ $log->date }}</td>
                <td>{{ $log->size->size }}</td>
                <td>{{ $log->qty }}</td>
                <td>{{ $log->transection_type }}</td>
            </tr>
            @endforeach --}}



        </tbody>
    </table>

    @endif

</div>

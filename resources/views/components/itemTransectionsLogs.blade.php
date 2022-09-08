

{{-- @dump($logs) --}}


           <tr>
                <td scope="row">{{ $log->id }}</td>
                <td scope="row">{{ $log->date }}</td>
                <td>{{ $log->itemSize->size->size }}</td>
                <td>{{ $log->qty }}</td>
                <td>{{ $log->transectionType->type}}</td>
            </tr>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>REPORT</title>
    <style>
       @media print {
  .pagebreak {
     page-break-before: always;
  }
}
        </style>
</head>
<body>

    @foreach ($items as $item)


  <div class="card container border h-100">
      <div class="card-header">
          <div class="card-title text-center">{{ $item->id }}/{{ $item->item }}</div>
      </div>
      <div class="card-body text-center">
        <img class="card-img-top w-50 h-50 img-fluid" src="{{ Storage::URL($item->thumbnail) }}" alt="">
      </div>

      <div class="card-footer">
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>SIZE</th>
                    <th>QTY LEFT</th>
                    <th>SELF</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($item->itemSize as $sizes)





            <tr>
                <td scope="row">{{ $loop->index + 1 }}</td>
                <td>{{$sizes->size->size}}</td>
                {{-- <td>@livewire('components.item-qty.qty-by-item-size', ['item_id' => $item->id, 'size_id' => $sizes->size_id]) --}}
                </td>
            </tr>

            @endforeach









            </tbody>

        </table>
      </div>
  </div>

  <br/>

  <div class="pagebreak"></div>

  @endforeach



</body>
</html>

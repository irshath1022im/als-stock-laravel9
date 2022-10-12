{{-- @extends('layouts.report') --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALS-STOCK REPORT</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />


</head>
<body onload=window:print();>



        <div class="col-12 d-flex justify-content-end">
          <img src="/images/logo.png" />
        </div>

        <div class="col-12 d-flex justify-content-center">
          <p class="h4"><strong>STORE REQUEST</strong></p>
          </div>
      </div>

      <div class="row">


            <div class="col-12">
                    <div class="table">
                        <table class="table table-bordered border-dark table-sm">
                            <thead class="bg-info">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" colspan="3">DESCRIPTION</th>
                                    <th scope="col">SIZE</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">REMARK</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($store_request->storeRequestItems as $item)
                                <tr class="">
                                    <td scope="row"><strong>{{ $loop->iteration }}</strong></td>
                                    <td colspan="3" scope="row" class="small">{{ $item->itemSize->item->item}}</td>
                                    <td scope="row" class="small">{{ $item->itemSize->size->size}}</td>
                                    <td scope="row" class="small">{{ $item->qty}}</td>
                                    <td scope="row" class="small">{{ $item->remark}}</td>
                                </tr>


                                @endforeach

                                @for ($i = count($store_request->storeRequestItems)+1; $i <= 12; $i++)
                                        <tr class="">
                                            <td scope="row"><strong>{{ $i }}</strong></td>
                                            <td colspan="3" scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                        </tr>
                                @endfor

                            </tbody>
                        </table>
                    </div>
            </div>

            <div class="col-12 mt-2">

                <div class="col-12 bg-info border border-secondary"><strong><p>REASON FOR REQUEST:</p></strong></div>
                <div class="col-12 border border-secondary p-2">{{ $store_request->remark }}</h4></div>

            </div>


            <div class="col-12 mt-2">

                <div class="col-12 bg-info border border-secondary"><strong><p>REQUESTER:</p></strong></div>
                <div class="col-12 border border-secondary p-2">
                    <div class="row">
                        <div class="col-4">
                            <strong>Name:</strong> {{  $store_request->requestedBy}}
                        </div>

                        <div class="col-4">
                            <strong>Signature:</strong>
                        </div>

                        <div class="col-4">
                            <strong>Date:</strong> {{ $store_request->date }}
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 mt-2">

            <div class="col-12 col-12 bg-info border border-secondary">
                <strong><p>STUD MANAGER:</p></strong>
            </div>

            <div class="col-12 border border-secondary p-3">
                <div class="row">
                        <div class="list-group col ">
                            <label class="list-group-item small">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            APPROVED
                            </label>
                        </div>

                        <div class="list-group col">
                            <label class="list-group-item small">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            REJECTED
                            </label>
                        </div>

                        <div class="list-group col-5">

                            <label class="list-group-item small">SIGNATURE:</label>

                        </div>

                        <div class="list-group col">

                            <label class="list-group-item small">DATE</label>

                        </div>

                    </div>


                </div>
            </div>

      </div>

      <div class="col-12 d-flex justify-content-center align-items-bottom">
        <img src="/images/bottomLogo.png" class="img-fuild"/>
    </div>


</body>
</html>

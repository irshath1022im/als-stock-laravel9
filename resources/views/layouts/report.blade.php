<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALS-STOCK REPORT</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />



</head>
<body>

  @livewireStyles

    <div class="row">

      <div class="col-12 d-flex justify-content-end">
        <img src="/images/logo.png" />
      </div>

      <div class="col-12 d-flex justify-content-center">
        <p class="h4"><strong>STORE REQUEST</strong></p>
        </div>
    </div>

    <div class="row">

            @yield('content')

    </div>

    <div class="col-12 mt-1 d-flex justify-content-center">
        <img src="/images/bottomLogo.png" />

    </div>



    </div>




@livewireScripts

<script src="{{ asset('js/app.js') }}"></script>




</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALS-STOCK</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://unpkg.com/@alpinejs/ui@3.10.3-beta.2/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.10.3/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

</head>
<body>

  @livewireStyles

    {{-- <section class="">

        <nav class="navbar navbar-expand-lg navbar-light bg-secondary"">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                        <img src="/images/alshahania-logo.png" alt="" class="w-50 d-inline-block align-text-top" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('store') }}" >STORE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category.index') }}" >CATEGORY</a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('items.index') }}" >ITEMS</a>
                      </li>  <li class="nav-item">
                      </li>

                      </li>  <li class="nav-item">
                          <a class="nav-link text-white" href="#" >RECEIVING</a>
                        </li>

                    </li>  <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('storeRequest.index') }}" >STORE REQUEST</a>
                      </li>

                      </li>  <li class="nav-item">
                        <a class="nav-link text-white" href="#" >REPORTS</a>
                      </li>



                      @auth
                                <form method="post" action="#">
                                @csrf
                                    <button type="submit" class="btn btn-outline-danger" style="color: rgb(254,254,254);">LOGOUT</button>
                                </form>
                      @endauth

                    </ul>

                </div>

            </div>
        </nav>
    </section> --}}

    <section class="container mt-2">

      @yield('content')

    </section>




@livewireScripts






</body>
</html>

<div>


    <div class="mb-3">
        <label for="" class="form-label">Search For Item</label>
        <input type="text"
          class="form-control"
            value="{{ $search_value }}"
            wire:model.debounce.500ms="search_value"
            >
      </div>


      {{-- SEARCH RESULT --}}


      @empty($search_value)

          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>No Search Value</strong>
          </div>

     @else

     @if (count($search_results) > 0)

          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <ul class="list-group  ">

                            @foreach ($search_results as $item)

                                <li class="list-group-item">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                        value="{{ $item->id }}"
                                        wire:click="selectedItem({{ $item }})"
                                        >

                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{ $item['item'] }}
                                    </label>
                                </li>

                            @endforeach
                    </ul>

                </div>

            @else

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <strong>No Result for this Query !!!</strong>
              </div>


            @endif







      @endempty






</div>

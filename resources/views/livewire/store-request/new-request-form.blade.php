<div>

    @component('components.alert')

    @endcomponent



    <div wire:loading>
        <button class="btn btn-danger" type="button" disabled>
            <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
            Loading...
          </button>
        </div>

<div>

    <div class="d-flex justify-content-end">

        <button type="button" class="btn btn-primary position-relative">
            MODE :
            <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger">
                {{ $mode }}
            </span>
          </button>

        {{-- <button type="button" class="btn btn-primary">Mode : {{ $mode }}</button> --}}
    </div>

    <form wire:submit.prevent= @if($mode == 'New') 'formSubmit' @else 'updateForm' @endif >

        <div class="mb-3">
          <label for="" class="form-label">Date</label>
          <input type="date" class="form-control" wire:model.lazy="date" wire:loading.class="bg-info">

            @error('date')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Requested By</label>
            <select class="form-control" name="" id="" wire:model.lazy="requestedBy">
              <option>Select</option>
              @foreach ($requesters as $requester)
                <option>{{ $requester->name }}</option>
              @endforeach

            </select>

              @error('requestedBy')
                  <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </div>

              @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Approved By</label>
            <select class="form-control" name="" id="" wire:model.lazy="approvedBy">
              <option>Select</option>
              <option>Dean Lavy</option>
              <option>Abdul</option>
            </select>

              @error('approvedBy')
                  <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </div>

              @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <select class="form-control" name="" id="" wire:model.lazy="status">
              <option>Select</option>
              <option>Requested</option>
              <option>Approved</option>
            </select>

              @error('status')
                  <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </div>

              @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Remark</label>
            <textarea class="form-control" wire:model.lazy="remark" rows="3"></textarea>
          </div>


        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Submit</button>

    </form>
</div>






</div>

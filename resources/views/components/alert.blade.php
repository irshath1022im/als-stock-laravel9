<div>
    @if($message = session('created'))
    <div class="alert alert-success" role="alert">
      <strong>{{ $message}}</strong>
    </div>
    @endif

    @if($message = session('updated'))
    <div class="alert alert-info" role="alert">
    <strong>{{ $message}}</strong>
    </div>
    @endif

    @if($message = session('deleted'))
    <div class="alert alert-danger" role="alert">
    <strong>{{ session('deleted')}}</strong>
    </div>
    @endif

    @if($message = session('error'))
    <div class="alert alert-danger" role="alert">
      <strong>{{ $message}}</strong>
    </div>
    @endif
</div>

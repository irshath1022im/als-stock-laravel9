<div>
    <button type="button" class="btn btn-sm @if($qty > 1) btn-success @else btn-secondary @endif"
                               
                            >
                               @if ($qty > 1)
                                   InStock - {{ $qty }}
                               @else
                                   No Stock {{ $qty }}
                               @endif 
                              </button>
</div>

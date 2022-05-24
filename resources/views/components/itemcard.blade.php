<div class="card p-2 m-2 ">
    <img class="card-img-top img-fluid border border-secondary" 
    
        src="{{ $image }}" 
        
        alt={{ $item_name }}>
    <div class="card-body">
        <h4 class="card-title">{{ $item_name }}</h4>
    </div>

    <div class="card-footer">
        UNIFORM 
        <a href="{{ route('items.show', ['item' => $id ]) }}">
            <button class="btn btn-sm btn-outline-success">View</button>
        </a>

        
    </div>
</div>
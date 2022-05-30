<div>

  

    <div class="card">
        <div class="card-header">
            CATEGORY
            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modelId"
            wire:click="$emit('editCategory', null )"
            >NEW</button>
        </div>
        <div class="card-body">
           

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>STORE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)

                    <tr>
                        <td scope="row">{{ $category->id }}</td>
                        <td>{{ $category->category }}</td>
                        <td>{{ $category->store->store }}</td>
                        <td>
                            <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modelId" 
                                wire:click="$emit('editCategory', {{ $category->id }})"
                            
                            >EDIT</button>
                        </td>
                    </tr>
                        
                    @endforeach
                  
                  
                </tbody>
            </table>



        </div>

        <div class="card-footer">
            {{ $categories->links() }}
        </div>
      
    </div>
   



<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">NEW CATEGORY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @livewire('category.create')
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div> --}}
        </div>
    </div>
</div>






















   {{-- livewire end --}}
</div>

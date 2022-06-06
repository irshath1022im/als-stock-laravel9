<div>

  <div wire:loading>
    @component('components.spinner')
        
    @endcomponent
  </div>

        <span class="position-absolute top-0 start-100 translate-middle p-2 
        {{ $qty > 10 ? 'bg-success' : 'bg-danger'}}
       border border-light rounded-circle"
              >
            
            {{ $qty }}
            <span class="visually-hidden"></span>                      
          </span>

      

         
 
</div>

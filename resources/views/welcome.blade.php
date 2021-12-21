<x-layout> 
    <div class="container-fluid py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 text-center">
                <h1>Il mio Blog Tech</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        
    <div class="alert alert-light">
              {{session('message')}}
            </div>
            
              

    @endif
      
  

</x-layout>
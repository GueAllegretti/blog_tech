<x-layout>
  @if (session('message'))
        
  <div class="alert alert-light">
            {{session('message')}}
          </div>
          
            

  @endif
  <div class="container-fluid py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 text-center">
        <h1>Console Inserite</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      
      @foreach ($consoles as $console)
      <div class="col-12 col-md-3 d-flex justify-content-around">
        
        <div class="card m-3">

         

            <div class="card-body">
              <h5 class="card-title">{{$console->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">{{$console->brand}}</p>
              <a href="{{route('console.show', compact('console'))}}" class="btn btn-warning">Scopri di più</a>
              <a href="{{route('console.edit', compact('console'))}}" class="btn btn-primary">Modifica</a>


              <form action="{{route('console.destroy', compact('console'))}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Cancella</button>
              </form>
            </div>
          </div>
          
        </div>
        @endforeach

          </div>
        </div>
      

</x-layout>
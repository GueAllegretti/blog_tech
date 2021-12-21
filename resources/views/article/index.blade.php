<x-layout>

  <div class="container-fluid py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 text-center">
        <h1>Articoli Inseriti</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      
      @foreach ($articles as $article)
      <div class="col-12 col-md-3 d-flex justify-content-around">
        
        <div class="card m-3">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">{{$article->description}}</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
          
        </div>
        @endforeach

          </div>
        </div>
      

</x-layout>
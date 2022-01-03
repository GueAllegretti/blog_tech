<x-layout>
  @if (session('message'))
        
  <div class="alert alert-light">
            {{session('message')}}
          </div>
          
            

  @endif
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

          @if (!$article->image)
            <img src="/image/default.jpg" alt="immagine di default">
          @else
              <img src="{{Storage::url($article->image)}}" alt="immagine dell'alticolo">
          @endif

            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$article->user->name}}</h6>
              <p class="card-text">{{$article->description}}</p>

              @if($article->user->id == Auth::id())
              <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica
              </a>
              @endif
            </div>
          </div>
        </div>
        @endforeach

          </div>
        </div>
      

</x-layout>
<x-layout>

    <div class="container-fluid py-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 text-center">
          <h1>Dettaglio della console inserita</h1>
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-3 d-flex justify-content-around">
          <div class="card m-3">
  
              <div class="card-body">
                <h5 class="card-title">{{$console->name}}</h5>
                <h6 class="card-subtitle">Aggiunta il:{{$console->created_at}}</h6>
                <p class="card-text">{{$console->brand}}</p>
                <a href="{{route('console.index')}}" class="card-link">Torna indietro</a>
              </div>

            </div>
          </div>
        </div>
    </div>
        
  
  </x-layout>
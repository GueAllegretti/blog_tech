<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <h1>Inserisci la tua console</h1>
            </div>
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif     
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 my-5">
                <form class="my-5" action="{{route('console.update', compact('console'))}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input class="mb-3 form-control" type="text" name="name" placeholder="Inserisci il nome" value="{{$console->name}}">
                    <input class="mb-3 form-control" type="text" name="brand" placeholder="Inserisci il brand" value="{{$console->brand}}">
                    
                    <button type="submit" class="btn btn-warning">Invia</button>
                </form>
            </div>
        </div>
    </div>
    
    </x-layout>
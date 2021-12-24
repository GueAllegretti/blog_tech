<x-layout>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <h1>Inserisci il tuo articolo</h1>
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
            <form class="my-5" action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input class="mb-3 form-control" type="text" name="title" placeholder="Inserisci il titolo" value="{{old('title')}}">
                <label for="image">Inserisci un'immagine</label>
                <input type="file" accept="image/*" class="mb-3 form-control" name="image">
                <textarea class="mb-3 form-control" name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
                <button type="submit" class="btn btn-warning">Invia</button>
            </form>
        </div>
    </div>
</div>

</x-layout>
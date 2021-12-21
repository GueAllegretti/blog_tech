<x-layout>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <h1>Inserisci il tuo articolo</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 my-5">
            <form class="my-5" action="{{route('article.store')}}" method="post">
                @csrf
                <input class="mb-3 form-control" type="text" name="title" placeholder="Inserisci il titolo">
                <textarea class="mb-3 form-control" name="description" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-warning">Invia</button>
            </form>
        </div>
    </div>
</div>

</x-layout>
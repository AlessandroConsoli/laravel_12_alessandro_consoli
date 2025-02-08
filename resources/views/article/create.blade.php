<x-layout>
    
    <x-header>
        <h1 class="mt-5">Riempi i campi e crea il tuo articolo</h1>
    </x-header>
    
    
    <div class="container-fluid bg-custom pt-5">
        <x-display-errors/>
        <x-display-messages/>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h3 class="text-center">Oppure</h3>
                <div class="justify-content-center">
                    <div class="d-flex justify-content-center mb-5">
                        <a href="{{route('welcome')}}" class="btn btn-secondary btn-lg mt-2" role="button" aria-disabled="true">Torna alla Home</a>
                    </div>
                </div>
                <form
                class="shadow rounded-2"
                action="{{route('article.store')}}"
                method="POST"
                enctype="multipart/form-data"
                >
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" value="{{old('title')}}" name="title" class="form-control" id="title"  aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo</label>
                    <input type="text" value="{{old('subtitle')}}" name="subtitle" class="form-control" id="subtitle">
                </div>
                
                <div class="mb-3">
                    <label for="body" class="form-label">Corpo dell'articolo</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="5">
                        {{old('body')}}
                    </textarea>
                </div>
                
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci un'immagine (facoltativo)</label>
                    <input type="file" name="img" class="form-control" id="img">
                </div>
                
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-secondary px-4">Conferma l'inserimento</button>
                </div>
            </form>
        </div>
    </div>
</div>




</x-layout>
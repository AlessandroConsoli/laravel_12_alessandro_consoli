<x-layout>

    <x-header>
        <h1 class="mt-5">Archivio Articoli</h1>
    </x-header>

    <div class="container-fluid bg-custom">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="card my-5 mx-5 bg-custom border-primary border-4" style="width: 24rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-subtitle">{{$article->subtitle}}</p>
                    <p class="card-text">{{$article->body}}</p>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <a href="{{route('article.show', compact('article') )}}" class="btn btn-outline-primary border-2 my-1">Vai all'articolo completo</a>
                        @auth
                        <a href="{{route('article.edit', compact('article') )}}" class="btn btn-outline-warning border-2 my-1">Modifica l'articolo</a>
                        <form 
                        action="{{route('article.destroy', compact('article') )}}" 
                        method="POST"> 
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger border-2 my-1 col-12">
                            Elimina l'articolo
                        </button>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
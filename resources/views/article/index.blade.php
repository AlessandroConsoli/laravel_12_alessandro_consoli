<x-layout>

    <x-header>
        <h1 class="mt-5">Archivio Articoli</h1>
    </x-header>

    <div class="container-fluid bg-custom">
        <x-display-messages/>
        <div class="row justify-content-center">
            @forelse ($articles as $article)
            <div class="card my-5 mx-5 bg-card border-primary border-4" style="width: 24rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h4 class="card-title text-info">{{$article->title}}</h4>
                    <p class="card-subtitle mb-4 fs-5">{{$article->subtitle}}<p>
                    @if ($article->tags->isNotEmpty())       
                    @foreach ($article->tags as $tag)
                    <span class="badge text-bg-success">#{{$tag->name}}</span>                     
                    @endforeach                 
                    {{--! Traversal model --}}
                    @endif
                </div>
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
                <h6 class="card-subtitle mt-3">Creato da: {{$article->user->name}}</h6>
            </div>
            @empty
            <div class="col-12">
                <h2 class="text-center vh-100 d-flex align-items-center justify-content-center">Non sono ancora presenti articoli in archivio</h2>
            </div>
            @endforelse
        </div>
    </div>

</x-layout>
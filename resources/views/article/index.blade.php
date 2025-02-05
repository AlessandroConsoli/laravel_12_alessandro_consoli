<x-layout>

    <x-header>
        <h1 class="mt-5">Archivio Articoli</h1>
    </x-header>

    <div class="container-fluid bg-custom">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="card my-5 mx-5" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-subtitle">{{$article->subtitle}}</p>
                    <p class="card-text">{{$article->body}}</p>
                    {{-- <a href="{{route('article.show', compact('article') )}}" class="btn btn-primary">Vai all'articolo completo</a> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
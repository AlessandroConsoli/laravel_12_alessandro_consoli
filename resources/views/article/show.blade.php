<x-layout>
    
    <x-header>

        <div class="card text-center vh-100 bg-custom border-primary border-4 mt-5">
            <div class="card-header text-primary fs-1">
                Articolo {{$article->id}}   
            </div>
            <div class="card-body">
                <img src="{{Storage::url($article->img)}}" class="card-img-top img-custom img-fluid" alt="{{$article->title}}">
                <h3 class="card-title mt-3 fw-bold">{{$article->title}}</h3>
                <h4 class="card-title">{{$article->subtitle}}</h4>
                <p class="card-text">{{$article->body}}</p>
            </div>
            <div class="card-footer bg-custom border-primary">
                2 ore fa
            </div>
        </div>

    </x-header>


    

    
</x-layout>
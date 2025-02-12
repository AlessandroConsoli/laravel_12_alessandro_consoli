<x-layout>
    <x-header>
        
        <div class="card text-center bg-custom border-primary border-4 mt-5">
            <x-display-messages/>
            <div class="card-header text-primary border-primary fs-1">
                Articolo {{$article->id}}   
            </div>
            <div class="mt-3"> 
                Autore: {{$article->user->name}} {{--! Traversal model --}}
            </div>
            <div class="card-body">
                <img src="{{Storage::url($article->img)}}" class="card-img-top img-custom img-fluid" alt="{{$article->title}}">
                <h3 class="card-title mt-3 fw-bold">{{$article->title}}</h3>
                <h4 class="card-title">{{$article->subtitle}}</h4>
                <p class="card-text">{{$article->body}}</p>
            </div>
            <div class="card-footer bg-custom border-primary">
                Ultima revisione: {{$article->user->updated_at}}
            </div>
        </div>

    </x-header>


    

    
</x-layout>
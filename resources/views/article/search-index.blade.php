
<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>Tutti gli articoli per: {{$query}}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            @foreach ($articles as $article )
            <div class="col-12 col-md-3 d-flex justify-content-center mt-3">
                <div class="indexCard">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top card image" alt="{{$article->name}}">
                    <div class="content">
                        <h5>
                            {{$article->name}}
                        </h5>
                        <p class="card-text desc">{{$article->subtitle}}</p>
                        <div class="card-footer">
                            <p class="small fst-italic text-capitalize">
                                @foreach($article->tags as $tag)
                                #{{$tag->name}}
                                @endforeach
                            </p>
                            <p> Redatto il {{$article->created_at->format('d/m/Y')}} da   
                             <a href="{{route('article.byUser', ['user'=>$article->user->id])}}" class="card-text small fst-italic text-decoration-none text-capitalize">
                                {{$article->user->name}}</a>
                            </p>
                            @if($article->category)
                            <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small card-text text-decoration-none fst-capitalize">{{$article->category->name}}</a>
                            @else
                            <p class="small text-muted fst-capitalize">
                              Non categorizzato
                            </p>
                            @endif
                            <a class="action" href="{{route('article.show',compact('article'))}}">
                                Leggi di più
                                <span aria-hidden="true">
                                    →
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>     
        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        </x-layout>

<x-layout>
    <a href="{{route('article.index')}}">
        <img src="/media/icons8-sinistra-60.png" alt="arrow" class="arrowBack  mt-3 pt-5 mb-3 ps-5">
    </a>
    @if(Auth::user()&& Auth::user()->is_revisor)
    <div class="d-flex ps-5">
    
        <a href="{{route('revisor.acceptArticle',compact('article'))}}" class="buttonRev text-white mb-4 mx-2">
            
            Accetta articolo</a>
            <a href="{{route('revisor.rejectArticle',compact('article'))}}" class="buttonRev1 text-white mb-4 mx-2">
                Rifiuta articolo</a>
            </div>
            @endif
    <div class="container-fluid mb-5">
        <div class="row w-100">
            <div class="col-12 col-md-4 ps-5">
                <img src="{{Storage::url($article->image)}}" class="img-fluid border border-white" alt="{{$article->name}}">
                        <h5 class="text-white mt-2">
                            {{$article->name}}
                        </h5>
                        <p class="text-info">{{$article->subtitle}}</p>
                        @if($article->category)
                          <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-white fst-capitalize">{{$article->category->name}}</a>
                          @else
                          <p class="small fst-capitalize text-white">
                            Non categorizzato
                          </p>
                          @endif
                        <p class="small fst-italic text-capitalize text-white mt-1">
                            @foreach($article->tags as $tag)
                            #{{$tag->name}}
                            @endforeach
                        </p>
                        <div class="d-flex justify-content-between align-items-center text-white">
                            <p>
                                
                                Redatto il {{$article->created_at->format('d/m/Y')}} da
                                <a href="{{route('article.byUser', ['user'=>$article->user->id])}}" class="small text-white fst-italic">
                                    {{$article->user->name}}</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 text-white d-flex">
                            <p> {{$article->body}}</p> 
                        </div> 
                        
                            </div>  
                        </div>
                    </x-layout>

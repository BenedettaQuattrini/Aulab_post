<x-layout>
    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1>Inserisci il tuo articolo</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>    
                        @endforeach
                    </ul>
                </div>
                
                @endif
                
                <form class="form1 card p-5" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="name" type="text" class="form-control form1" id="title" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input name="subtitle" type="text" class="form-control form1" id="subtitle" value="{{old('subtitle')}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input name="image" type="file" class="form-control form1 inputImage" id="image">
                    </div>
                    <div class="mb-5">
                    <label for="category" class="form-label">Categoria</label>
                       <select name="category" id="category" class="form-control form1 text-capitalize">
                        @foreach($categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                       </select>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input name="tags" type="text" class="form-control form1" id="tags" value="{{old('tags')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Corpo del testo</label>
                            <textarea name="body" id="body" cols="100" rows="10" class="form1 form-control">{{old('body')}}</textarea>
                        </div>
                    <div>
                        <button type="submit" class="btn btn-outline-info">
                            Pubblica
                        </button>
                        <a class="btn btn-outline-info" href="{{route('homepage')}}">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>
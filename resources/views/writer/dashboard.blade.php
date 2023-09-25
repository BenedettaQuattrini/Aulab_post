<x-layout>

    <div class="container-fluid">
        <div class="row mt-5">
            <h1>
                Bentornato,Redattore
            </h1>
        </div>
    </div>

    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container my-5">
        <div class="row mt-5">
            <h2>
            Articoli in fase di revisione
            </h2>
            <x-writer-articles-table :articles="$unrevisionedArticles"/>
        </div>
    </div>
    <div class="container my-5">
        <div class="row mt-5">
            <h2>
            Articoli pubblicati
            </h2>
            <x-writer-articles-table :articles="$acceptedArticles"/>
        </div>
    </div>
    <div class="container my-5">
        <div class="row mt-5">
            <h2>
            Articoli respinti
            </h2>
            <x-writer-articles-table :articles="$rejectedArticles"/>
        </div>
    </div>


</x-layout>
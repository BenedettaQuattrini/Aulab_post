<x-layout>

    <div class="container-fluid">
        <div class="row mt-5">
            <h1>
                Bentornato,Amministratore
            </h1>
        </div>
    </div>

    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>    
        @endforeach
    </ul>
</div>
@endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di amministratore</h2>
                <x-requests-table :roleRequests=$adminRequests role="admin"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di revisore</h2>
                <x-requests-table :roleRequests=$revisorRequests role="revisor"/>
        
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di redattore</h2>
                <x-requests-table :roleRequests=$writerRequests role="writer"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos=$tags metaType="tags"/>

            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos=$categories metaType="categories"/>
                <form action="{{route('admin.storeCategory')}}" method="POST" class="d-flex mt-5 formAdd">
                    @csrf
                    <input type="text" name="name" id="aggiungiForm" class="form-control p-0 me-2" placeholder=" Inserisci una nuova categoria">
                    <button type="submit" class="btn btn-success text-white" >Aggiungi</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>

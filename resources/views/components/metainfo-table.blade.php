<table>
    <thead class="border-bottom">
        <tr>
            <th scope="col" class="text-center px-2">#</th>
            <th scope="col" class="text-center px-2">Nome tag</th>
            <th scope="col" class="text-center px-2">N articoli collegati</th>
            <th scope="col" class="text-center px-2">Aggiorna</th>
            <th scope="col" class="text-center px-2">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td class="text-center">{{count($metaInfo->articles)}}</td>
            @if($metaType == "tags")
            <td>
            <form class="mt-2" action="{{route('admin.editTag',['tag' => $metaInfo])}}" method="POST">
                @csrf 
                @method('put')
                <input type="text" name="name" placeholder="Nuovo nome" class="form-control w-50 d-inline">
                <button type="submit" class="btn btn-info text-white mb-3">Aggiorna</button>
            </form>
            </td>
            <td>
            <form class="mt-2" action="{{route('admin.deleteTag',['tag'=>$metaInfo])}}" method="POST">
                @csrf 
                @method('delete')
                <button type="submit" class="btn btn-danger text-white mb-3">Elimina</button>
            </form>
            </td>
            @else
            <td>
            <form class="mt-2" action="{{route('admin.editCategory',['category'=>$metaInfo])}}" method="POST">
                @csrf 
                @method('put')
                <input type="text" name="name" placeholder="Nuovo nome" class="form-control w-50 d-inline">
                <button type="submit" class="btn btn-info text-white mb-3">Aggiorna</button>
            </form>
            </td>
            <td>
            <form class="mt-2" action="{{route('admin.deleteCategory',['category'=>$metaInfo])}}" method="POST">
                @csrf 
                @method('delete')
                <button type="submit" class="btn btn-danger text-white mb-3">Elimina</button>
            </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<table>
    <thead class="border-bottom">
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="px-3 mb-2 text-center">Nome</th>
            <th scope="col" class="px-3 mb-2 text-center">Email</th>
            <th scope="col" class="px-3 mb-2 text-center">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roleRequests as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td class="px-3">{{$user->name}}</td>
            <td class="px-3">{{$user->email}}</td>
            <td>
                @switch($role)
                @case('admin')
                <a href="{{route('admin.setAdmin',compact('user'))}}" class="btn btn-info text-white mt-3">Attiva {{$role}}</a>
                <a href="{{route('admin.deleteAdmin',compact('user'))}}" class="btn btn-danger text-white mt-3">Rifiuta {{$role}}</a>
                @break
        
                @case('revisor')
                <a href="{{route('admin.setRevisor',compact('user'))}}" class="btn btn-info text-white mt-3">Attiva {{$role}}</a>
                <a href="{{route('admin.deleteRevisor',compact('user'))}}" class="btn btn-danger text-white mt-3">Rifiuta {{$role}}</a>
                @break
              
                @case('writer')
                <a href="{{route('admin.setWriter',compact('user'))}}" class="btn btn-info text-white mt-3">Attiva {{$role}}</a>
                <a href="{{route('admin.deleteWriter',compact('user'))}}" class="btn btn-danger text-white mt-3">Rifiuta {{$role}}</a>
                @break
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
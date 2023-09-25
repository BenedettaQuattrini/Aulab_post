<x-layout>
    <div class="container-fluid">
        <div class="row">
        <h1 class="text-white text-center mb-5">
            LAVORA CON NOI
        </h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h2 >lavora come amministratore </h2>
                <p class="text-white">Cosa farai:</p>
                <h2  >Lavora come revisore</h2>
                <p class="text-white">Cosa farai:</p>
                <h2 >Lavora come redattore</h2>
                <p class="text-white">Cosa farai:</p>
            </div>
            <div class="col-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>    
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="form1 card p-5" action="{{route('careers.submit')}}" method="post" >
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                 <select name="role" id="role" class="form-control">
                    <option value="">Scegli qui</option>
                    <option value="admin">Amministratore</option>
                    <option value="revisor">Revisore</option>
                    <option value="writer">Redattore</option>
                 </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control form1" id="email" value="{{old('email')??Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" type="text" class="form-control form1" id="message" value="{{old('message')}}"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-info">
                            Invia candidatura
                        </button>
                        <a class="btn btn-outline-info" href="{{route('homepage')}}">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
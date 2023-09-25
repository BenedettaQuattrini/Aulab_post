<x-layout>
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
</div>
           <div class="col-12 d-flex justify-content-center">
            <form class="form" method="POST" action="{{route('login')}}">
                @csrf
                <p class="title">Login </p>   
                <label>
                    <input required="" placeholder="" name="email" id="email" type="email" class="input" value="{{old('email')}}">
                    <span>Email</span>
                </label> 
                    
                <label>
                    <input required="" placeholder="" name="password" id="password" type="password" class="input">
                    <span>Password</span>
                </label>
                <button class="submit">Submit</button>
                <p class="signin">No account? <a href="{{route('register')}}">Create account</a> </p>
            </form>
           </div>
        </div>
    </div>
</x-layout>
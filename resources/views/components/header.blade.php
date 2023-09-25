<header class="container-fluid">
    <div class="row justify-content-center">
     <img src="./media/logo.name-removebg.png" alt="The Aulab Post" class="homeImage">
    </div>
    <div class="row justify-content-center mt-3 w-100">
      @if(session('message'))
      <div class="alert alert-success text-center">
          {{session('message')}}
      </div>
      @endif
        <style>
          /* Stile personalizzato per centrare l'ancora */
          .center-anchor {
            display: flex;
            justify-content: center;
          }
        </style>
        <div class="center-anchor mt-5">
          <a href="#goHere">
            <i class="fa-solid fa-arrow-down fa-bounce myIcons"></i>
            {{-- <img src="./media/icons8-giù-60.png" alt="scroll down" id="arrowDown" class="arrowBack"> --}}
          </a>
        </div>
      </div>
      
</header>
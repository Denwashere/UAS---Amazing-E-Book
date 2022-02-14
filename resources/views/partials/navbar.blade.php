<div class="p-3" style="background-color: #b0ccec;">
    
  <div class="container mt-2 mb-2">
     
      @guest

    <img src="https://i.ibb.co/vQgQDS6/AEBU.png" alt="...">

      
      <a href="/guest" style="color: #b0ccec;">________________________________________________________________________________________________________________________________________________________________</a>
      <a href="/register" class="btn bg-warning text-dark mx-3">Sign Up</a>
      <a href="/login" class="btn bg-warning text-dark mx-3">Log In</a>
      @endguest
  
      @auth
      <img src="https://i.ibb.co/vQgQDS6/AEBU.png" alt="...">
      <form action="/logout" method="post">
        @csrf
        <a href="/guest" style="color: #b0ccec;">__________________________________________________________________________________________________________________________________________________________________________________</a>
        <button type="submit" class="bg-warning btn text-dark">Log Out</button>
      </form>
    @endauth

    </div> 

</div>


    @auth
    <div class=" bg-warning mb-4">
     
      <div class="container">

      <header class="d-flex justify-content-between py-1">
        @if (auth()->user()->email=='admin@email.com')
        <a href="/" class="nav-link text-decoration-none link-dark"><strong>Home</strong></a>
        <a href="/cart" class="nav-link text-decoration-none link-dark"><strong>Cart</strong></a>
        <a href="/profile" class="nav-link text-decoration-none link-dark"><strong>Profile</strong></a>
         <a href="/maintain" class="nav-link text-decoration-none link-dark"><strong> Account Maintenance</strong></a>
      
      {{-- <form action="/logout" method="post">
         @csrf
         <button type="submit" class="btn btn-outline-light text-dark" href="/logout">Log Out</button>
      </form> --}}
    @endif


    @if (auth()->user()->email!='admin@email.com')
    <a href="/" class="nav-link text-decoration-none link-dark"><strong>Home</strong></a>
    <a href="/cart" class="nav-link text-decoration-none link-dark"><strong>Cart</strong></a>
    <a href="/profile" class="nav-link text-decoration-none link-dark" href="/logout"><strong> Profile</strong></a>
    {{-- <form action="/logout" method="post">
      @csrf
      <button type="submit" class="btn text-dark">Log Out</button>
    </form> --}}
    @endif
    @endauth


{{-- 
    @guest
    <div class="d-flex justify-content-center">
      <a href="/register" class="text-dark mx-3"><strong>Sign Up</strong></a>
      <a href="/login" class="text-dark mx-3"><strong>Log In</strong></a>
    </div>
    @endguest --}}
    
</header>
</div>
</div>
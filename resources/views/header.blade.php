<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid text-center">
    <a class="navbar-brand" href="/home">ShopNest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Support">Support</a>
        </li>
          <a class="nav-link" href="/AboutUs">About Us</a>
        </li>
         <form class="d-flex" action="/Search" method="get">
           
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        @if(isset($data) && $data->count() > 0)
    <h2>Search Results:</h2>
    <ul>
        @foreach($data as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
  
@endif
        <!-- Cart Item Link -->
        @if(session()->has('user'))
    @php
        $userId = session('user')->id; 
        $rowCount = DB::table('cart')->where('user_id', $userId)->count();
    @endphp

    <li class="nav-item">
        <a class="nav-link mx-5" href="/cartitem">Cart ({{$rowCount}})</a>
    </li>

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-regular fa-circle-user"></i> {{ Session::get('user')['name'] }}    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="/userDetail">My Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
    </ul>
</li>
   @else
    <li class="nav-item dropdown mx-5">
    <a class="nav-link dropdown-toggle" href="/login" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-regular fa-circle-user"></i></a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="/">Login</a></li></ul>
        @endif
        
        
        <!-- Search Form -->
       
        
      
       
        
    </div>
  </div>
</nav>

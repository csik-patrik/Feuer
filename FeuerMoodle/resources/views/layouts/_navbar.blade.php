<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Kezdőlap</a>
        </li>
        @auth
            @if(Auth::user()->role->role_id==1)
              <li class="nav-item">
                <a class="nav-link" href="{{url('/admin')}}" >Adminisztráció</a>
              </li>
            @endif
        @endauth
        <li class="nav-item">
          <a class="nav-link" href="{{url('/user/courses')}}" >Kurzusok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profil</a>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="btn btn-dark">Kijelentkezés</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>
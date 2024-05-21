<header>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="{{ route('home') }}" target="_blank" class="navbar-brand">Visita il sito</a>
          <div class="d-flex align-items-center">
              <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <p class="pt-3 me-3">{{ Auth::user()->name }}</p>
              <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-right-from-bracket"></i></button>
              </form>
          </div>
        </div>
    </nav>

</header>

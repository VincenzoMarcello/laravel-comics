<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div class="d-flex justify-content-between w-100">
      <div>
        <img src={{ $image }} alt="">
      </div>
      <div class="d-flex align-items-center">
        <h5>
          <a class="nav-link mx-2" href="{{ route('home') }}">COMICS</a>
        </h5>
        <h5>
          <a class="nav-link mx-2" href="{{ route('movies') }}">MOVIES</a>
        </h5>
        <h5>
          <a class="nav-link mx-2" href="{{ route('games') }}">GAMES</a>
        </h5>
      </div>
    </div>
  </div>
  </div>
</nav>

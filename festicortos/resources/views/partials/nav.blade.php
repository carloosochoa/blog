<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Festicortos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('principal') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('libros') }}">Libros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('cortos') }}">Cortos</a>
      </li>
    </ul>

  </div>
</nav>
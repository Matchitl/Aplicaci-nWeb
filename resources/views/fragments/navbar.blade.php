
<nav  class="navbar bg-dark navbar-expand-lg border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index')}}">Tiendita Online</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
          <a class="nav-link" href="{{route('products.index')}}">Productos</a>
          <a class="nav-link" href="{{route('clients.index')}}">Clientes</a>
          <a class="nav-link" href="{{route('sales.index')}}">Ventas</a>
        </div>
      </div>
    </div>
  </nav>

<nav class="navbar navbar-expand-lg p-2 navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('Products')}}>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('Account')}}>Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('Insert')}}">Add Product</a>
        </li>
      </ul>
    </div>
  </nav>
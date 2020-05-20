<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand" href="#">PT Rbiz Indonesia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{ url('/produk/create') }}">Buat Produk</a>
        <a class="nav-item nav-link" href="{{ url('/produk') }}">Lihat Produk</a>
        <a class="nav-item nav-link" href="{{ url('/katagori/create') }}">Buat Category</a>
        <a class="nav-item nav-link" href="{{ url('/katagori') }}">Lihat Category</a>
      </div>
    </div>
</nav>

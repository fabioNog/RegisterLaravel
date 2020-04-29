<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li @if($current=="register/public") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/register/public">Home</a>
        </li>
        <li @if($current=="register/public/produtos") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/register/public/produtos">Produtos</a>
        </li>
        <li @if($current=="register/public/categorias") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/register/public/produtosajax">ProdutosAjax</a>
        </li>
        <li @if($current=="register/public/categorias") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/register/public/categorias">Categorias</a>
        </li>
      </ul>
    </div>
  </nav>
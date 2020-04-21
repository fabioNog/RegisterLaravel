@extends('pages.app', ["current" => "register/public/produtos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>

        @if (count($produtos) > 0)
                    
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $prod)
                    <tr>
                        <td>{{$prod->estoque}}</td>
                        <td>{{$prod->preco}}</td>
                        @foreach ($categorias as $cat)
                            @if($prod->categoria_id == $cat->id)
                                <td>{{$cat->nome}}</td> 
                            @endif                        
                        @endforeach
                        <td>
                            <a 
                                 href="/register/public/categorias/editar/{{$prod->id}}"
                                 class="btn btn-sm btn-primary"
                            >
                                Editar
                            </a>
                            <a 
                                 href="/register/public/categorias/excluir/{{$prod->id}}"
                                 class="btn btn-sm btn-danger"
                            >
                                Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @endif
    </div>
    <div class="card-footer">
        <a href="/register/public/produtos/novoproduto" class="btn btn-dark" role="button">Cadastrar Produto</a>
    </div>
</div>
@endsection
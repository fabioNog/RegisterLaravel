@extends('pages.app', ["current" => "produtos"])
@section('body')
@section('body')

<div class="card boder">
    <div class="card-body">
    <form         
        action="/register/public/produtos/{{$produtos->id}}"
        method="POST"
    >
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto em estoque</label>
                <input 
                    type="text" 
                    name="estoqueProduto" 
                    id="estoqueProduto"
                    value={{$produtos->estoque}}
                    placeholder="Produto"
                >           
            </div>
            <div class="form-group">                
                <label for="precoProduto">Preço do Produto</label>
                <input 
                    type="number" 
                    name="precoProduto" 
                    id="precoProduto" 
                    step="0.01"
                    value={{$produtos->preco}}
                    placeholder="Preço em R$"                   
                >               
            </div>
            <div class="form-group">
                <div row>
                    <label for="categoriaIDProduto col-lg-4">
                        Escolha o ID Categoria
                    </label>                   
                    <select class="form-control col-lg-2 col-sm-2"
                         id="categoriaIDProduto"
                         name="categoriaIDProduto"                         
                    >                         
                        @foreach ($categorias as $cats)
                                <option                                 	
                                    selected="selected" 
                                    ? value="{{ $cats->id }}"
                                    : value = "{{$produtos->categoria_id}}"                                                                                                                                      
                                    key={{$produtos->id}}
                                >
                                    {{$cats->nome}}
                                </option>
                        @endforeach                                      
                    </select>
                </div>                                
            </div>
            <button type="submit" class="btn btn-dark btn-sm">Editar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div> 
@endsection
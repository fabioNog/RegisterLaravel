@extends('pages.app', ["current" => "produtos"])
@section('body')
@section('body')
<div class="card boder">
    <div class="card-body">
        <form action="/register/public/produtos/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto em estoque</label>
                <input 
                    type="text" 
                    name="estoqueProduto" 
                    id="estoqueProduto"
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
                    placeholder="Preço em R$"                   
                >               
            </div>
            <div class="form-group">                
                <label for="categoriaIDProduto">ID da Categoria</label>
                <input 
                    type="number" 
                    name="categoriaIDProduto" 
                    id="categoriaIDProduto" 
                    placeholder="ID Categoria "                   
                >                
            </div>
            <button type="submit" class="btn btn-dark btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div> 
@endsection
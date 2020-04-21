<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Produto;
use App\Categorias;
class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $categorias= Categoria::all();
        return view('pages.produtos.produtos',compact(["produtos","categorias"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        // dd($categorias);
        return view('pages.produtos.novoproduto',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new Produto;
        $produtos->estoque = $request->estoqueProduto;
        $produtos->preco = $request->precoProduto;
        $produtos->categoria_id = $request->categoriaIDProduto;
        // Salvando os produtos
        $produtos->save();
        // redirecionando para a listagem
        return redirect('register/public/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = Produto::find($id);
        $categorias = Categoria::all();
        return view('pages.produtos.editarProdutos',compact(['produtos','categorias']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produtos = Produto::find($id);        
        if($produtos){
            $produtos->estoque = $request->input('estoqueProduto');
            $produtos->preco = $request->input('precoProduto');
            $produtos->categoria_id = $request->input('categoriaIDProduto');
            $produtos->save();
        }
        return redirect('register/public/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if($produto){
            $produto->delete();
        }
        return redirect('register/public/produtos');        
    }
}

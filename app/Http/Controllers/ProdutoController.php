<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\CategoriaProduto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategoriaProdutos = CategoriaProduto::all();

        return view('produtos.create',  ['CategoriaProdutos' => $CategoriaProdutos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $now = date("Y-m-d H:i:s"); 

        $request->validate([
            'id_categoria_produto' => 'required',
            'nome_produto' => 'required|max:150',
            'valor_produto' => 'required|numeric'
        ]);       
       
        $produto = new Produto;
        $produto->id_produto = $request->id_produto;
        $produto->id_categoria_produto = $request->id_categoria_produto;
        $produto->data_cadastro = $now;
        $produto->nome_produto = $request->nome_produto;
        $produto->valor_produto = $request->valor_produto;
        $produto->save();

        return redirect('produto')
            ->with('success', 'Produto criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(int $id_produto)
    {
        $produto = Produto::find($id_produto);

        return view('produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}

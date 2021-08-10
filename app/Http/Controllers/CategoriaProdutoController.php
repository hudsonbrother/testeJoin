<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProduto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CategoriaProdutos = CategoriaProduto::all();

        return view('categorias.index', ['CategoriaProdutos' => $CategoriaProdutos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome_categoria' => 'required'
        ]);       

        CategoriaProduto::create($request->all());

        return redirect('categoria')
            ->with('success', 'CategoriaProduto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function show(int $id_categoria_produto)
    {
        $categoria_produto = CategoriaProduto::find($id_categoria_produto);
        
        return view('categorias.show', [ 'categoria_produto' => $categoria_produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id_categoria_produto)
    {
        $categoria_produto = CategoriaProduto::find($id_categoria_produto);

        if(!$categoria_produto){
            abort(404);
        }

        return view('categorias.edit', [ 'categoria_produto' => $categoria_produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id_categoria_produto)
    {
        $request->validate([
            'nome_categoria' => 'required',
        ]);
        
        $categoria_produto = CategoriaProduto::find($id_categoria_produto);
        $categoria_produto->update($request->all());

        return redirect('categoria')
            ->with('success', 'CategoriaProduto editado com sucesso');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id_categoria_produto)
    {
        $categoria_produto = CategoriaProduto::find($id_categoria_produto);
        $categoria_produto->delete();

        return redirect('categoria')
            ->with('success', 'CategoriaProduto deletado com sucesso!');
    }
}

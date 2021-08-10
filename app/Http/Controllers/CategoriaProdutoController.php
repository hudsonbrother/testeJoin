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
        $CategoriaProdutos = CategoriaProduto::latest()->paginate(5);

        return view('categorias.index', [ 'CategoriaProdutos' => $CategoriaProdutos]);
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
            'nome' => 'required'
        ]);

        CategoriaProduto::create($request->all());

        return redirect()->route('CategoriaProdutos.index')
            ->with('success', 'CategoriaProduto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaProduto $CategoriaProduto)
    {
        return view('CategoriaProdutos.show', compact('CategoriaProduto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaProduto $CategoriaProduto)
    {
        return view('CategoriaProdutos.edit', compact('CategoriaProduto'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaProduto $CategoriaProduto)
    {
        $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'location' => 'required',
            'cost' => 'required'
        ]);
        $CategoriaProduto->update($request->all());

        return redirect()->route('CategoriaProdutos.index')
            ->with('success', 'CategoriaProduto updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaProduto  $CategoriaProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaProduto $CategoriaProduto)
    {
        $CategoriaProduto->delete();

        return redirect()->route('CategoriaProdutos.index')
            ->with('success', 'CategoriaProduto deleted successfully');
    }
}

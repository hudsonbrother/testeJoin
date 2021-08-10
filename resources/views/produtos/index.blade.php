@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 pb-4">
        <div class="flex justify-between items-center w-full">
            <h3 class="text-grey text-sm font-normal">Meus Produtos</h3>
            <a href="/produto/create" class="btn btn-success">Criar Produto</a>
        </div>
    </header>

    <div class="row">
        @forelse ($produtos as $produto)
            <table class="table">
                <thead>
                    <th scope="col">id_produto</th>
                    <th scope="col">id_categoria_produto</th>
                    <th scope="col">data_cadastro</th>
                    <th scope="col">nome_produto</th>
                    <th scope="col">valor_produto</th>
                </thead>
                <tbody>
                   <td scope="row">{{ $produto->id_produto }}</td>
                   <td>{{ $produto->id_categoria_produto }}</td>
                   <td>{{ $produto->data_cadastro }}</td>
                   <td>{{ $produto->nome_produto }}</td>
                   <td>{{ $produto->valor_produto }}</td>
                </tbody>
            </table>
        @empty
            <div>Ainda não temos Produtos</div>
        @endforelse
    </div>
@endsection
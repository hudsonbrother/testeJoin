@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 pb-4">
        <div class="flex justify-between items-center w-full">
            <h3 class="text-grey text-sm font-normal">Minhas Categorias</h3>
            <a href="/categoria/create" class="btn btn-success">Nova Categoria</a>
        </div>
    </header>

    <div class="row">
        @forelse ($CategoriaProdutos as $Categoria)
            <div class="col-sm-4">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
                    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-light pl-4">
                        <a href="categoria/{{ $Categoria->id_categoria_produto }}" class="text-light card-text">{{ $Categoria->nome_categoria }}</a>
                    </h3>
                </div>
            </div>
        @empty
            <div>Ainda não temos categorias</div>
        @endforelse
    </div>
@endsection
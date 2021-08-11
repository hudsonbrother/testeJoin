@extends ('layouts.app')

@section('content')
    <div class="form_padding">
        <h1 class="text-center">
            Criar novo produto
        </h1>

        <div class="form_padding">

        <form  action="/produto/{{$produto->id_produto }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="id_produto">Escolha a produto do produto</label>

                <div class="col-sm-10">
                    <select class="form-select" aria-label="Selecione a categoria" name="id_categoria_produto">
                        @foreach ( $CategoriaProdutos as  $CategoriaProduto)
                        <option value='{{ $CategoriaProduto->id_categoria_produto }}'>{{ $CategoriaProduto->nome_categoria }}</option>
                           
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="nome_produto">Digite o nome do produto</label>

                <div class="col-sm-10">
                    <input 
                        type="text" 
                        class="form-control"
                        name="nome_produto" 
                        value="{{ $produto->nome_produto}}"
                        required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="valor_produto">Digite o valor do produto</label>

                <div class="col-sm-10">
                    <input 
                        type="number" 
                        class="form-control"
                        name="valor_produto" 
                        value="{{ $produto->valor_produto}}"
                        required>
                </div>
            </div>
            
            <div class="col-auto">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="put">
                <input type="submit" name="name" value="Cadastrar">
            </div>           
        </form>
    </div>
@endsection


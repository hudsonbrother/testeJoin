@extends ('layouts.app')

@section('content')
    <div class="form_padding">
        <h1 class="text-center">
            Criar novo produto
        </h1>

        <div class="form_padding">

        <form method="POST" action="/produto">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="id_categoria_produto">Escolha a categoria do produto</label>

                <div class="col-sm-10">
                    <select class="form-select" aria-label="Selecione a categoria" name="id_categoria_produto">
                        <option selected>Selecione a categoria</option>
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
                        required>
                </div>
            </div>
            
            <div class="col-auto">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="name" value="Cadastrar">
            </div>           
        </form>
    </div>
@endsection


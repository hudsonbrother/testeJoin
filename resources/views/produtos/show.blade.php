@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <h1>Página de detalhe</h1>

            <table class="table">
                <thead>
                    <th>Id do produto</th>
                    <th>Nome da Categoria</th>
                    <th>Data do Cadastro</th>
                    <th>Nome do produto</th>
                    <th>Valor do produto</th>
                    <th>Selecionar</th>
                    <th></th>
                </thead>
                <tbody>
                    <td scope="row">{{ $produto->id_produto }}</td>
                    @foreach($produto->CategoriaProdutos as $f)       
                        <td>{{ $f['nome_categoria'] }}</td>
                    @endforeach
                    <td>{{ date('d/m/Y H:i:s', strtotime($produto->data_cadastro)) }} - utc</td>
                    <td scope="row">{{ $produto->nome_produto }}</td>
                    <td scope="row">{{ $produto->valor_produto }}</td>
                    <td><a href="{{ $produto->id_produto }}/edit" class="btn btn-success">Editar</a></td>
                    <td>
                        <form action="/produto/{{  $produto->id_produto }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" name="name" class="btn btn-danger"value="Apagar">
                        </form>    
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
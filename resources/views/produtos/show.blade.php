@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Página de detalhe</h1>

            <table class="table">
                <thead>
                    <th scope="col">id_produto</th>
                    <th>id_categoria_produto</th>
                    <th>data_cadastro</th>
                    <th>nome_produto</th>
                    <th>valor_produto</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </thead>
                <tbody>
                    <td scope="row">{{ $produto->id_produto }}</td>
                    <td scope="row">{{ $produto->id_categoria_produto }}</td>
                    <td scope="row">{{ $produto->data_cadastro }}</td>
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
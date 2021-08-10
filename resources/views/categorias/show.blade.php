@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Página de detalhe</h1>

            <table class="table">
                <thead>
                    <th scope="col">id</th>
                    <th scope="col">Categoria nome</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <th scope="row">{{ $categoria_produto->id_categoria_produto }}</th>
                    <td>{{ $categoria_produto->nome_categoria }}</td>
                    <td><a href="{{ $categoria_produto->id_categoria_produto }}/edit" class="btn btn-success">Editar</a></td>
                    <td>
                        <form action="/categoria/{{  $categoria_produto->id_categoria_produto }}" method="POST">
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
@extends ('layouts.app')

@section('content')
    <div class="form_padding">
        <h1 class="text-center">
            Editar categoria 
        </h1>

        <div class="form_padding">
            
        <form action="/categoria/{{ $categoria_produto->id_categoria_produto }}" method="POST">
           
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="nome_categoria">Edite o nome de Categoria</label>

                <div class="col-sm-10">
                    <input 
                        value="{{ $categoria_produto->nome_categoria }}"
                        type="text" 
                        class="form-control"
                        name="nome_categoria" 
                        required>
                </div>
                <span class="help-block">{{ ($errors->has('nome_categoria')) ? $errors->first('nome_categoria') : '' }}</span>  
            </div>
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-primary mb-3" name="name">
        </form>
    </div>
@endsection


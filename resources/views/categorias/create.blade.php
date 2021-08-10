@extends ('layouts.app')

@section('content')
    <div class="form_padding">
        <h1 class="text-center">
            Adicionar nova categoria
        </h1>

        <div class="form_padding">

        <form method="POST" action="/categoria">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" for="nome">Digite o nome do produto</label>

                <div class="col-sm-10">
                    <input 
                        type="text" 
                        class="form-control"
                        name="nome_categoria" 
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


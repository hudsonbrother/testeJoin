@extends ('layouts.app')

@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white py-12 px-16 rounded shadow">
        <h1 class="text-2xl font-normal mb-10 text-center">
            Criar Categoria
        </h1>

        <form method="POST" action="/categoria">
            @csrf
            <div class="field mb-6">
                <label class="label text-sm mb-2 block" for="title">Nome</label>
            
                <div class="control">
                    <input 
                        type="text" 
                        class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full" 
                        name="title" 
                        placeholder="Digite o nome da categoria"
                        required>
                </div>
            </div>
            <div class="control">
                <input type="submit" class="button is-link mr-2" name="">
            </div>           
        </form>
    </div>
@endsection
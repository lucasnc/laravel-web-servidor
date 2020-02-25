@extends('layout.default')
@section('title', 'Cadastrar Dog')
@section('content')

<div class=" my-5">
    @if ($message = Session::get('success'))
        <div class="alert green lighten-1 text-white alert-success text-center col-md-4 col-lg-6 col-xl-6 mx-auto ">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        
    @endif
    @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger red text-white col-md-4 col-lg-6 col-xl-6 mx-auto">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="card card-cascade col-md-12 col-lg-6 col-xl-6 mx-auto">
        
        <h5 class="card-header view-cascade elegant-color-dark white-text text-center py-4">
            <strong>Cadastrar Dog</strong>
        </h5>
        
        <div class="card-body px-lg-5 pt-0">
            
            <form 
                class="text-center" 
                action="/cadastrar-dog" 
                method="POST"
                enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="md-form mt-3">
                    <input type="text" name="nome" id="materialContactFormName" class="form-control" value="{{ old('nome') }}" required>
                    <label for="materialContactFormName">Nome</label>
                </div>
                <select name="tamanho" class="browser-default custom-select" required>
                    <option value="" disabled selected>Selecione o tamanho do cachorro</option>
                    <option value="Grande">Grande</option>
                    <option value="Médio">Médio</option>
                    <option value="Pequeno">Pequeno</option>
                </select>
                <div class="md-form">
                    <textarea 
                        name="descricao" 
                        id="materialContactFormMessage" 
                        class="form-control md-textarea" 
                        rows="4"
                        required>{{ old('descricao') }} </textarea>
                    <label for="materialContactFormMessage">
                        Descrição
                    </label>
                </div>
                <div class="file-field">
                    <label 
                        class=" btn grey text-white" 
                        id='file-name' 
                        for='selecao-arquivo'>
                        Selecione uma foto
                    </label>
                    <input id='selecao-arquivo' type='file' name="image" style="display: none" >
                </div>
            
                <button 
                    class="text-white btn green btn-block z-depth-0 my-4 waves-effect"
                    type="submit"
                >
                    Enviar
                </button>
                
            </form>
        </div>
    </div>
</div>
<script>
   
    
    var $input    = document.getElementById('selecao-arquivo'),
    $fileName = document.getElementById('file-name');

    $input.addEventListener('change', function(){
        $fileName.textContent = this.value;
    });
</script>
@stop
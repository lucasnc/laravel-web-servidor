@extends('layout.default')
@section('title', 'Adotar')
@section('content')

<div class="my-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success green lighten-1 text-white alert-block text-center col-md-4 col-lg-6 col-xl-6 mx-auto ">
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
        <h5 class="card-header view-cascade elegant-color-dark text-white text-center py-4">
            <strong>Adoção</strong>
        </h5>
        <div class="card-body px-lg-5 pt-0">
        @foreach($dog as $dog)
            <form class="text-center" action="/adotar" method="POST">
            {{ csrf_field() }}
                <div class="view overlay z-depth-1-half rounded z-depth-2 mb-lg-0 mb-4 mt-3">
                    <img class="img-fluid img-responsive z-depth-1 wave-effect col-12" src="/images/{{$dog->image ? $dog->image : 'default-image.jpg' }}">
                    <a>
                        <div class="mask waves-effect waves-light rgba-white-slight"></div>
                    </a>
                </div>
                
                <div class="md-form mt-3">
                    <input type="text" id="materialContactFormNamealContactFormName" class="form-control" name="nome" value="{{ old('nome') }}" required>
                    <label for="materialContactFormNamealContactFormName">Nome</label>
                </div>
                <div class="md-form">
                    <input type="email" id="materialContactFormEmaillContactFormEmail" class="form-control" name="email" value="{{ old('email') }}" required>
                    <label for="materialContactFormEmaillContactFormEmail">E-mail</label>
                </div>
                <div class="md-form">
                    <input type="number" id="materialContactFormEmaillContactFormEmail" value="{{ $dog->iddog }}" class="form-control" name="iddog" style="display: none">
                    
                </div>
                <div class="md-form">
                    <textarea id="materialContactFormMessage" class="form-control md-textarea" name="pergunta" rows="3" required> {{ old('mensagem') }}</textarea>
                    <label for="materialContactFormMessage">Por que você gostaria de adotar este cachorro?</label>
                </div>
                <button class="btn green white-text btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit">Enviar</button>
            </form>
        @endforeach
        </div>
    </div>
</div>

@stop
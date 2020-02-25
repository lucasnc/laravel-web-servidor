@extends('layout.default')
@section('title', 'Ajude-nos')
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
            <strong>Ajude-nos</strong>
        </h5>
        <div class="card-body px-lg-5 pt-0">
            <form class="text-center" method="POST">
                {{ csrf_field() }}
                <div class="md-form mt-3">
                    <input type="text" id="materialContactFormName" class="form-control" name="nome" value="{{ old('nome') }}" required>
                    <label for="materialContactFormName">Nome</label>
                </div>
                <div class="md-form">
                    <input type="email" id="materialContactFormEmail" class="form-control" name="email" value="{{ old('email') }}" required>
                    <label for="materialContactFormEmail">E-mail</label>
                </div>
                <select class="custom-select browser-default" id="assunto" name="assunto" required>
                    <option value="" disabled selected>Escolha um assunto</option>
                    <option value="1" >Feedback</option>
                    <option value="2">Reportar bug</option>
                </select>
                <div class="md-form">
                    <textarea id="materialContactFormMessage" class="form-control md-textarea" name="mensagem" rows="3" required>{{ old('mensagem') }}</textarea>
                    <label for="materialContactFormMessage">Mensagem</label>
                </div>
                <button class="btn text-white green btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit">Enviar</button>
            </form>
        </div>
        </div>
    </div>

@stop
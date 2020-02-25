@extends('layout.default')
@section('title', 'Dashboard')
@section('content')
<main>
    <div class="container-fluid mt-5">
        <div class="card mb-4 wow fadeIn">
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-2 mb-sm-0 pt-1">
                    <span>Painel Principal</span>
                    <span>/</span>
                    <span class="yellow-text">Dogs pendentes</span>
                </h4>
            </div>
        </div>
        <div class="row wow fadeIn">

            @foreach($dog as $dog)

            <div class="col-md-12 mb-4">
                <div class="card ">
                    <div class="card-body d-sm-flex justify-content-between">
                        <div class="img-responsive col-md-2">
                            <img class="card-img-top" src="/images/{{$dog->image ? $dog->image : 'default-image.jpg' }}" alt="Card image cap"
                                style="display: inline-flex;height: 150px; width: 160px;">
                        </div>
                        <div class="justify-content-start col-md-3">
                            <div><small > <strong>Nome: </strong>{{ $dog->nome }}</small></div>
                            <div><small > <strong>Tamanho: </strong>{{ $dog->tamanho }}</small></div>
                            <div><small > <strong>Descrição: </strong>{{ $dog->descricao }}</small></div>
                        </div>

                        <div class="justify-content-end col-md-4">
                            <a href="{{url('dashboard/aceitar/'.$dog->iddog)}}"><button
                                    class="btn btn-green btn-sm ">
                                    <i class="fas fa-check"> </i> Aprovar
                                </button></a>
                            <a href="{{url('dashboard/recusar/'.$dog->iddog)}}"><button class="btn btn-red btn-sm "
                                    type="submit">
                                    <i class="fas fa-trash"></i> Recusar
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <div class="card mb-4 wow fadeIn">
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-2 mb-sm-0 pt-1">
                    <span>Painel Principal</span>
                    <span>/</span>
                    <span class="yellow-text">Adoções pendentes</span>
                </h4>
            </div>
        </div>

        <div class="row wow fadeIn">

            @foreach($adocao as $adocao)

            <div class="col-md-12 mb-4">
                <div class="card ">
                    <div class="card-body d-sm-flex justify-content-between">
                        <div class="img-responsive col-md-2">
                            <img class="card-img-top" src="/images/{{$adocao->image ? $adocao->image : 'default-image.jpg' }}" alt="Card image cap"
                                style="display: inline-flex;height: 150px; width: 160px;\">
                        </div>
                        <div class="justify-content-start col-md-3">
                            <div><small > <strong>Nome:</strong>{{ $adocao->nomePessoa }}</small></div>
                            <div><small > <strong>Email: </strong>{{ $adocao->email }}</small></div>
                            <div><small > <strong>Cachorro: </strong>{{ $adocao->nome }}</small></div>
                            <div><small > <strong>Resposta: </strong>{{ $adocao->pergunta }}</small></div>
                        </div>

                        <div class="justify-content-end col-md-4">
                            <a href="{{url('adocao/aceitar/'.$adocao->idadocao)}}"><button
                                    class="btn btn-green btn-sm ">
                                    <i class="fas fa-check"> </i> Aprovar
                                </button></a>
                            <a href="{{url('adocao/recusar/'.$adocao->idadocao)}}"><button
                                    class="btn btn-red btn-sm " type="submit">
                                    <i class="fas fa-trash"></i> Recusar
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="row wow fadeIn">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="blue-grey lighten-4">
                                <tr>
                                    <th>Nome</th>
                                    <th>Tamanho</th>
                                    <th>Descrição</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($dog2 as $dog2)

                                <tr>

                                    <td>{{ $dog2->nome }}</td>
                                    <td>{{ $dog2->tamanho }}</td>
                                    <td data-toggle="tooltip" title="{{ $dog2->descricao }}">
                                        {{ mb_strimwidth($dog2->descricao, 0, 20, "...") }}
                                    </td>
                                    <td>
                                        <a href="{{url('dog/excluir/'.$dog2->iddog)}}">
                                            <button
                                                class="btn btn-red btn-sm my-0" type="submit">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body ">
                        <table class="table table-hover">
                            <!-- Table head -->
                            <thead class="blue lighten-4">
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Mensagem</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($ajuda as $ajuda)

                                <tr>

                                    <td>{{ $ajuda->nome }}</td>
                                    <td>{{ $ajuda->email }}</td>
                                    <td data-toggle="tooltip" title="{{ $ajuda->mensagem }}" >
                                        {{  mb_strimwidth($ajuda->mensagem, 0, 10, "...") }}
                                    </td>
                                    <td>
                                        <a href="{{url('ajuda/excluir/'.$ajuda->idajuda)}}">
                                            <button class="btn btn-red btn-sm my-0" type="submit">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
</script>
@endsection
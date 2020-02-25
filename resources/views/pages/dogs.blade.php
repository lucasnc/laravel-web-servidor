@extends('layout.default')
@section('title', 'Dogs')
@section('content')

<h2 class="h1-responsive font-weight-bold align-middle my-3"><i class="fas fa-paw pr-2"></i>Dogs</h2>

<hr >
<a href="cadastrar-dog">
    <button 
        type="button" 
        class="text-white btn green btn-rounded btn-md">
        <i class="fas fa-dog"></i> 
        Novo dog
    </button>
</a>
<div class="row">

    @foreach ($dogs as $dog)
    <div class="col-lg-4 col-md-10 mx-auto my-4">
          <div class="card">
            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid mx-auto img-top" src="/images/{{$dog->image ? $dog->image : 'default-image.jpg' }}" alt="{{ $dog->nome }}" onerror="this.src='/images/default-image.jpg'">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
    
            <!--Card content-->
            <div class="card-body">
    
                <h5 class="amber-text pb-2 pt-1"><i class="fas fa-bone"></i> Tamanho: {{ $dog->tamanho }} </h5>
                <h4 class="font-weight-bold card-title"> {{ $dog->nome }} </h4>

                <p class="card-text" data-toggle="tooltip" title="{{$dog->descricao }}"> 
                    {{ mb_strimwidth($dog->descricao, 0, 40, "...")  }} 
                   
                </p>
                <div class="mb-1">
                    <a href="{{url('dogs/'.$dog->iddog)}}" class="btn yellow darken-1 text-dark">Adotar</a>
                </div>
                
            </div>
          
        </div>
    </div>
    @endforeach

    <div class="container">
        <div class="my-5 d-flex justify-content-center">{{ $dogs->links() }}</div>
    </div>

    <div id="fb-root "></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0">
    </script>
</div class="row">

<div class="fb-comments d-flex justify-content-center" data-href="{{Request::url()}}"
    data-size="large" data-numposts="5"></div>
</div>
<script>
    $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
</script>
<style>
    .pagination .page-item.active .page-link {
        background-color: #fdd835;
    }
    .pagination .page-item.active .page-link:hover {
        background-color: #000;
    }
</style>

@stop
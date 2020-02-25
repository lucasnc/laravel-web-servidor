@extends('layout.default')
@section('title', 'Início')
@section('content')

<div class="row mt-3">
	<section class="my-5">

		<div class="row">
			<div class="col-lg-5 ">
				<div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
					<img class="img-fluid" src="dogutfpr.jpg" alt="Cachorro Triste">
					<a>
						<div class="mask rgba-white-slight"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-7">
				<a href="#!" class="grey-text">
					<h6 class="font-weight-bold mb-3"><i class="fas fa-paw pr-2"></i>Adote e Cuide</h6>
				</a>
				<h3 class="font-weight-bold mb-3"><strong>Adote um Cachorro</strong></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Mattis rhoncus urna neque viverra justo. Ornare arcu odio ut sem nulla. 
					Amet nisl purus in mollis nunc. Dui nunc mattis enim ut tellus elementum sagittis. 
					Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. 
					Luctus accumsan tortor posuere ac ut consequat. Massa massa ultricies mi quis hendrerit. 
					Bibendum ut tristique et egestas quis ipsum suspendisse. Purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus. 
					Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est. 
				</p>
				<a class="btn yellow darken-1  text-dark btn-md" href="dogs">Adote</a>
			</div>
		</div>
		<hr class="my-5">
		<div class="row">
			<div class="col-lg-7">
				<a href="#!" class="grey-text">
					<h6 class="font-weight-bold mb-3"><i class="fas fa-heart pr-2"></i>Contribua com o site</h6>
				</a>
				<h3 class="font-weight-bold mb-3"><strong>Ajude-nos</strong></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Mattis rhoncus urna neque viverra justo. Ornare arcu odio ut sem nulla. 
					Amet nisl purus in mollis nunc. Dui nunc mattis enim ut tellus elementum sagittis. 
					Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. 
					Luctus accumsan tortor posuere ac ut consequat. Massa massa ultricies mi quis hendrerit. 
					Bibendum ut tristique et egestas quis ipsum suspendisse. 
					Purus faucibus ornare suspendisse sed nisi lacus sed viverra tellus. 
					Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est. 
				</p>
				<a class="btn yellow darken-1 text-dark  btn-md mb-lg-0 mb-4" href="ajude-nos">Preencha o Formulário</a>
			</div>
			<div class="col-lg-5">
				<div class="view overlay rounded z-depth-2">
					<img class="img-fluid" src="utfpr.jpg" alt="Cachorro Triste">
					<a>
						<div class="mask rgba-white-slight"></div>
					</a>
				</div>
			</div>
		</div>
		<hr class="my-5">
		<div 
			class="card card-image my-5" 
			style="background-image: url(https://cdn.pixabay.com/photo/2017/09/25/13/12/dog-2785074_960_720.jpg); background-size: cover;
			background-position: center;">
			
			<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
				<div>
					<h5 class="yellow-text"><i class="fas fa-dog"></i> POR QUE ADOTAR?</h5>
					<h5>
						Na UTFPR-PG, embora não haja uma estatística oficial, o número de animais simplesmente “jogados
						fora” e abandonados à própria sorte aumenta a cada dia.
						Ao adotar, você ajuda a reduzir o número de cães abandonados.
						Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem
						felizes de verdade!
						Por fim, a adoção de cachorros te dará um animal único. Nenhum, no mundo será igual ao seu. Por
						isso, ame-o como se fosse o último dia. Ele vai retribuir, com toda a certeza.
					</h5>
					<a class="text-dark btn yellow btn-rounded btn-md" href="dogs">
						<i class="fas fa-clone left"></i> 
						Ver cachorros disponíveis
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

@stop
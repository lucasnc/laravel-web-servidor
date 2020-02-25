@extends('layout.default')
@section('title', 'Sobre')
@section('content')


    <section id="gallery" class="section wow fadeIn my-5" data-wow-delay="0.3s">
       
        <h2 class="font-weight-bold text-center h1 my-5 dark-text">Sobre</h2>
       
        <p class="text-center grey-text mb-5 mx-auto w-responsive lead">
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. 
            Fugit, error amet numquam iure provident voluptate esse quasi.
        </p>
        <div class="row pb-5">
            <div class="col-md-12 col-xl-12 d-flex">
                <div class="mdb-lightbox">
                    <div class="container">
                        <div class="col-md-12 col-xl-12 ">
                            <div class="view overlay z-depth-1-half">
                                <img 
                                    src="utfpr-image3.jpg" 
                                    class="img-fluid z-depth-1 wave-effect"
                                 />
                                <a>
                                    <div class="mask waves-effect waves-light rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-5">
    <section id="products" class="text-center wow fadeIn" data-wow-delay="0.3s">
      
        <h2 class="font-weight-bold text-center h1 my-5 dark-text">Projeto</h2>
      
        <p class="text-center grey-text mb-5 mx-auto w-responsive lead">
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </p>
        <div class="row">

            <div class="col-md-12 col-lg-4 col-xl-4 mb-4">
                <i class="fas fa-4x fa-dog blue-text"></i>
                <h4 class="font-weight-bold my-4 dark-grey-text">Dogs</h4>
                <p class="grey-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                    nam, aperiam minima assumenda deleniti hic.
                </p>
            </div>
            
            <div class="col-md-12 col-lg-4 col-xl-4 mb-4">
                <i class="fas fa-4x fa-university yellow-text"></i>
                <h4 class="font-weight-bold my-4 dark-grey-text">UTFPR</h4>
                <p class="grey-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                    nam, aperiam minima assumenda deleniti hic.
                </p>
            </div>
            
            <div class="col-md-12 col-lg-4 col-xl-4 mb-4">
                <i class="fas fa-4x fa-laptop indigo-text"></i>
                <h4 class="font-weight-bold my-4 dark-grey-text">
                    Desenvolvimento
                </h4>
                <p class="grey-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                    nam, aperiam minima assumenda deleniti hic.
                </p>
            </div>
           
        </div>
       
    </section>
 
    <hr class="my-5">
   
    <section id="contact" class="section pb-5 wow fadeIn" data-wow-delay="0.3s">
        
        <h2 class="font-weight-bold text-center h1 my-5 dark-text">Contato</h2>
        
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
            quisquam eum porro a pariatur accusamus veniam.</p>
        
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4 mb-5 text-center">
                <i class="fas fa-map-marker fa-3x dark-grey-text"></i>
                <p class="my-4 dark-grey-text">UTFPR - PONTA GROSSA</p>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 mb-5 text-center"><i class="fas fa-phone fa-3x dark-grey-text"></i>
                <p class="my-4 dark-grey-text">(42) 999999999</p>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 mb-5 text-center"><i class="fas fa-envelope fa-3x dark-grey-text"></i>
                <p class="my-4 dark-grey-text">cachorro@adote.com</p>
            </div>
        </div>
      
    </section>
   
    </div>


@stop
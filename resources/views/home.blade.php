@extends('plantilla')
@section('title','Home')

@section('content')
{{-- CARROUSEL JAVI ESTO ES PARA TI --}}

    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="https://www.manheim.es/products-services/" target="_blank">
                <img class="d-block w-100" src="/img/1.jpg" alt="First slide">
            </a>
        </div>
        <div class="carousel-item">
            <a href="https://www.manheimtransportatucoche.es/es/transportes/manheim" target="_blank">
                <img class="d-block w-100" src="/img/2.jpg" alt="Second slide">
            </a>
        
        </div>
        <div class="carousel-item">
             <a href="http://get.teamviewer.com/manheim" target="_blank">
                <img class="d-block w-100" src="/img/3.jpg" alt="Third slide">
            </a>
            
        </div>
    </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div><br><br>

    {{-- Container1 con la imagen y lo 2 botones --}}
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 ">
            <img class="img-fluid mb-4" src="/img/home.jpg" alt="Women's drive">
        </div>
        <div class="col-12 col-lg-6 ">
                <h1 class="display-5 text-primary" >¿Quieres conocer el estado de tu documentación?</h1>
                <p class="lead text-secondary" >En el enlace podrás conocer el estado de la documentacion de tu reciente compra.
                </p>
            <a class="btn btn-lg btn-block btn-primary" 
                href="{{ route('contact') }}">
                Contáctanos
            </a>
            <a class="btn btn-lg btn-block btn-outline-primary" 
                href="{{ route('about') }}">
                Comprueba la matrícula
            </a>
        </div>
        
    </div>
</div>

{{-- Container1 acaba aqui --}}
    
@endsection

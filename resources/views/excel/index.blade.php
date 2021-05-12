@extends('plantilla')
@section('title','Informacion')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                   
                    <!-- Barra de Progresion  -->

                @if($getMatricula)
                    @if($getMatricula->tramite=="PRIMERO")
                        <div class="progress" style="height: 40px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">PRIMER TRAMITE COMPLETO</div>
                        </div>
                    @elseif($getMatricula->tramite=="SEGUNDO")
                        <div class="progress" style="height: 40px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">SEGUNDO TRAMITE COMPLETO</div>
                        </div>
                    @elseif($getMatricula->tramite=="FINALIZADO")
                        <div class="progress" style="height: 40px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">TRAMITES FINALIZADOS</div>
                        </div>
                    @else
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    @endif   
                    
                    <br>
                <table class="table table-primary table-bordered text-center">
                    <thead class="table-primary table-bordered">
                        <tr>
                            <th>Matrícula</th>
                            <th>Fecha envío documentacion</th>
                            <th>Fecha envío para cambio titular</th>
                            <th> Paso / Trámite</th>
                            <th>Plazos medios desde la compra</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary vertical-align: middle text-center ">
                            <th>{{ $getMatricula->matricula }}</th>
                            <th>{{ CommonHelper::getFormatDate($getMatricula->primertramite)}}</th> 
                            <th>{{ CommonHelper::getFormatDate($getMatricula->segundotramite)}}</th>
                            <th>{{ $getMatricula->tramite }}</th>
                            <th>{{ $getMatricula->plazo }}</th>
                    </tbody>
                </table>
                    @else 
                    <h1 class="display-4 text-primary text-center">{{ "No hay vehículos con ésa matricula"}}</h1>
                    <br><br>
                    
                @endif
            </div>
        </div>
    
    </div>   

@endsection

@section('otro')
    <div class="container">
         <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <img class="img-fluid mb-4" src="/img/4.jpg" alt="Desarrollo Web">
            </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <h1 class="display-4 text-primary text-center" >Resultado de tu búsqueda</h1>
                <p class="lead text-secondary text-justify" >Si tienes cualquier pregunta, no dudes en contactar con tu Asesor Comercial o por email en el siguiente enlace.</p>
            <a class="btn btn-lg btn-block btn-primary" 
                        href="{{ route('contact') }}">
                        Contáctanos
                </a>
            <a class="btn btn-lg btn-block btn-outline-primary" 
                        href="{{ route('about') }}">
                        Comprueba otra matrícula
        
                </a>
        </div>   
        </div>  
    </div>

@endsection
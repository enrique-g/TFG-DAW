@extends('plantilla')
@section('title','About')
@section('content')

<!-- Voy a usar la nueva Form que encontré parece facil -->

{{-- Container2 con imagen, form y botones --}}
        <div class="row">
            <div class="col-12 col-lg-6 ">
                    <h1 class="display-6 text-primary text-center" >Información al momento de tu compra</h1>
                        <p class="lead text-secondary text-justify" >Introduce la matrícula de tu compra reciente y te mostraremos el estado de la documentación lo más actualizado posible.</p>
                        
                        {{ Form::open(['route' => 'excel.index', 'class' => 'forms-sample']) }}
                            {{ Form::label(null, null,['class'=>' display-5 text-primary']) }}
                            {{ Form::text('matricula', null, ['class' => 'form-input mb-3 form-control text-center text-muted','placeholder'=> ' INTRODUCE AQUI LA MATRICULA', 'id' => 'matricula']) }}
                            {{-- Metodo de envio segun Laravel collective --}}
                            <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Enviar matrícula</button>
                        {{ Form::close() }}

                <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctanos</a>
            </div>

            <div class="col-12 col-lg-6 ">
                <img class="img-fluid mb-4" src="/img/about.jpg" alt="Vehiculo del futuro">
            </div>
        </div>
     {{-- Container2 acaba aqui --}}
@endsection
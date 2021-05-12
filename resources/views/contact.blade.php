@extends('plantilla')
@section('title','Contacto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            {{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'class' => 'bg-white shadow rounded py-3 px-4']) }}
                @csrf
                 <h1 class="display-3 text-primary text-center" >{{__('Contact')}}</h1>
                 <hr>
                <div class="form-group lead text-primary">
                    {{ Form::label('name', 'Nombre') }}
                    {{ Form::text('name', old('name'), ['id' => 'name', 'placeholder' => 'Nombre...', 'class' => 'form-control bg-light shadow-sm '.($errors->has('name') ? 'is-invalid':'border-0')]) }}
                    {!! $errors->first('name', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>') !!}

                    {{-- <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " 
                        id="name" 
                        name="name" 
                        placeholder="Nombre..."
                        value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message}}</strong></span>
                        @enderror --}}
                        
                </div>
                <div class="form-group text-primary">
                    {{ Form::label('email', 'Correo electronico') }}
                    {{ Form::text('email', old('email'), ['id' => 'email', 'placeholder' => 'Email...', 'class' => 'form-control bg-light shadow-sm '.($errors->has('email') ? 'is-invalid':'border-0')]) }}
                    {!! $errors->first('email', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>') !!}

                    {{-- <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" 
                        id="email"
                        type="email" 
                        name="email" 
                        placeholder="Email.." 
                        value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                        
                </div>
                <div class="form-group text-primary">
                    {{ Form::label('subject', 'Asunto') }}
                    {{ Form::text('subject', old('subject'), ['id' => 'subject', 'placeholder' => 'Asunto...', 'class' => 'form-control bg-light shadow-sm '.($errors->has('subject') ? 'is-invalid':'border-0')]) }}
                    {!! $errors->first('subject', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>') !!}
                    
                    {{-- <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" 
                        id="subject"
                        name="subject" 
                        placeholder="Asunto..."
                        value="{{ old('subject') }}">
                        @error('subject')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                                </span>
                        @enderror --}}
                    
                </div>
                <div class="form-group text-primary">
                    {{ Form::label('contenido', 'Mensaje') }}
                    {{ Form::text('contenido', old('contenido'), ['id' => 'contenido', 'placeholder' => 'Mensaje...', 'class' => 'form-control bg-light shadow-sm '.($errors->has('contenido') ? 'is-invalid':'border-0')]) }}
                    {!! $errors->first('contenido', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>') !!}

                    {{-- <textarea class="form-control bg-light shadow-sm @error('contenido') is-invalid @else border-0 @enderror"
                        id="message"
                        name="contenido" 
                        placeholder="Mensaje..."
                        value="{{ old('contenido') }}"></textarea>
                        @error('contenido')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                                </span>
                        @enderror --}}
                </div> 
                <button class="btn btn-primary btn-lg btn-block " >@lang('Send')</button>
            {{ Form::close() }}
        </div>
    </div>
   
</div>            
@endsection
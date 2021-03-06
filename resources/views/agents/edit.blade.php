@extends('layout.main-simple')

@section('tartalom')
<br><br>
<div class="container p-5">
    <h3>Ügynök felvétel</h3>

    {!! Form::model($agent,['method'=>'PATCH','route'=>['agents.update',$agent->id]]) !!}

        {{-- Név --}}

        <div class="form-group">
            {!! Form::label('Név*',null,['class' => 'control-label']); !!}
            {!! Form::text('name',null,['class' => 'form-control', 'placeholder'=>'Írd be a nevet...']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('Beszélt nyelvek*',null,['class' => 'control-label']); !!}
            {!! Form::text('languages',null,['class' => 'form-control', 'placeholder'=>'Írd be a beszélt nyelveket...']); !!}
        </div>
        {{-- Szint --}}

        <div class="form-group">
            {!! Form::label('Szint*',null,['class' => 'control-label']); !!}
            {!! Form::number('level','1',['class' => 'form-control']); !!}
        </div>

        {{-- Email --}}
        
        <div class="form-group">
            {!! Form::label('Email cím*',null,['class' => 'control-label']); !!}
            {!! Form::email('email',null,['class' => 'form-control', 'placeholder'=>'Írd be az email címet...']); !!}
        </div>

        {{-- Telefon --}}
        
        <div class="form-group">
            {!! Form::label('Telefon*',null,['class' => 'control-label']); !!}
            {!! Form::text('tel',null,['class' => 'form-control', 'placeholder'=>'Írd be a telefonszámot...']); !!}
        </div>

        {{-- Telefon --}}
        
        <div class="form-group">
            {!! Form::label('Telefon*',null,['class' => 'control-label']); !!}
            {!! Form::text('tel2',null,['class' => 'form-control', 'placeholder'=>'Írd be a telefonszámot...']); !!}
        </div>

        {{-- Cím --}}

        <div class="form-group">
            {!! Form::label('Cím*',null,['class' => 'control-label']); !!}
            {!! Form::text('address',null,['class' => 'form-control', 'placeholder'=>'Írd be a címet...']); !!}
        </div>

        {{-- Jutalék --}}
        
        <div class="form-group">
            {!! Form::label('Jutalék(%)*',null,['class' => 'control-label']); !!}
            {!! Form::number('provision','0',['class' => 'form-control']); !!}
        </div>

        {{--  Rólam  --}}
        <div class="form-group">
            {!! Form::label('Rólam*(Magyar)',null,['class' => 'control-label']); !!}
            {!! Form::textarea('about_me_hun',null,['class' => 'form-control', 'placeholder'=>'Írd ide a rövid leírást...']); !!}
        </div>

        <div class="form-group">
            {!! Form::label('Rólam*(Német)',null,['class' => 'control-label']); !!}
            {!! Form::textarea('about_me_de',null,['class' => 'form-control', 'placeholder'=>'Írd ide a rövid német leírást...']); !!}
        </div>

        

        {!!Form::submit('Mentés',['class'=>'btn btn-primary mt-2']);!!}
    {!! Form::close() !!}

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
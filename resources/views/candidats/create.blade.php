@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h3>Ajouter candidat</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-danger" href="{{route('candidats.index')}}">Liste candidat</a>
    </div>
</div>


@if($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif


{!! Form::open(['route' => 'candidats.store']) !!}

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="mb-3">
        {{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
        {{ Form::text('nom', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="mb-3">
        {{ Form::label('prenom', 'Prenom', ['class'=>'form-label']) }}
        {{ Form::text('prenom', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="mb-3">
        {{ Form::label('age', 'Age', ['class'=>'form-label']) }}
        {{ Form::number('age', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="mb-3">
        {{ Form::label('email', 'Email', ['class'=>'form-label']) }}
        {{ Form::text('email', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="mb-3">
        {{ Form::label('niveauEtude', 'NiveauEtude', ['class'=>'form-label']) }}
        {{ Form::select('niveauEtude', $niveau, null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="mb-3">
        {{ Form::label('sexe', 'Sexe', ['class'=>'form-label']) }}
        {{ Form::select('sexe', $genre, null, array('class' => 'form-control')) }}
    </div>
</div>


{{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



@stop
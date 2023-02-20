@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

{!! Form::open(['route' => 'formations.store']) !!}

<div class="col-xs-10 col-sm-10 col-md-5">
    <div class="mb-3">
        {{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
        {{ Form::text('nom', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-5">
    <div class="mb-3">
        {{ Form::label('duree', 'Duree (mois)', ['class'=>'form-label']) }}
        {{ Form::number('duree', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-5">
    <div class="mb-3">
        {{ Form::label('description', 'Description', ['class'=>'form-label']) }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-5">
    <div class="mb-3">
        {{ Form::label('isStarted', 'Statut des formations', ['class' => 'form-label']) }}
        <div class="ml-4">
            <label class="form-check-label mr-3">
                {{ Form::radio('isStarted', 1, false, ['class' => 'form-check-input']) }}
                Démarrée
            </label>
            <label class="form-check-label">
                {{ Form::radio('isStarted', 0, true, ['class' => 'form-check-input']) }}
                Non démarrée
            </label>
        </div>
    </div>
</div>
<div class="col-xs-10 col-sm-10 col-md-5">
    <div class="mb-3">
        {{ Form::label('dateDebut', 'Date Debut', ['class'=>'form-label']) }}
        {{ Form::date('dateDebut', null, array('class' => 'form-control')) }}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
{{ Form::submit('Ajouter', array('class' => 'btn btn-success')) }}
</div>

{{ Form::close() }}


@stop
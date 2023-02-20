@extends('layouts.app')

@section('content')

{{ $candidat->id }}

<div class="container">
    <div class="row">
        <div class="col-12 col-md-10">
            <h3>Mes Candidatures</h3>
        </div>
        <ul>
            @foreach ($candidat->formations as $formation)
            <li>{{ $formation->nom }}</li>
            @endforeach
        </ul>
    </div>

    <h3>Candidater a une formation</h3>
    <form action="{{ route('candidats.storeFormation', [$candidat->id]) }}" method="POST" >
        @csrf
        
        <button>{{$candidat->id}}</Button>
        <select name="formation_id" class="col-12 col-md-2">
            @foreach ($formatione as $formation)
            <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Postuler</button>
    </form>

</div>

@stop
@extends('layouts.app')

@section('content')

	{{ $formation->id }}

	<div>
			<h3>Referentiels</h3>
			<ul>
				@foreach ($formation->referentiels as $referentiel)
					<li>{{ $referentiel->libelle }}</li>
				@endforeach
			</ul>

			<h3>Ajouter un referentiel</h3>
			<form action="{{ route('formations.storeReferentiel', [$formation->id]) }}" method="post">
				@csrf
				<button>{{$formation->id}}</button>
				<select name="referentiel_id" class="col-12 col-md-2">
					@foreach ($referentiele as $referentiel)
						<option value="{{ $referentiel->id }}">{{ $referentiel->libelle }}</option>
					@endforeach
				</select>
				<button type="submit"  class="btn btn-primary">Ajouter</button>
			</form>

	</div>
@stop
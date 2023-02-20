@extends('layouts.app')

@section('content')
<br>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('candidats.create') }}" class="btn btn-success">Ajout Candidat</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Age</th>
				<th>E-mail</th>
				<th>Niveau d'Etude</th>
				<th>Sexe</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($candidats as $candidat)

				<tr>
					<td>{{ $candidat->id }}</td>
					<td>{{ $candidat->nom }}</td>
					<td>{{ $candidat->prenom }}</td>
					<td>{{ $candidat->age }}</td>
					<td>{{ $candidat->email }}</td>
					<td>{{ $candidat->niveauEtude }}</td>
					<td>{{ $candidat->sexe }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('candidats.show', [$candidat->id]) }}" class="btn btn-primary">Voir</a>
                            <!-- <a href="{{ route('candidats.edit', [$candidat->id]) }}" class="btn btn-primary">Modifier</a> -->
                            {!! Form::open(['method' => 'DELETE','route' => ['candidats.destroy', $candidat->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop

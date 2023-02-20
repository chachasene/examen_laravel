<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/l2_2022/exercice/public/css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
	<a class="navbar-brand" href="#">School Formation</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dashboard
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="{{ route('c-p-f') }}">Nombre Candidatures/Formation</a>
				<a class="dropdown-item" href="{{ route('f-p-r') }}">Nombre Formations/Référentiel</a>
				<a class="dropdown-item" href="{{ route('c-p-s') }}">Répartition des Candidatures/Sexe</a>
				<a class="dropdown-item" href="{{ route('f-p-t') }}">Répartition des Formations/Type</a>
				<a class="dropdown-item" href="{{ route('t-a') }}">Tranche d'âge des candidats</a>
				<a class="dropdown-item" href="{{ route('f-p-s') }}">Statistique des formations (démarrées ou non)</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('types.index') }}">Liste des types</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('formations.index') }}">Liste des formations</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('referentiels.index') }}">Liste des référentiels</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('candidats.index') }}">Liste des candidats</a>
			</li>
		</ul>
	</div>
	</nav>
	<br>

	<div class="container">
		@yield('content')

		@yield('scripts')
	</div>
</body>
</html>

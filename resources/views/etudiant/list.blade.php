@extends('layout.layout') 
@section('titre')     
Les etudiants 
@endsection 
@section('contenu') 
<div class="content">
	@if(session()->has('ok')) 
	<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div> 
	@endif
</div>
<div class="panel panel-primary">
	<div class="panel-heading"> 
		<h2 class="panel-title">Liste des etudiants</h2>
	</div>
	<div class="panel-body"> 
		<div class="content">
			{!! link_to_route('etudiant.create', 'Ajouter un etudiant', [], ['class' => 'btn btn-primary pull-right']) !!} 
		</div> 
		<div class="content">
			<table class="table table-striped table-advance table-hover mini">
				<tbody>
					<tr>
						<th> Matricule </th>
						<th> Prénom </th>
						<th> Nom </th>
						<th> Sexe </th>
						<th> Nationalité </th>
						<th> Téléphone </th>
						<th  class="centrer"> ACTIONS</th>
					</tr>

					@foreach($etudiants as $etudiant)
					<tr>
						<td>{{ $etudiant->matricule }}</td>
						<td>{{ $etudiant->prenom }}</td>
						<td>{{ $etudiant->nom }}</td>
						<td>{{ $etudiant->sexe }}</td>
						<td>{{ $etudiant->nationalite }}</td>
						<td>{{ $etudiant->telephone }}</td>
						<td>
							<ul class="social">
								<li class="element">{!! link_to_route('etudiant.show', 'Afficher', [$etudiant->id], ['class' => 'btn btn-success btn-block']) !!}</li>
								<li class="element">{!! link_to_route('etudiant.edit', 'Editer', [$etudiant->id], ['class' => 'btn btn-warning btn-block']) !!}</li>
								<li class="element">
									{!! Form::open(['method' => 'DELETE', 'route' => ['etudiant.destroy', $etudiant->id]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet etudiant ?\')']) !!}
									{!! Form::close() !!} 
								</li>
							</ul>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="container-fluid col-md-6">
				{!! $links !!} 
			</div>
		</div>
	</div>
</div>
@endsection


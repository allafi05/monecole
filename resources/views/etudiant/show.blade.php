@extends('layout.layout') 
@section('titre')     
Détails
@endsection 
@section('contenu') 
<div class="col-md-12">
<div class="content">
	<div class="panel panel-primary">	
		<div class="panel-heading">
			<h2 class="panel-title">Détails de l'etudiant {{ $etudiant->prenom }} {{ $etudiant->nom }}</h2>
		</div>
		<div class="panel-body"> 
			<div class="form row">
				<div class="col-md-6">
					<center>
						<img  class="img-circle img-thumbnail" src="{{ asset('images/etudiant/'.$etudiant->id) }}" />
						<br/><br/>
					</center>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Matricule</div>
						<div class="col-md-7">
							<span>{{ $etudiant->matricule }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Prénom</div>
						<div class="col-md-7">
							<span>{{ $etudiant->prenom }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Nom</div>
						<div class="col-md-7">
							<span>{{ $etudiant->nom }}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row form-group">
						<div class="control-label bold col-md-5">Date de naissance</div>
						<div class="col-md-7">
							<span>{{ $etudiant->date_naissance }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Lieu de naissance</div>
						<div class="col-md-7">
							<span>{{ $etudiant->lieu_naissance }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Sexe</div>
						<div class="col-md-7">
							<span>{{ $etudiant->sexe }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Nationalité</div>
						<div class="col-md-7">
							<span>{{ $etudiant->nationalite }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Adresse</div>
						<div class="col-md-7">
							<span>{{ $etudiant->adresse }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Email</div>
						<div class="col-md-7">
							<span>{{ $etudiant->email }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Telephone</div>
						<div class="col-md-7">
							<span>{{ $etudiant->telephone }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Date d'inscription</div>
						<div class="col-md-7">
							<span>{{ $etudiant->created_at }}</span>
						</div>
					</div>
					<div class="row form-group">
						<div class="control-label bold col-md-5">Modifié le</div>
						<div class="col-md-7">
							<span>{{ $etudiant->updated_at }}</span>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>	
				<span class="col-md-3">
					{!! link_to_route('etudiant.index', 'Retour à la liste', null, ['class' => 'btn btn-primary btn-block']) !!}
				</span>
				<span class="col-md-3">
					{!! link_to_route('note', 'Afficher les notes', [$etudiant->id, 'id' => 0], ['class' => 'btn btn-success btn-block']) !!}
				</span>
				<span class="col-md-2">
					{!! link_to_route('etudiant.edit', 'Editer', [$etudiant->id], ['class' => 'btn btn-warning btn-block']) !!}
				</span>
				<span class="col-md-2">
					{!! Form::open(['method' => 'DELETE', 'route' => ['etudiant.destroy', $etudiant->id]]) !!}
					{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet etudiant ?\')']) !!}
					{!! Form::close() !!} 
				</span>
			</div>
		</div>	
	</div>	
</div>
</div>
@endsection
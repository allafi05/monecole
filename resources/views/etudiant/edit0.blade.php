@extends('layout.layout') 
@section('titre')     
Création
@endsection 
@section('contenu') 
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			@if($etudiant->id == 0)
			<h2 class="panel-title">Inscription (Etape 1 sur 2)</h2>
			@else
			<h2 class="panel-title">Edition de {{$etudiant->prenom}} {{$etudiant->nom}} (Etape 1 sur 4)</h2>
			@endif
		</div>
		<div class="panel-body">
			@if($etudiant->id == 0)
			{!! 
			Form::model($etudiant, [
			'route' => ['etudiant.store'], 
			'method' => 'post', 
			'class' => 'form-horizontal panel'
			]) 
			!!}
			@else
			{!! 
			Form::model($etudiant, [
			'route' => ['etudiant.update', 'id' => $etudiant->id], 
			'method' => 'put', 
			'class' => 'form-horizontal panel'
			]) 
			!!}
			@endif
			<div class="row form-group {!! $errors->has('matricule') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Matricule <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('matricule', null, ['class' => 'form-control', 'placeholder' => 'Matricule']) !!}
					{!! $errors->first('matricule', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Prénoms <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prénoms']) !!}
					{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Nom <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('sexe') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Sexe <span class="required">*</span></div>
				<div class="col-md-8 row">
					<div class="col-md-3"> {{ Form::radio('sexe', 'Masculin') }} Masculin</div>
					<div class="col-md-3"> {{ Form::radio('sexe', 'Feminin') }} Feminin</div>
				</div>
			</div>
			<div class="row form-group {!! $errors->has('date_naissance') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Date de naissance <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('date_naissance', date('d-M-Y', strtotime($etudiant->date_naissance)), ['class' => 'form-control', 'placeholder' => 'Date de naissance']) !!}
					{!! $errors->first('date_naissance', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('lieu_naissance') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Lieu de naissance <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('lieu_naissance', null, ['class' => 'form-control', 'placeholder' => 'Lieu de naissance']) !!}
					{!! $errors->first('lieu_naissance', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('nationalite') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Nationalité <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('nationalite', null, ['class' => 'form-control', 'placeholder' => 'Nationalité']) !!}
					{!! $errors->first('nationalite', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('adresse') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Adresse <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('adresse', null, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
					{!! $errors->first('adresse', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Email <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
				<div class="control-label bold col-md-4">Téléphone <span class="required">*</span></div>
				<div class="col-md-8">
					{!! Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
					{!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">	
					<a href="javascript:history.back()" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
					</a>
				</div>
				<div class="col-md-8">	
					{!! Form::submit('Suivant', ['class' => 'btn btn-primary pull-right']) !!}	
				</div>
			</div>	
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
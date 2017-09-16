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
	<div class="centrer bold panel-heading">Liste des notes de {{ $etudiant->prenom }} {{ $etudiant->nom }}</div>
	<div class="panel-body">   
		<div class="content">
			<table class="table table-striped table-advance table-hover mini">
				<tbody>
					<tr>
						<th><i class="icon_profile"></i> Matière </th>
						<th><i class="icon_profile"></i> Coefficient </th>
						<th><i class="icon_profile"></i> Note </th>
						<th class="centrer"><i class="icon_cogs"></i> ACTION</th>
					</tr>
					@foreach($notes as $note)
					<tr>
						<td>{{ $note->matiere }}</td>
						<td>{{ $note->coeficient }}</td>
						<td>{{ $note->note }}</td>
						<td>        
							<ul class="social">
								<li class="element">{!! link_to_route('note.edit', 'Editer',  [$etudiant->id, 'id' => $note->id], ['class' => 'btn btn-warning btn-block']) !!}</li>
								<li class="element">
									{!! Form::open(['method' => 'delete', 'route' => ['note.destroy', $note->id]]) !!}
										{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette note ?\')']) !!}
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
<div class="panel panel-primary">
	<div class="centrer bold panel-heading">Ajouter une note </div>
	<div class="panel-body">
			@if(!isset($nte->id))
			{!! 
				Form::model($nte, [
				'route' => ['note.store', $id_etudiant], 
				'method' => 'post', 
				'class' => 'form-horizontal panel'
				]) 
			!!}
			@else
			{!! 
				Form::model($nte, [
				'route' => ['note.update', $nte->id], 
				'method' => 'put', 
				'class' => 'form-horizontal panel'
				]) 
			!!}
			@endif
			<div class="row form-group {!! $errors->has('matricule') ? 'has-error' : '' !!}">
				<div class="col-md-3">
					{!! Form::text('matiere', null, ['class' => 'form-control', 'placeholder' => 'Matière']) !!}
					{!! $errors->first('matiere', '<small class="help-block">:message</small>') !!}
				</div>
				<div class="col-md-3">
					{!! Form::text('coeficient', null, ['class' => 'form-control', 'placeholder' => 'Coéficient']) !!}
					{!! $errors->first('coeficient', '<small class="help-block">:message</small>') !!}
				</div>
				<div class="col-md-3">
					{!! Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'Note']) !!}
					{!! $errors->first('note', '<small class="help-block">:message</small>') !!}
				</div>
				@if(!isset($nte->id))
				<div class="col-md-3">	
					{!! Form::submit('Ajouter', ['class' => 'btn btn-primary pull-right']) !!}	
				</div>
				@else
				<div class="col-md-3">	
					{!! Form::submit('Mettre à jour', ['class' => 'btn btn-primary pull-right']) !!}	
				</div>
				@endif
			</div>
			{!! Form::close() !!}
			<div class="content">	
				{!! link_to_route('etudiant.show', 'Retour aux détails', $id_etudiant, ['class' => 'btn btn-primary pull-left']) !!}
			</div>
	</div>
</div>
@endsection


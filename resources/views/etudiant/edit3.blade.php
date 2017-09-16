@extends('layout.layout') 
@section('titre')     
Edition
@endsection 
@section('contenu') 
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Edition de {{$etudiant->prenom}} {{$etudiant->nom}} (Etape 4 sur 4)</h2>
		</div>
		<div class="panel-body">
			{{$etudiant->id}}
			
				{{ csrf_field() }}
					{{ 
						Form::open([
						'route' => ['etudiant.upload', 'id' => $etudiant->id], 
						'data-parsley-validate' => '', 
						'files' => true
						]) 
					}}
				<div class="row form-group">
						{{ Form::label('featured_image', 'Selectionner une image') }}
						{{ Form::file('featured_image') }}
				</div>
				<div class="row form-group">
					<div class="col-md-4">	
						<a href="javascript:history.back()" class="btn btn-primary pull-right">
							<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
						</a>
					</div>
					<div class="col-md-8">	
						{!! Form::submit('Charger la photo', ['class' => 'btn btn-primary pull-right']) !!}	
					</div>
				</div>	
				{{ Form::close() }}
			</form>
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')

@section('stylesheet')
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({
	 selector:'textarea',
	 branding: false,
	 plugins: [
  	'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
  	'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
  	'save table contextmenu directionality emoticons template paste textcolor'
	],
	toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
	 });
	</script>
@endsection

@section('content')
	<h1>Dashboard - Création d'Informations</h1>

	{!! Form::open(['action' => 'InfosController@store', 'method' => 'POST', 'files' => true]) !!}
	<div class="form-group font-weight-bold">
		{{Form::label('titleFr', 'Titre FR')}}
		{{Form::text('titleFr', '', ['class' => 'form-control', 'placeholder' => 'Titre FR']) }}
	</div>
	<div class="form-group font-weight-bold">
		{{Form::label('titleEn', 'Titre EN')}}
		{{Form::text('titleEn', '', ['class' => 'form-control', 'placeholder' => 'Titre EN']) }}
	</div>
	<div class="form-group font-weight-bold">
		{{Form::label('textFr', 'Texte FR')}}
		{{Form::textarea('textFr', '', ['class' => 'form-control', 'placeholder' => 'Texte FR']) }}
	</div>	
	<div class="form-group font-weight-bold">
		{{Form::label('textEn', 'Texte EN')}}
		{{Form::textarea('textEn', '', ['class' => 'form-control', 'placeholder' => 'Texte EN']) }}
	</div>
	<div class="form-group font-weight-bold">
		{{Form::label('urlImage', 'URL Image')}}
		{{Form::text('urlImage', '', ['class' => 'form-control', 'placeholder' => 'URL de votre Image']) }}
	</div>

	<div class="form-group font-weight-bold">
		{{Form::label('featuredImage', 'Upload Featured Image')}}
		{{Form::file('featuredImage')}}
	</div>

	{{Form::submit('CONFIRMER', ['class' => 'btn btn-lg btn-primary']) }}
	{!! Form::close() !!}
@endsection
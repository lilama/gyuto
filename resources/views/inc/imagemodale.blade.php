<h3 class="card-header">Détail de l'image</h3>		
	<div class="card-body">
		{!! Form::open(['action' => 'ImagegaleriesController@store', 'method' => 'POST', 'files' => true]) !!}

		{!! csrf_field() !!}

		<div class="form-group">
	        <img id="preview" class="img-fluid medium-img" src="#" alt="">
	    </div>

		<div class="form-group font-weight-bold"  id="myBtnS">
			{{Form::label('titleIFr', 'Titre FR')}}
			{{Form::text('titleIFr', '', ['class' => 'form-control', 'placeholder' => 'Titre FR']) }}
		</div>
		<div class="form-group font-weight-bold">
			{{Form::label('titleEn', 'Titre EN')}}
			{{Form::text('titleEn', '', ['class' => 'form-control', 'placeholder' => 'Titre EN']) }}
		</div>
		<div class="form-group font-weight-bold">
			{{Form::label('legendFr', 'Légende FR')}}
			{{Form::text('legendFr', '', ['class' => 'form-control', 'placeholder' => 'Légende FR']) }}
		</div>
		<div class="form-group font-weight-bold">
			{{Form::label('legendEn', 'Légende EN')}}
			{{Form::text('legendEn', '', ['class' => 'form-control', 'placeholder' => 'Légende EN']) }}
		</div>
		<div class="form-group font-weight-bold">
		{{Form::submit('CONFIRMER', ['class' => 'btn btn-primary']) }}
		{!! Form::close() !!}
		</div>
	</div>

@extends('layouts.app')

@section('stylesheet')
	<style type="text/css">
	    .lightbox{
	      z-index: 1041;
	    }
	    .medium-img{
	      width: 150px;height: 150px;
    	  padding: 1rem;
	    } 
  	</style>
	<style>
		body {font-family: Arial, Helvetica, sans-serif;}

		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    background-color: #fefefe;
		    margin: auto;
		    margin-left: 306px;
		    padding: 6px;
		    padding-left:35px;
		    border: 1px solid #888;
		    width: 95%;
		    height: 100vh;
		    margin-bottom: 20vh;
		}

		/* The Close Button */
		.close {
		    /*color: #aaaaaa;*/
		    color: #000;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		    margin-left: 92rem;
		    padding-top: 0.5rem;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}
		.detail {
			margin-right: 0px;
			margin-top: 75px;
		}

		.contenu {
			width: 88%;
			padding: 2px;
		}

		.card-body {
			width: 87%;
			padding: 2px;
		}
		
		.nav-tabs {
			border: none;
		}		

		label[for='nameImage'] {
			margin-left: 20rem;
			margin-top: 15rem;
			margin-bottom: 15rem;
		}

		.col-sm-7 {
			padding-left: 0;
			padding-right: 0px;
			margin-right: 0;
		}

		.col-sm-8 {
			padding-right: 0px;
			margin-left: 0px;
		}

		.card .col-sm-5 {
			padding-left: 0px;
			padding-right: 0;
			margin-right: 0px;
			width: 80vw;
		}

		.card-body {
			padding-right: 0px;
		}

		.card-header {
			padding-right: 10px;
		}

		.imageCover {
			height: 300px;
			padding: 0;
		}

		#myBtnIcA {
			margin-top: 180px;
			margin-left: 0px;
			padding-right: 10px;
		}
	</style>
@endsection

@section('title', "Dashboard - Création d'Albums d'images")

@section('content')
	<!-- <h1>Dashboard - Création d'Albums d'images</h1> -->

	{!! Form::open(['action' => 'PageimagesController@store', 'method' => 'POST', 'files' => true]) !!}
	<div class="form-group font-weight-bold">
		{{Form::label('titleFr', 'Titre Album FR')}}
		{{Form::text('titleFr', '', ['class' => 'form-control', 'placeholder' => 'Titre de votre album en Français']) }}
	</div>	
	<div class="form-group font-weight-bold">
		{{Form::label('titleEn', 'Titre Album EN')}}
		{{Form::text('titleEn', '', ['class' => 'form-control', 'placeholder' => 'Titre de votre album en Anglais']) }}
	</div>
	<div class="form-group font-weight-bold">
		{{Form::label('galery', 'Galerie')}}
		{{Form::text('galery', '', ['class' => 'form-control', 'placeholder' => 'galerie']) }}
	</div>
	<div class="form-group font-weight-bold">
		{{Form::label('legendFr', 'Légende FR')}}
		{{Form::text('legendFr', '', ['class' => 'form-control', 'placeholder' => 'Légende de votre image en Français']) }}
	</div>	
	<div class="form-group font-weight-bold">
		{{Form::label('legendEn', 'Légende EN')}}
		{{Form::text('legendEn', '', ['class' => 'form-control', 'placeholder' => 'Légende de votre image en Anglais']) }}
	</div>

	<div class="container-fluid">
		<div class="card">
			<div class="card-header font-weight-bold" id="myBtnG">Galerie d'images
			</div>
			<div class="card-body">	
				@if($theimages->count())
					@foreach($theimages as $theimage)
						<img src="{{ url('myimages/' . $theimage->nameImage) }}" class="medium-img" id="myBtn{{$theimage->id}}">
		  			@endforeach			
		  		@endif
		  		<br>
				<a href="#" class="btn btn-primary" id="myBtn">Ajouter à la galerie</a>
			</div>
		</div>
		<div class="card col-sm-4 imageCover">
			<div class="card-header font-weight-bold" id="myBtnIc">Image mise en avant
			</div>
			<div class="card-body imageCover">	
				@if($theimages->count() == 1)
					<img src="{{ url('myimages/' . $theimage->nameImage) }}" class="medium-img" id="myBtnM{{$theimage->id}}">		
		  		@endif
		  		<br>
				<a href="#" class="btn btn-primary" id="myBtnIcA">Ajouter l'image mise en avant</a>
			</div>
		</div>
		<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<h1>Ajouter l'image à la galerie</h1>

				 <div class="card contenu">
				 	<div class="row">
						<div class="col-sm-8 col-sm-offset-4">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
			      				<li class="nav-item">
			        				<a class="nav-link" id="televerser-tab" data-toggle="tab" role="tab" aria-controls="televerser" aria-selected="true" href="#televerser">Téléverser des fichiers</a>
			      				</li>
			      				<li class="nav-item">
			        				<a class="nav-link active" id="biblio-tab" data-toggle="tab" role="tab" aria-controls="biblio" aria-selected="true" href="#biblio">Bibliothèque d'images</a>
			      				</li>
			      			</ul>
		      			</div>
	      			</div>
					<!-- Tab panes -->
					<div class="tab-content">
  						<div class="tab-pane active" id="biblio" role="tabpanel" aria-labelledby="biblio-tab">
  							<div class="row">
	  							<div class="card col-sm-7">
	  								<div class="card-body">
										@foreach($theimages as $theimage)
											<a onclick="getFocus();"><img src="{{ url('myimages/' . $theimage->nameImage) }}" class="medium-img"></a>
							  			@endforeach
									</div>
								</div>
												
						  		<div class="card col-sm-5" id="smyBtnS">
									<!-- @include('inc.imagemodale') -->
									@include('inc.imagemodale', ['{{$theimage->id}}' => 'data'])
								</div>
							</div>
						</div>
					  	<div class="tab-pane" id="televerser" role="tabpanel" aria-labelledby="televerser-tab">
							<div class="card">
						  		<div class="card-body">	
			  						{!! Form::open(['action' => 'ImagegaleriesController@store', 'method' => 'POST', 'files' => true]) !!}
									{!! csrf_field() !!}
									<div class="form-group font-weight-bold">
										{{Form::label('nameImage', 'Upload Image')}}
										{{Form::file('nameImage') }}
									</div>
									{{Form::submit('CONFIRMER', ['class' => 'btn btn-primary']) }}
									{!! Form::close() !!}
								</div>
							</div>
						</div>
  					</div>
			  	</div>
			</div>
		</div>
	{{Form::submit('CONFIRMER', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
	</div>
@endsection

@section('script')
    <script>
        $(() => {
            $('input[type="file"]').on('change', (e) => {
                let that = e.currentTarget
                if (that.files && that.files[0]) {
                    $(that).next('.custom-file-label').html(that.files[0].name)
                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $('#preview').attr('src', e.target.result)
                    }
                    reader.readAsDataURL(that.files[0])
                }
            })
        })
    </script>
    <script>
    	var modal = document.getElementById("myModal");
    	var btn = document.getElementById("myBtn");
    	var btnG = document.getElementById("myBtnG");
    	// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		var btnIc = document.getElementById("myBtnIc");
		var btnIcA = document.getElementById("myBtnIcA");

		var btnIcA = document.getElementById("myBtnIcA");

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}

		btnG.onclick = function() {
		    modal.style.display = "block";
		}

		btnIc.onclick = function() {
		    modal.style.display = "block";
		}

		btnIcA.onclick = function() {
		    modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
    		modal.style.display = "none";
		}

		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";		        
		    }
		}

		function getFocus() {
			document.getElementById("titleIFr").focus();		
		}

	</script>
@endsection
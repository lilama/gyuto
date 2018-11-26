@extends('layouts.app')

@section('content')
  <h1>Dashboard - Mes Images</h1>

  <article class="card">
    <h2 class="card-header">Album {{$pageimage->titleFr }}</h2>
    <div class="card-body">
      <h4 class="card-title">
        Titre Album FR   
      </h4>
      <p class="card-text">
        {{$pageimage->titleFr}}   
      </p>
      <h4 class="card-title">
        Titre Album EN   
      </h4>
      <p class="card-text">
        {{$pageimage->titleEn}}   
      </p>
      <h4 class="card-title">
        Galerie    
      </h4>
      <p class="card-text">
        {{$pageimage->galery}}    
      </p>
      <h4 class="card-title">
        Légende en Français
      </h4>
      <p class="card-text">
        {{$pageimage->legendFr}}
      </p>
      <h4 class="card-title">
        Légende en Anglais
      </h4>
      <p class="card-text">
        {{$pageimage->legendEn}}
      </p>
      <img src="{{ asset('myimages/' . $pageimage->image)}}" height="400" width="800" />      
    </div>
  </article>
@endsection
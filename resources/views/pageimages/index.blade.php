@extends('layouts.app')

@section('content')
  <h1>Dashboard - Mes Albums d'images</h1>

  <div class="row"> 
    <h2 class="col-sm-11">Liste Albums</h2>
    <a href="{{ URL::to('./pageimages/create') }}" class="btn btn-info pull-right col-sm-1" role="button">Ajouter</a>
  </div>
  <div class="table-responsive">
    @if(count($pageimages) >= 1)
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Album N°#</th>
            <th>Titre</th>
            <th>Date de modification</th>
            <th>Action</th>
          </tr>
        </thead>
        @foreach($pageimages as $pageimage)
          <tbody>
            <tr>
              <td>{{$pageimage->id}}</td>
              <td><a href="{{ URL::to('./pageimages/' . $pageimage->id) }}">{{$pageimage->titleFr}}</a></td>
              <td>{{$pageimage->updated_at}}</td>
              <td><a href="{{ URL::to('./pageimages/' . $pageimage->id) }}"><button type="button" class="btn btn-info btn-sm">Voir</button></a></td>
            </tr>            
          </tbody>
        @endforeach
      </table>
    @else
      <p>Aucun album existant</p>
    @endif  
  </div>
@endsection
@extends('layouts.admin.layout')
@section('content')    
  <section id="recipe-details">
    <div class="container">
      <div class="recipe-title">
        <h3>{{$recipe->name}}</h3>
        <hr>
      </div>
      <div class="details-content">
        <div class="row">
          <div class="col-md-4">
            <div class="img-box">
              <img src={{$recipe->image}} alt="">
            </div>
            <div class="category-box">
              <small>Category - <em>{{$recipe->category}}</em></small>
            </div>
            <div class="edit-btn">
              <a href="/admin/recipes/{{$recipe->id}}/edit" class="btn btn-warning">Edit Recipe</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ingredients-name">
              <h5>Ingredients</h5>
            </div>
            <div class="ingredients-box">
              {!!$recipe->ingredients!!}
            </div>
          </div>
          <div class="col-md-4">
            <div class="instructions-name">
              <h5>Instructions</h5>
            </div>
            <div class="instructions-box">
              {!!$recipe->instructions!!}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
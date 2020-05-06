@extends('layouts.admin.layout')
@section('content')    
  <section id="recipe-edit">
    <div class="container">
      <div class="recipe-title">
        <h3>Edit {{$recipe->name}}</h3>
        <hr>
      </div>
      <div class="recipe-create">
        <form action="/admin/recipes/{{$recipe->id}}" method="POST">
          @method('PUT')
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="categoryInput">Category</label>
                <select class="form-control" id="categoryInput" name="category">
                  <option value="none" disabled>Choose Category</option>
                  <option value="featured"
                  @if ($recipe->category === "featured")
                      echo selected
                  @endif
                  >Featured</option>
                  <option value="easy_fix" 
                  @if ($recipe->category === "easy_fix")
                    echo selected
                  @endif>Easy Fix</option>
                  <option value="recent_upload" 
                  @if ($recipe->category === "recent_upload")
                    echo selected
                  @endif>Recent Upload</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="nameInput">Name</label>
                <input id="nameInput" type="text" class="form-control " name="name" required autocomplete="name" value={{$recipe->name}}>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="imageInput">Image</label>
                <input id="imageInput" type="text" class="form-control " name="image" required autocomplete="image" value={{$recipe->image}}>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ingredientsInput">Ingredients</label>
                <textarea class="form-control" id="ingredientsInput" name="ingredients">{{$recipe->ingredients}}</textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="instructionsInput">Instructions</label>
                <textarea class="form-control" id="instructionsInput" name="instructions">{{$recipe->instructions}}</textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Edit Recipe</button>
        </form>
      </div>
    </div>
@endsection
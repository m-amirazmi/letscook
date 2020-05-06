@extends('layouts.admin.layout')
@section('content')    
  <section id="recipe">
    <div class="container">
      <div class="admin-title">
        <h3>Create Recipe</h3>
        <hr>
      </div>
      <div class="recipe-create">
        <form action="/admin/recipes" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="categoryInput">Category</label>
                <select class="form-control" id="categoryInput" name="category">
                  <option value="featured">Featured</option>
                  <option value="easy_fix">Easy Fix</option>
                  <option value="recent_upload" selected>Recent Upload</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="nameInput">Name</label>
                <input id="nameInput" type="text" class="form-control " name="name" required autocomplete="name" placeholder="Give Recipe a Name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="imageInput">Image</label>
                <input id="imageInput" type="text" class="form-control " name="image" required autocomplete="image" placeholder="https://1.bp.blogspot.com/-25AlmdfcKD8/WUcTwp4_YWI/AAAAAAAAH9w/SnqkLpiDChspjJknHraVbjXW6Yq1ErZtgCLcBGAs/s1600/Resepi%2BSatay%2BAyam.png">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ingredientsInput">Ingredients</label>
                <textarea class="form-control" id="ingredientsInput" name="ingredients">Please insert food ingredients here <ul><li>Nasi</li><li>Lemak</li><li>Ayam</li></ul></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="instructionsInput">Instructions</label>
                <textarea class="form-control" id="instructionsInput" name="instructions">Please insert food instructions here <ol><li>Tuang air dulu</li><li>Basuh Beras</li><li>Makan</li></ol></textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Add Recipe</button>
        </form>
      </div>
    </div>
@endsection
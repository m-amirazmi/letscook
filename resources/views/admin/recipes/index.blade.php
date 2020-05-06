@extends('layouts.admin.layout')
@section('content')    
  <section id="recipe">
    <div class="container">
      <div class="admin-title">
        <h3>All Menu</h3>
        <hr>
      </div>
      <div class="recipe-table">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Category</th>
              <th scope="col">Name</th>
              <th scope="col">Image URL</th>
              <th scope="col">date_added</th>
              <th scope="col">Detail</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($recipes as $recipe)
              <tr>
                <td>{{$recipe->category}}</td>
                <td>{{$recipe->name}}</td>
                <td>{{$recipe->image}}</td>
                <td>{{$recipe->created_at}}</td>
                <td><a href="/admin/recipes/{{$recipe->id}}"><i class="fas fa-info fa-lg"></i></a></td>
                <td><a href="/admin/recipes/{{$recipe->id}}/edit"><i class="fas fa-edit fa-lg"></i></a></td>
                <td>
                  <a href="#" onclick="event.preventDefault();
                  document.getElementById('delete-item-{{$recipe->id}}').submit();"><i class="far fa-trash-alt"></i></a>
                    <form id="delete-item-{{$recipe->id}}" action="/admin/recipes/{{$recipe->id}}" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form></td>
              </tr>
              @endforeach
          </tbody>
        </table> 
        <div class="paginationlinks" style="font-size: .5rem">
          {{$recipes->links()}}  
        </div>
      </div> 
    </div>
  </section>
@endsection  

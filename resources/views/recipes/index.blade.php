@extends('layouts/layout')
@section('content')
<section id="recipe-featured">
  <div class="container featured-box">
    <div class="row featured-title-box">
      <div class="col-6">
        <div class="featured-title">
          <h5>Today's Fav</h5>
          @foreach ($recipes as $recipe)
              @if ($recipe->category === "featured")
                <h3>{{$recipe->name}}</h3>
        </div>
      </div>
      <div class="col-6">
        <a href="/recipes/{{$recipe->id}}">
        <div class="featured-image">
                <img class="" src={{$recipe->image}} alt="">
                <div class="featured-img-background"></div>
              @endif
          @endforeach
        </div>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="recipe-trending">
  <div class="background"></div>
  <div class="container trending-container">
    <h4>Trending Recipes</h4>
    <div class="row trending-box">
      @foreach ($recipes as $recipe)
        @if ($recipe->category === "recent_upload")
          <div class="col-md-2 trending-img">
            <a href="/recipes/{{$recipe->id}}">
              <img src={{$recipe->image}} alt="">
              <h6>{{$recipe->name}}</h6>
            </a>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<section id="recipe-category">
  <div class="container category-container">
    <h4>Easy Fix</h4>
    <div class="row category-img-box">
      @foreach ($recipes as $recipe)
        @if ($recipe->category === "easy_fix")
          <div class="col-md-3 category-img">
            <a href="/recipes/{{$recipe->id}}">
              <img src={{$recipe->image}} alt="">
              <h6>{{$recipe->name}}</h6>
            </a>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
<section id="recipe-join">
  <div class="container">
    <h3>Let's Share Your Own Recipes</h3>
    <a href="/recipes/create" class="btn btn-warning ">Join Us Now</a>
  </div>
</section>
@endsection
@extends('layouts/layout')
@section('content')
<section id="show-page">
  <div class="container">
    <div class="row show-title-box">
      <div class="col-12">
        <h3 class="show-title">{{$recipe->name}}</h3>
        <hr>
      </div>
    </div>
    <div class="row show-recipe-details">
      <div class="col-5 show-recipe-img-box">
        <img src={{$recipe->image}} alt="">
      </div>
      <div class="col-3 show-recipe-ingredients">
        <h4>Ingredients</h4>
        {!!$recipe->ingredients!!}
      </div>
      <div class="col-4 show-recipe-instructions">
        <div class="background-show-recipe-instructions"></div>
        <h4>Instructions</h4>
        {!!$recipe->instructions!!}
      </div>
    </div>
  </div>
</section>
<section id="related-recipes">
  <div class="container">
    <h4>Related Recipes</h4>
    <div class="row related-recipes-box">
      <div class="col-3 related-recipes-img">
       <a href="/recipes/:rid">
        <img class="item-img" src="https://iluminasi.com/img/upload/mee-kolok-sarawak.jpg" alt="">
        <h6>Kolok Mee Sarawak</h6>
        </a>
      </div>
      <div class="col-3 related-recipes-img">
       <a href="/recipes/:rid">
        <img class="item-img" src="https://uf.cari.com.my/forumx/mforum/portal/201604/15/142323rbz24ja8aijbabn2.jpg" alt="">
        <h6>Laksa Sarawak</h6>
        </a>
      </div>
      <div class="col-3 related-recipes-img">
       <a href="/recipes/:rid">
        <img class="item-img" src="https://www.elmundoeats.com/wp-content/uploads/2018/10/Asam-Laksa.jpg" alt="">
        <h6>Laksa Penang</h6>
        </a>
      </div>
      <div class="col-3 related-recipes-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://2.bp.blogspot.com/_-xYsrSFl2dw/TUtODJVo7FI/AAAAAAAAMjU/f3FObHNmz6Y/s1600/IMG_3519_picnik.jpg" alt="">
        <h6>Mee Bandung</h6>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="reviews">
  <div class="container">
    <h4>Reviews</h4>
    <hr>
    <div class="row reviews-wrapper">
      <div class="col-md-4 offset-md-1 reviews-item">
        <h5>Mery</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quibusdam excepturi iure nobis omnis vel ullam sequi a alias tempore.</p>
        <img src="https://cdn.clipart.email/a5e3051c9fb286fe2e04f831b4f4eccf_avatar-icon-transparent-png-clipart-free-download-ywd_512-512.png" alt="">
      </div>
      <div class="col-md-4 offset-md-2 reviews-item">
      <h5>Mery</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quibusdam excepturi iure nobis omnis vel ullam sequi a alias tempore.</p>
        <img src="https://cdn.clipart.email/a5e3051c9fb286fe2e04f831b4f4eccf_avatar-icon-transparent-png-clipart-free-download-ywd_512-512.png" alt="">
      </div>
      <div class="col-md-4 offset-md-1 reviews-item">
      <h5>Mery</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quibusdam excepturi iure nobis omnis vel ullam sequi a alias tempore.</p>
        <img src="https://cdn.clipart.email/a5e3051c9fb286fe2e04f831b4f4eccf_avatar-icon-transparent-png-clipart-free-download-ywd_512-512.png" alt="">
      </div>
      <div class="col-md-4 offset-md-2 reviews-item">
      <h5>Mery</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quibusdam excepturi iure nobis omnis vel ullam sequi a alias tempore.</p>
        <img src="https://cdn.clipart.email/a5e3051c9fb286fe2e04f831b4f4eccf_avatar-icon-transparent-png-clipart-free-download-ywd_512-512.png" alt="">
      </div>
    </div>
  </div>
</section>
@endsection
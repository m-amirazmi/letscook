@extends('layouts/layout')
@section('content')
<section id="show-page">
  <div class="container">
    <div class="row show-title-box">
      <div class="col-12">
        <h3 class="show-title">Curry Laksa</h3>
        <hr>
      </div>
    </div>
    <div class="row show-recipe-details">
      <div class="col-5 show-recipe-img-box">
        <img src="https://rasamalaysia.com/wp-content/uploads/2011/07/curry-laksa4.jpg" alt="">
      </div>
      <div class="col-3 show-recipe-ingredients">
        <h4>Ingredients</h4>
        <p>for 3 people | 30mins</p>
        <h6>Soup:</h6>
        <ul>
          <li>3 tablespoons cooking oil</li>
          <li>1/2 pack Malaysian instant curry paste (120g)</li>
          <li>2 cups chicken broth (1 can)</li>
          <li>2 cups water</li>
          <li>2 stalks lemongrass, white part only, pounded</li>
          <li>10 tofu puffs, cut into pieces</li>
          <li>1/2 cup evaporated milk</li>
          <li>1/2 cup coconut milk</li>
          <li>Salt to taste</li>
        </ul>
        <h6>Other Ingredients:</h6>
        <ul>
          <li>Yellow noodles</li>
          <li>Bean sprouts</li>
          <li>10 shrimp, peeled, deveined and cooked</li>
          <li>3 hard-boiled eggs, cut into halves</li>
          <li>Fish cakes, cut into pieces</li>
        </ul>
      </div>
      <div class="col-4 show-recipe-instructions">
        <div class="background-show-recipe-instructions"></div>
        <h4>Instructions</h4>
        <ol>
          <li>In a stockpot, add the oil and sauté the instant curry paste until aromatic. Add the chicken broth, water, lemongrass, tofu puffs and bring the soup to a boil. Lower the heat to simmer. Add the coconut milk and evaporated milk. Add salt to taste. Keep the stock on simmer.</li>
          <li>Rinse the yellow noodles and bean sprouts separately, drained and set aside.</li>
          <li>To assemble a bowl of laksa for serving, bring to boil some yellow noodles and a handful of bean sprouts. Drain the noodles and bean sprouts and transfer to a serving bowl. Top the noodles with 2-3 shrimp, a few pieces of fish cake, and some eggs. Using a ladle, pour the soup and a few pieces of tofu puffs on top of the noodles. Serve immediately.</li>
        </ol>
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
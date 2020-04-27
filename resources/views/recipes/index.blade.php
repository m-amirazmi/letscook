@extends('layouts/layout')
@section('content')
<section id="recipe-featured">
  <div class="container featured-box">
    <div class="row featured-title-box">
      <div class="col-6">
        <div class="featured-title">
          <h5>Today's Fav</h5>
          <h3>Beef Rendang</h3>
        </div>
      </div>
      <div class="col-6">
        <a href="/recipes/:rid">
        <div class="featured-image">
          <img class="" src="https://rasamalaysia.com/wp-content/uploads/2018/04/beef-rendang1.jpg" alt="">
          <div class="featured-img-background"></div>
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
      <div class="col-sm-2 trending-img">
        <a href="/recipes/:rid">
        <img src="https://rasamalaysia.com/wp-content/uploads/2009/01/soto-ayam3.jpg" alt="">
        <h6>Soto Ayam</h6>
        </a>
      </div>
      <div class="col-sm-2 trending-img">
          <a href="/recipes/:rid">  
          <img src="https://myresepi.net/wp-content/uploads/2020/01/Resepi-Kari-Ayam.jpg" alt="">
          <h6>Chicken Curry</h6>
          </a>
      </div>
      <div class="col-sm-2 trending-img">
          <a href="/recipes/:rid">
          <img src="https://1.bp.blogspot.com/-25AlmdfcKD8/WUcTwp4_YWI/AAAAAAAAH9w/SnqkLpiDChspjJknHraVbjXW6Yq1ErZtgCLcBGAs/s1600/Resepi%2BSatay%2BAyam.png" alt="">
          <h6>Chicken Satay</h6>
          </a>
      </div>
      <div class="col-sm-2 trending-img">
          <a href="/recipes/:rid">
          <img src="https://kalorimakanan.com/wp-content/uploads/2019/04/ayam-masak-lemak-cil-api.jpg" alt="">
          <h6>Ayam Masak Lemak Cili Api</h6>
          </a>
      </div>
      <div class="col-sm-2 trending-img">
          <a href="/recipes/:rid">
          <img src="https://i.pinimg.com/originals/57/6a/cc/576acc7969b1ef8c9d139da8ce24fa3a.jpg" alt="">
          <h6>Smoked Chili Meat</h6>
          </a>
      </div>
      <div class="col-sm-2 trending-img">
          <a href="/recipes/:rid">
          <img src="https://zine.my/resepi/wp-content/uploads/sites/28/2018/08/29496695_1624857634218786_7713147590098812928_n.jpg" alt="">
          <h6>Daging Masak Merah</h6>
          </a>
      </div>
    </div>
  </div>
</section>
<section id="recipe-category">
  <div class="container category-container">
    <h4>Easy Fix</h4>
    <div class="row category-img-box">
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://iluminasi.com/img/upload/mee-kolok-sarawak.jpg" alt="">
        <h6>Kolok Mee Sarawak</h6>
        </a>
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://uf.cari.com.my/forumx/mforum/portal/201604/15/142323rbz24ja8aijbabn2.jpg" alt="">
        <h6>Laksa Sarawak</h6>
        </a>
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://www.elmundoeats.com/wp-content/uploads/2018/10/Asam-Laksa.jpg" alt="">
        <h6>Laksa Penang</h6>
        </a>
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://rasamalaysia.com/wp-content/uploads/2011/07/curry-laksa-thumb-480x480.jpg" alt="">
        <h6>Laksa Singapore</h6>
        </a>  
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/11/4b/6a/86/terengganu-laksa.jpg" alt="">
        <h6>Laksa Terengganu</h6>
        </a>  
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://www.seriouseats.com/recipes/images/2011/08/20110801-laksa-primary.jpg" alt="">
        <h6>Kari Laksa Nyonya</h6>
        </a>  
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://2.bp.blogspot.com/_-xYsrSFl2dw/TUtODJVo7FI/AAAAAAAAMjU/f3FObHNmz6Y/s1600/IMG_3519_picnik.jpg" alt="">
        <h6>Mee Bandung</h6>
        </a>
      </div>
      <div class="col-sm-3 category-img">
        <a href="/recipes/:rid">
        <img class="item-img" src="https://thehalalfoodblog.com/wp-content/uploads/2016/05/Mee-Tarik-01-Sliced-Mee-Soup-with-Beef.jpg" alt="">
        <h6>Mi Tarik</h6>
        </a>  
      </div>
      
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
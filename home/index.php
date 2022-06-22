<?php
include_once "../_header.php";
?>
<style>
  .videowrapper { float: none; 
  clear: both; 
  width: 60%; 
  position: relative;
  margin:auto;
  padding-bottom: 56.25%; 
  padding-top: 25px; height: 0; } 
  .videowrapper iframe { position: absolute; top: 0; left: 0; width: 70%; height: 50%; margin:center}
</style>
    <!-- Begin page content -->
    <div class="container">

    <div id="my-pics" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="width:1000px;margin:auto;"> 

  <!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#my-pics" data-slide-to="0" class="active"></li>
<li data-target="#my-pics" data-slide-to="1"></li>
<li data-target="#my-pics" data-slide-to="2"></li>
</ol>
  
    <div class="item active">
      <img src="../asset/img/ru_tunggu5-1.jpg" alt="Demo 1" class="img-responsive">
      <div class="carousel-caption">
          <h3>RSUD MAJENANG</h3>
          <p>Ruang Tunggu</p>
        </div>
    </div>

    <div class="item">
      <img src="../asset/img/farmasi.jpg" alt="Demo 2" class="img-responsive">
      <div class="carousel-caption">
          <h3>RSUD MAJENANG</h3>
          <p>Farmasi</p>
        </div>
    </div>

    <div class="item">
      <img src="../asset/img/ru_terbuka4.jpg" alt="Demo 3" class="img-responsive">
      <div class="carousel-caption">
          <h3>RSUD MAJENANG</h3>
          <p>Ruang Terbuka</p>
        </div>
    </div>
    
  </div>
  <!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
<span class="icon-prev" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
<span class="icon-next" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

<!--galery-->
<h2>RSUD MAJENANG GALERI</h2>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="farmasi.jpg">
      <img src="../asset/img/farmasi.jpg"  width="600" height="400">
    </a>
    <div class="desc">Foto 1</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="ru_terbuka4.jpg">
      <img src="../asset/img/ru_terbuka4.jpg"  width="600" height="400">
    </a>
    <div class="desc">foto 2</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="ru_tunggu5-1.jpg">
      <img src="../asset/img/ru_tunggu5-1.jpg"  width="600" height="400">
    </a>
    <div class="desc">Foto 3</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="koridor_kasir.jpg">
      <img src="../asset/img/koridor_kasir.jpg"  width="600" height="400">
    </a>
    <div class="desc">Foto 4</div>
  </div>
</div>

<div class="clearfix"></div>
<!--galery-->

      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="../sticky-footer/">the default sticky footer</a> minus the navbar.</p>
    </div>
<!--video-->
<div class="videowrapper">
<iframe
 src="https://www.youtube.com/embed/24nAwe7wnMY" 
 title="YouTube video player" frameborder="0" 
 allow="accelerometer; autoplay=1&amp; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" 
 allowfullscreen>
</iframe>
</div>

<?php
include_once "../_footer.php"
?>

   
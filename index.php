<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    <?php include 'header.php';?>
    </head>
    <body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" alt="First slide" >
      <div class="carousel-caption d-none d-md-block">
        <h1 id="carouseltext1">Own Your Dream Bike!<br>Go on long rides with yourself.</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" alt="Second slide" >
      <div class="carousel-caption d-none d-md-block">
        <h1 id="carouseltext2">Ride Better!<br>The best rides happen on two wheels.</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h2 id="carouseltext3">Go on Adventures! Everyday is a good day for a ride.</h2>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br><br>
<div class="container cont1">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="/img/cbrfireblade.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">CBR fireblade 1000RR</h5>
    <h5 class="card-title">924,000฿</h5>
    <p class="card-text">The Super Sport Motorcycle CBR1000RR. This is the lightest, most powerful, and fastest CBR ever produced.</p>
    <a href="cbr.php" class="btn btn-primary" id="moredetail">More Details</a>
  </div>
</div>
<br><br>
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="/img/bmws1000rr.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">BMW s1000RR</h5>
    <h5 class="card-title">870,000฿</h5>
    <p class="card-text">Always pushing to the limit and in search of the ideal line, you've got 205 HP beneath you.</p><br>
    <a href="bmw.php" class="btn btn-primary" id="moredetail">More Details</a>
  </div>
</div>
<br><br>
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="/img/panigalev4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Ducati Panigale v4 S</h5>
    <h5 class="card-title">1,169,000฿</h5>
    <p class="card-text">The 2020 version of the Panigale V4 boosts performance even further and takes track riding to the next level for amateurs and pros alike. </p><br>
    <a href="ducati.php" class="btn btn-primary" id="moredetail">More Details</a>
  </div>
</div>
</div>
<br>
<div class="container cont2">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="/img/diavel.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Ducati Diavel 1260 S Evo</h5>
    <h5 class="card-title">1,070,500฿</h5>
    <p class="card-text">Powerful. Muscular. But also agile and effective between the curves for maximum riding enjoyment.</p><br>
    <a href="ducatidiavel.php" class="btn btn-primary" id="moredetail">More Details</a>
  </div>
</div>
<br>
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="/img/gsxr1000.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Suzuki GSX-R 1000</h5>
    <h5 class="card-title">709,000฿</h5>
    <p class="card-text">The GSX-R’s compact and lightweight engine provides class-leading power that is delivered smoothly and controllably across a broad rpm range.</p>
    <a href="suzuki.php" class="btn btn-primary" id="moredetail">More Details</a>
  </div>
</div>
<br>
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="/img/aprilia.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Aprilia RSV4 1100</h5>
    <h5 class="card-title">1,449,000฿</h5>
    <p class="card-text">The RSV4 project has never veered from its declared goal of being the absolute best, the fastest and most uncompromising superbike.</p><br>
    <a href="aprilia.php" class="btn btn-primary" id="moredetail">More Details</a>
  </div>
</div>
</div>

    <?php include 'footer.php';?>    
</body>
</html>
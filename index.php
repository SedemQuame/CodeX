<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php include_once 'php/header.php'; ?>
</head>

<body>
  <?php include_once 'php/navbar.php'; ?>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="assets/fruit1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/fruit2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/fruit3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <p class="text-center header">No.1 Solution to Trace Food In Ghana</p>
  <p class="text-center sub-header">Save Time And Money</p>
  <p class="text-center paragraph">
    Get Precised Information about the food you consume. Explore how food travels along the
    <br>
    food chain and the conditions under which your food is grown.
  </p>

  <div class="container marketing">
     <!-- Three columns of text below the carousel -->
     <div class="row">
       <div class="col-lg-4">
         <img class="icon" src="assets/money.svg" alt="save money">
         <h2 class="text-center">Save Time & Money</h2>
         <p>With our system and technology, farmers are going to capitalize on
            their resources and consumers will also know what to buy and from where.
         </p>
       </div>
       <div class="col-lg-4">
         <img class="icon" src="assets/recycle.svg" alt="recycle">
         <h2 class="text-center">Avoid Food Waste</h2>
         <p>Contaminated food can be traced from source and as such prevents the waste
            situation where a a whole product line will be taken from the market.
         </p>
       </div>
       <div class="col-lg-4">
         <img class="icon" src="assets/infinity.svg" alt="infinte safety">
         <h2 class="text-center">Prevent Spread of contamination</h2>
         <p>With our system, when ever a particular food is traced as harmful, It can
            quickly be removed from the market to avoid the spread of contamination.
         </p>
       </div>
     </div>

     <div id="qr_section" class="row">
       <div class="col-3">
         <img class="" src="assets/qr.png" alt="QR Code">
       </div>
       <div class="col-8">
         <p class="text-center">Generate QR Code</p>
         <p class="text-center">
           Get a QR code for your product identity and tracking.
           <br>
           Put in the details of your product and generate the code.
           <br>
           It is easy and simple.
        </p>
        <a class="btn btn-success center_qr_generate" href="#">CLICK TO GENERATE</a>
       </div>
     </div>

     <div id="latestNews" class="row">
       <div class="col-12">
         <p class="text-center">Latest News On Food</p>
       </div>

       <div class="card col-12 col-sm-6 col-md-4 col-lg-3">
         <img src="assets/food1.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">
             Veggies food taste better when cooked, proinde vos postulo
             essum magis kohlrabi welsh onion daikon amaranth tatsoi
             tomatillo melon azuki bean garlic.
           </p>
         </div>
       </div>

       <div class="card col-12 col-sm-6 col-md-4 col-lg-3">
         <img src="assets/food2.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">
             From tall, frosted layer cakes to simple and delicious Bundts,
             our top-rated chocolate cakes are all here. Grab a glass of milk.
           </p>
         </div>
       </div>

       <div class="card col-12 col-sm-6 col-md-4 col-lg-3">
         <img src="assets/food3.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">
             The toppings you may chose for that TV dinner pizza
              slice when you forgot to shop for foods, the paint you may
           </p>
         </div>
       </div>

       <div class="card col-12 col-sm-6 col-md-4 col-lg-3">
         <img src="assets/food4.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">
            The toppings you may chose for that TV dinner pizza slice
            when you forgot to shop for foods, the paint you may
           </p>
         </div>
       </div>
     </div>
   </div>
<?php include_once 'php/footer.php'; ?>
<script src="js/index.js" charset="utf-8"></script>
</body>

</html>

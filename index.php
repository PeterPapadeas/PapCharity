<?php include('includes/header.php')?>
<head>
  <title>Αρχική</title>
</head>
<main class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Αρχική</li>
    </ol>
  </nav>
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"> <img class="d-block mx-auto img-fluid" src="images/carousel1.jpg" alt="First slide">
        <div class="carousel-caption">
          <h5>Lorem Ipsum</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum rhoncus ipsum, eu accumsan nibh suscipit quis. Quisque sollicitudin felis est, ut tristique ipsum pellentesque quis.</p>
          <a class="btn btn-success" href="donate.php">Δωρεά</a>
        </div>
      </div>
      <div class="carousel-item"> <img src="images/carousel2.jpg" alt="Second slide" class="d-block mx-auto img-fluid text-center">
        <div class="carousel-caption">
          <h5>Βοήθα τα παιδιά στις αναπτυσσόμενες χώρες</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum rhoncus ipsum, eu accumsan nibh suscipit quis. Quisque sollicitudin felis est, ut tristique ipsum pellentesque quis.</p>
          <a class="btn btn-success" href="donate.php">Δωρεά</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  <?php include("includes/articles.php") ?>
</main>
<?php include('includes/footer.php')?>
</body></html>
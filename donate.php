<?php include "includes/header.php"?>
<head>
  <title>Donate</title>
</head>
<main class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.php">Αρχική</a></li>
      <li class="breadcrumb-item active" aria-current="page">Δωρεά</li>
    </ol>
  </nav>
  <section class="inputs container">
    <div class="input-group input-group-lg mb-5">
      <input type="text" class="form-control" placeholder="Διεύθυνση e-mail">
      <div class="input-group-append"> <span class="input-group-text">example@example.com</span> </div>
    </div>
    <div class="input-group input-group-lg mb-5">
      <div class="input-group-prepend"> <span class="input-group-text">€</span> </div>
      <input type="text" class="form-control" placeholder="Ποσό σε ευρώ που θέλεις να δώσεις" >
      <div class="input-group-append"> <span class="input-group-text">.00</span> </div>
    </div>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-secondary" id="#pay-by-bank">Μέσω τράπεζας</button>
      <button type="button" class="btn btn-secondary">Μετρητά</button>
    </div>
    <div>
      <ul class="list-group list-group-flush">
        <li class="mb-1 list-group-item"><h2>Alpha Bank:</h2> GR6901758237893753325365783</li>
        <li class="mb-1 list-group-item"><h2>Eurobank:</h2> GR8101498488832172478233998</li>
        <li class="mb-1 list-group-item"><h2>Τράπεζα Πειραιώς:</h2> GR5101459286812635188156767</li>
      </ul>
      <p>Άν επιθυμείς να κάνεις δωρεά μέσω τραπέζης, μπορείς να κάνεις κατάθεση στους παραπάνω λογαριασμούς:</p>
      <p>Δικαιούχος: PapCharity</p>
    </div>
  </section>
  <?php include("includes/articles.php") ?>
</main>
<?php include "includes/footer.php"?>
</body>
</html>
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="width:100%; height: 500px !important;">
    <div class="carousel-item active">
      <img class="d-block w-100 h-30" src="<?php echo base_url('assets/1.jpg'); ?>" alt="1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-30" src="<?php echo base_url('assets/2.jpg'); ?>" alt="2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="jumbotron">
        <h1>Selamat Datang, <?php echo $username;  ?></h1>
        <h2>Hari ini tanggal <?= date('D, d M y')?> 
            <br> Menu Hari ini adalah : sayur brokoli
        </h2>
    </div>
    </div>
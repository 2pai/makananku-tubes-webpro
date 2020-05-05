<div class="container">
<div class="card">
  <div class="card-header">
    Lihat makanan
  </div>
  <div class="card-body">

  <div class="row">
  <?php foreach ($listMakanan as $makanan) { ?>
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
    <img src="<?= base_url('assets/uploads/').$makanan['foto']?>" class="card-img-top" >
      <div class="card-header">
      <?= $makanan['nama_makanan'] ?>
      </div>
      <div class="card-body">
      <p class="card-text">Deskripsi : (<?= $makanan['deskripsi'] ?>)<br>Komposisi (<?= $makanan['komposisi'] ?>)<br> nilai gizi : (<?= $makanan['komposisi'] ?>)<br>Ketersediaan : <?= $makanan['ketersediaan'] ?><br></p>
      </div>
    </div>
  </div>
  <?php } ?>
  </div>
</div>
</div>
<div class="container">
<div class="card">
  <div class="card-header">
    Edit Pesanan
  </div>
  <div class="card-body">
    <h5 class="card-title">Nama pasien = <?= $pasien['nama_pasien']?>, tanggal pesanan <?= $pasien['tanggal']?></h5>
    <hr>
<form method="post" action="<?= site_url('Admin/editpesananP/').$pasien['id_pesanan'] ?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Makanan</label>
    <select class="form-control" name="id_makanan">
      <?php foreach ($listMakanan as $makanan) { ?>
        <option value="<?= $makanan['id_makanan']?>"><?= $makanan['nama_makanan']?></option>
      <?php } ?>
    </select>
  </div>
  <button class="btn btn-primary" type="submit">Update Makanan</button>
</form>
  </div>
</div>
</div>
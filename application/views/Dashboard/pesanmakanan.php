<div class="container">
<div class="card">
  <div class="card-header">
    Pesan makanan
  </div>
  <div class="card-body">
    <h5 class="card-title">Pesan makananmu disini</h5>
    <h5>Hari ini tanggal <?= date('D, d M y')?> 
            <br> Menu Hari ini adalah : sayur brokoli
    </h5>
    <hr>
<form method="post" action="<?= site_url('Main/pesanMakananP/') ?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Makanan</label>
    <select class="form-control" name="id_makanan">
      <?php foreach ($listMakanan as $makanan) { ?>
        <option value="<?= $makanan['id_makanan']?>"><?= $makanan['nama_makanan']?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Additional note</label>
    <textarea name="deskripsi" class="form-control" ></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Pesan Makanan</button>
</form>
  </div>
</div>
</div>
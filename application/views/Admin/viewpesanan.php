<div class="container">
<div class="card">
  <div class="card-header">
    View Pesanan
  </div>
  <div class="card-body">
    <h5 class="card-title">Nama pasien = <?= $pasien['nama_pasien']?>, tanggal pesanan <?= $pasien['tanggal']?></h5>
    <hr>
    <p>Alergi : <?= $pasien['alergi']?></p>
    <p>Penyakit : <?= $pasien['penyakit']?></p>
    <p>Umur : <?= $pasien['umur']?></p>
    <p>Jenis Kelamin : <?= $pasien['jenis_kelamin']?></p>
    <p>Kamar : <?= $pasien['kamar']?></p>
    <hr>
    <p>Pesanan : <?= $pasien['nama_makanan']?></p>
    <p>Nilai gizi : <?= $pasien['nilai_gizi']?></p>
    <p>Deskripsi Pasien : <?= $pasien['pesanan_deskripsi']?></p>
    <p>Komposisi : <?= $pasien['komposisi']?></p>
</form>
  </div>
</div>
</div>
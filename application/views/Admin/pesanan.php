<div class="container">
<div class="card">
  <div class="card-header">
    Pesanan
  </div>
  <div class="card-body">
    <table class="table" id="table">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama Pasien</th>
            <th>Kamar</th>
            <th>Pesanan</th>
            <th>Penyakit</th>
            <th>Alergi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($listPesanan as $pesanan) { ?>
        <tr>
            <td><?= $pesanan['tanggal']?></td>
            <td><?= $pesanan['nama_pasien']?></td>
            <td><?= $pesanan['kamar']?></td>
            <td><?= $pesanan['nama_makanan']?></td>
            <td><?= $pesanan['penyakit']?></td>
            <td><?= $pesanan['alergi']?></td>
            <td>
                <a class="btn btn-primary"href="<?= site_url('Admin/viewpesanan/').$pesanan['id_pesanan'] ?>">View</a>
                <a class="btn btn-warning" href="<?= site_url('Admin/editpesanan/').$pesanan['id_pesanan'] ?>">Edit</a>
                <a class="btn btn-danger" href="<?= site_url('Admin/deletePesanan/').$pesanan['id_pesanan'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
      <?php } ?>
    </tbody>
    </table>
  </div>
</div>
</div>

<!-- Modal -->
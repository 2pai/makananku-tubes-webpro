<div class="container">
<div class="card">
  <div class="card-header">
    Menu Pasien
  </div>
  <div class="card-body">
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add</button>

    <table class="table" id="table">
    <thead>
        <tr>
            <th>Nama Pasien</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Penyakit</th>
            <th>Alergi</th>
            <th>Kamar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr> <?php foreach ($pasien as $psn) : ?>
            <td><?= $psn['nama_pasien']; ?></td>
            <td><?= $psn['umur']; ?></td>
            <td><?= $psn['jenis_kelamin']; ?></td>
            <td><?= $psn['penyakit']; ?></td>
            <td><?= $psn['alergi']; ?></td>
            <td><?= $psn['kamar']; ?></td>
            <td>
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalUpdate">Edit</button>
                <a href= "<?= site_url('Admin/hapusPasien/').$psn['nomor_pasien'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?> Delete </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>
  </div>
</div>
</div>

<!-- Modal Add -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= site_url('Admin/addPasien')?>" method="post">
        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin">
                <option>Laki Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Penyakit</label>
            <input type="text" name="penyakit" class="form-control">
        </div>
        <div class="form-group">
            <label>Alergi</label>
            <input type="text" name="alergi" class="form-control">
        </div>
        <div class="form-group">
            <label>Kamar</label>
            <input type="number" name="kamar" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-primary" type="submit">Daftar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->

<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= site_url('Admin/updatePasien').$psn['nomor_pasien']?>" method="post">
        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasienu" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="passwordu" class="form-control">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="umuru" class="form-control">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelaminu">
                <option>Laki Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Penyakit</label>
            <input type="text" name="penyakitu" class="form-control">
        </div>
        <div class="form-group">
            <label>Alergi</label>
            <input type="text" name="alergiu" class="form-control">
        </div>
        <div class="form-group">
            <label>Kamar</label>
            <input type="number" name="kamaru" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-primary" type="submit">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

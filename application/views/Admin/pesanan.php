<div class="container">
<div class="card">
  <div class="card-header">
    Pesanan
  </div>
  <div class="card-body">
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add</button>

    <table class="table">
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
        <tr>
            <td>Bambang</td>
            <td>22</td>
            <td>Laki Laki</td>
            <td>Stroke</td>
            <td>Gula</td>
            <td>201</td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
    </tbody>
    </table>
  </div>
</div>
</div>

<!-- Modal -->

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
      <form>
        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nama_makanan" class="form-control">
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
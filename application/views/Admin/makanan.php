<div class="container">
<div class="card">
  <div class="card-header">
    Menu makanan
  </div>
  <div class="card-body">
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add</button>

    <table class="table">
    <thead>
        <tr>
            <th>Nama Makanan</th>
            <th>Nilai Gizi</th>
            <th>Ketersediaan</th>
            <th>Komposisi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Pisang</td>
            <td>100 CAL</td>
            <td>100</td>
            <td>Nabati, Glukosa</td>
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
            <label>Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control">
        </div>
        <div class="form-group">
            <label>Nilai gizi</label>
            <input type="text" name="nilai_gizi" class="form-control">
        </div>
        <div class="form-group">
            <label>Komposisi</label>
            <input type="text" name="komposisi" class="form-control">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Deksripsi</label>
            <textarea name="deskripsi" class="form-control" ></textarea>            
        </div>
        <div class="form-group">
            <label>Ketersediaan</label>
            <input type="number" name="ketersediaan" class="form-control">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

      </div>
      <div class="modal-footer">
      <button class="btn btn-primary" type="submit">Pesan Makanan</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

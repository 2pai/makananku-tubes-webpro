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
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Makanan</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Sayur Bayem + oseng jamur</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tanggal</label>
    <input type="date" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Additional note</label>
    <textarea name="text" class="form-control" ></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Pesan Makanan</button>
</form>
  </div>
</div>
</div>
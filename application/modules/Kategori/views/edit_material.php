<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Kategori Material</h1>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= $GLOBALS['path'] ?>/kategori/updateKategoriMaterial/<?= $data['get_kategori']['0']['id_kategori_material'] ?>" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">Nama Kategori Material</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['get_kategori']['0']['nama_kategori']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jasa</label>
                <select class="form-control">
                  <option <?php if($data['get_kategori']['0']['id_kategori_jasa'] == 1) {echo "selected";} ?>>1</option>
                  <option <?php if($data['get_kategori']['0']['id_kategori_jasa'] == 2) {echo "selected";} ?>>2</option>
                  <option <?php if($data['get_kategori']['0']['id_kategori_jasa'] == 3) {echo "selected";} ?>>3</option>
                  <option <?php if($data['get_kategori']['0']['id_kategori_jasa'] == 4) {echo "selected";} ?>>4</option>
                  <option <?php if($data['get_kategori']['0']['id_kategori_jasa'] == 5) {echo "selected";} ?>>5</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>


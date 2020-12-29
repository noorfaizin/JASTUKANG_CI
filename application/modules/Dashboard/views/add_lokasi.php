<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Lokasi</h1>
  </div>
  
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card shadow mb-4">
          <div class="card-body">
            <form method="POST" action="<?= $GLOBALS['path'] ?>/material/savematerial" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>


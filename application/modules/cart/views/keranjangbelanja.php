<!-- Content -->
<div class="col-md-11 bg-white mx-auto p-3 mb-4 rounded">
    <h3 class="text-dark font-weight-bold">Keranjang Belanja</h3>
    <hr>
        <div class="col-md-5">
            <div class="form-group justify-content-end">
                <input type="text" class="form-control justify-content-end" id="search-ho-jasa" placeholder="Cari produk...">
            </div>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <thead class="bg-warning">
                    <tr class="text-white">
                        <th class="text-center" width="1px">NO</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center" width="150px">Jumlah</th>
                        <th class="text-center">Sub-Total</th>
                        <th class="text-center" width="120px">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Bor Beton</td>
                        <td align="right">Rp. 250.000 ,-</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning text-dark font-weight-bold">-</a>
                            <input type="text" class="jml-produk" placeholder="1">
                            <a href="#" class="btn btn-sm btn-warning text-dark font-weight-bold">+</a>
                        </td>
                        <td align="right">Rp. 250.000 ,-</td>
                        <td align="center">
                            <a href="#" class="text-dark mx-auto" style="border-radius: 50%;"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-light text-center font-weight-bold" colspan="3">TOTAL</td>
                        <td class="bg-light text-center font-weight-bold">1</td>
                        <td class="bg-warning font-weight-bold text-white" align="right" colspan="2">Rp. 250.000 ,-</td>
                    </tr>
                </tbody>
            </table>

            <div class="col-md-12 text-right">
                <a class="mx-auto btn btn-danger text-white" href="<?= base_url('#') ?>">Kosongkan Keranjang</a>
                <a class="mx-auto btn btn-warning text-white" href="<?= base_url('#') ?>">Lanjut Berbelanja</a>
                <a href="#" class="mx-auto btn btn-success text-white" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-money-bill-alt"></i> Bayar Sekarang</a>
            </div>
        </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gradient-warning">
        <h5 class="modal-title font-weight-bold mx-auto text-white" id="exampleModalLabel">JasTukang</h5>
      </div>
      <div class="modal-body">
        <h6 class="text-center text-dark">Sertakan bukti transfer untuk melanjutkan</h6>
        <div class="col-md-12 mt-3">
            <div class="custom-file mb-3">
                <input type="file" multiple name="image_name[]" class="custom-file-input" id="gallery-photo-add" required>
                <label class="custom-file-label" for="validatedCustomFile">Bukti Transfer</label>
                <div class="gallery" ></div>
            </div>
        </div>
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
        <a href="<?= base_url('#')?>" class="btn btn-warning">Transaksi</a>
      </div>
    </div>
  </div>
</div>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion toggled font-weight-bold" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>">
    <div class="sidebar-brand-icon">
    <img src="<?= base_url('assets/images/logo.png')?>" alt="JasTukang" style="width:50px">
    </div>
    <div class="sidebar-brand-text mx-3">Dashboard <sup>User</sup></div>
  </a>

  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url()?>">
    <span>Home</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jasa" aria-expanded="true" aria-controls="jasa">
      <span>Jasa</span>
    </a>
    <div id="jasa" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a href="<?= base_url('jasa/daftarjasa'); ?>" class="dropdown-item">Daftar Jasa</a>
        <div class="dropdown-divider"></div>
        <?php foreach ($jasa as $row): ?>
          <div class="dropdown dropright">
            <a href="<?= base_url('jasa/') .  $row['id_kategori_jasa']; ?>" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle"><?= $row['nama_kategori'] ?></a>
            <div class="dropdown-content dropdown-menu ml-0">
              <?php foreach ($row['jasa_sub_kategori'] as $sub): ?>
                <a tabindex="-1" href="<?= base_url('jasa/') . $sub['id_kategori_jasa'] . '/' . $sub['id_sub_kategori_jasa'] ?>" class="dropdown-item">- <?php echo $sub['nama_sub_kategori_jasa'] ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#produk" aria-expanded="true" aria-controls="produk">
      <span>Produk</span>
    </a>
    <div id="produk" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a href="<?= base_url('produk'); ?>" class="dropdown-item">Daftar Produk</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Produk 1</a>
        <a href="#" class="dropdown-item">Produk 2</a>
        <a href="#" class="dropdown-item">Produk 3</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
    <span>Tentang</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
    <span>Galery</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
    <span>Testimoni</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
<div id="top"></div>
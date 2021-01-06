
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-hammer"></i>
        </div>
        <div class="sidebar-brand-text mx-3">jastukang</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      
      <!-- Nav Item - Material -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Admin/methodPembayaran">
          <i class="fas fa-fw fa-table"></i>
          <span>Metode Pembayaran</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Admin/saldo">
          <i class="fas fa-fw fa-table"></i>
          <span>Saldo</span></a>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kategori"
          aria-expanded="true" aria-controls="kategori">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Transaksi</span>
        </a>
        <div id="kategori" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Transaksi:</h6>
            <a class="collapse-item" href="<?= base_url() ?>Transaksi/jasa">Jasa</a>
            <a class="collapse-item" href="<?= base_url() ?>Transaksi/material">Material</a>
            <a class="collapse-item" href="<?= base_url() ?>Transaksi/getTransaksiMember">Member Material</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Material -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Tukang">
          <i class="fas fa-fw fa-table"></i>
          <span>Tukang</span></a>
      </li>

      <!-- Nav Item - Material -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Jasa">
          <i class="fas fa-fw fa-table"></i>
          <span>Jasa</span></a>
      </li>

      <!-- Nav Item - Material -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Material">
          <i class="fas fa-fw fa-table"></i>
          <span>Material</span></a>
      </li>

      <!-- Nav Item - Vendor -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>Vendor">
          <i class="fas fa-fw fa-table"></i>
          <span>Vendor</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kategori"
          aria-expanded="true" aria-controls="kategori">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Kategori</span>
        </a>
        <div id="kategori" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Kategori:</h6>
            <a class="collapse-item" href="<?= base_url() ?>Kategori/jasa">Jasa</a>
            <a class="collapse-item" href="<?= base_url() ?>Kategori/material">Material</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengguna"
          aria-expanded="true" aria-controls="pengguna">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pengguna</span>
        </a>
        <div id="pengguna" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Pengguna:</h6>
            <a class="collapse-item" href="<?= base_url() ?>User/pelanggan">Pelanggan</a>
            <a class="collapse-item" href="<?= base_url() ?>User/tukang">Tukang</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
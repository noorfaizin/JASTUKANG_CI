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
  <div id="jasa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
	<div class="bg-white py-2 collapse-inner rounded">
	  <h6 class="collapse-header">Jasa Tukang</h6>
	  <a class="collapse-item" href="<?= base_url('jasa/renovasi')?>">Renovasi</a>
	  <a class="collapse-item" href="<?= base_url('jasa/instalasi')?>">Instalasi</a>
	  <a class="collapse-item" href="<?= base_url('jasa/pembangunan')?>">Pembangunan</a>
	</div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('produk')?>">
	<span>Produk</span></a>
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
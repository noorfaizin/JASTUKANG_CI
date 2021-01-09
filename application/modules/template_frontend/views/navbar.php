<div class="navigation-wrap bg-white start-header start-style p-0" style="border-radius: 0 0 15px 15px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                
                    <a class="navbar-brand" href="<?= base_url()?>">
                        <img src="<?= base_url('assets/images/nav-logo.png') ?>" alt="">
                    </a>	
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto py-0 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="<?= base_url() ?>">Home</a>
                            </li>
                            <!-- START DROPDOWN -->
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Jasa</a>
                                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                                    <!-- <a class="dropdown-item" href="<?= base_url('jasa/dekorasi') ?>">Dekorasi</a>
                                    <a class="dropdown-item" href="<?= base_url('jasa/perbaikan') ?>">Perbaikan</a>
                                    <a class="dropdown-item" href="<?= base_url('jasa/ruang') ?>">Perbaikan Ruang</a>
                                    <div class="dropdown-divider"></div> -->
                                    <!-- With Click -->
                                    <!-- <div class="dropdown-submenu dropright">
                                        <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Sub Menu</a>
                                        <div aria-labelledby="dropdownMenu2" class="dropdown-menu ml-2">
                                            <a tabindex="-1" href="#" class="dropdown-item">Menu 1</a>
                                            <a tabindex="-1" href="#" class="dropdown-item">Menu 2</a>
                                            <a tabindex="-1" href="#" class="dropdown-item">Menu 3</a>
                                        </div>
                                    </div> -->
                                    
                                    <a href="<?= base_url('jasa/daftarjasa'); ?>" class="dropdown-item">Daftar Jasa</a>
                                    <div class="dropdown-divider"></div>
                                    <!-- Dropdown with hover -->
                                    <?php foreach ($jasa as $row): ?>
                                      <div class="dropdown dropright">
                                          <a href="<?= base_url('jasa/') .  $row['id_kategori_jasa']; ?>" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle"><?= $row['nama_kategori'] ?></a>
                                          <div class="dropdown-content dropdown-menu">
                                            <?php foreach ($row['jasa_sub_kategori'] as $sub): ?>
                                              <a tabindex="-1" href="<?= base_url('jasa/') . $sub['id_kategori_jasa'] . '/' . $sub['id_sub_kategori_jasa'] ?>" class="dropdown-item"><?= $sub['nama_sub_kategori_jasa'] ?></a>
                                            <?php endforeach; ?>
                                          </div>
                                      </div>
                                    <?php endforeach; ?>

                                    
                                </ul>
                            </li>
                            <!-- END DROPDOWN -->
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Produk</a>
                                <ul aria-labelledby="dropdownMenu1" class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url('produk') ?>">Semua Produk</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Produk 1</a>
                                    <a class="dropdown-item" href="#">Produk 2</a>
                                    <a class="dropdown-item" href="#">Produk 3</a>
                                </ul>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Tentang</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Galery</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="<?= base_url('testimonial')?>">Testimoni</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li>
                                <form>
                                    <input type="search" class="form-control bg-light border-0 small search" placeholder="Cari produk..." name="search" id="search" >
                                </form>
                            </li>
                            <li>
                                <a href="<?= base_url('user/login')?>" class="mb-3 mb-md-0 ml-3 btn text-dark btn-sm btn-warning shadow-sm">
                                    <i class="fas fa-user text-dark-50"></i> Masuk / Daftar</a>
                            </li>
                        </ul>
                        
                    </div>
                    
                </nav>		
            </div>
        </div>
    </div>
</div>
<div id="top"></div>

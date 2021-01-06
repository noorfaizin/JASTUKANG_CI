<div class="navigation-wrap bg-white start-header start-style p-0" style="border-radius: 0 0 15px 15px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
<<<<<<< HEAD

                    <a class="navbar-brand" href="<?= base_url()?>">
                        <img src="<?= base_url('assets/images/nav-logo.png') ?>" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="nav-item multi-level-dropdown pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle"  href="<?= base_url() ?>jasa" role="button" aria-haspopup="true" aria-expanded="false">Jasa</a>
                                <div class="dropdown-menu dropdown-toggle">
                                  <?php foreach ($jasa as $row): ?>
                                    <a class="dropdown-item" data-toggle="toggle" href="<?= base_url(); ?>jasa/<?php echo $row['id_kategori_jasa'] ?>"><?php echo $row['nama_kategori']; ?></a>
                                    <div class="dropdown-item dropdown-submenu">
                                      <?php foreach ($row['jasa_sub_kategori'] as $sub): ?>
                                        <a href="<?= base_url(); ?>jasa/<?php echo $row['id_kategori_jasa'] ?>/<?php echo $sub['id_sub_kategori_jasa'] ?>" class="dropdown-item dropdown-submenu"><?php echo $sub['nama_sub_kategori_jasa']; ?></a>
                                      <?php endforeach; ?>
                                    </div>
                                  <?php endforeach; ?>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="<?= base_url('') ?>/tentang">Tentang</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Hubungi</a>
=======
                
                    <a class="navbar-brand" href="<?= base_url()?>">
                        <img src="<?= base_url('assets/images/nav-logo.png') ?>" alt="">
                    </a>	
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto py-0 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link" href="<?= base_url('') ?>">Home</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= base_url('') ?>/jasa" role="button" aria-haspopup="true" aria-expanded="false">Jasa</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url('jasa/renovasi') ?>">Renovasi</a>
                                    <a class="dropdown-item" href="<?= base_url('jasa/instalasi') ?>">Instalasi</a>
                                    <a class="dropdown-item" href="<?= base_url('jasa/pembangunan') ?>">Pembangunan</a>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="<?= base_url('produk') ?>">Produk</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Tentang</a>
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Galery</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Testimoni</a>
                            </li>
<<<<<<< HEAD
                            <li>
                                <div class="search ml-3">
                                <input type="text" placeholder=" ">
                                <div>
                                    <svg>
                                        <use xlink:href="#path">
                                    </svg>
                                </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
                                    <path d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562" transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)"></path>
                                </symbol>
                                </svg>
                            </li>
                            <li>
                                <a href="<?= base_url('login')?>" class="ml-3 btn text-dark btn-sm btn-warning shadow-sm">
                                    <i class="fas fa-user text-dark-50"></i> Masuk / Daftar</a>
                            </li>
                        </ul>

                    </div>

                </nav>
=======
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li>
                                <form>
                                    <input class="form-control search mr-3 mr-md-0" placeholder="Enter your search..." type="search" value="" name="search" id="search">
                                </form>
                            </li>
                            <li>
                                <a href="<?= base_url('user/login')?>" class="mb-3 mb-md-0 ml-3 btn text-dark btn-sm btn-warning shadow-sm">
                                    <i class="fas fa-user text-dark-50"></i> Masuk / Daftar</a>
                            </li>
                        </ul>
                        
                    </div>
                    
                </nav>		
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
            </div>
        </div>
    </div>
</div>
<div id="top"></div>

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
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Galery</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="#">Testimoni</a>
                            </li>
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
            </div>
        </div>
    </div>
</div>
<div id="top"></div>

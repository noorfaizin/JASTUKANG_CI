<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars text-warning"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <button class="btn btn-warning" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button">
                            <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-exchange-alt fa-fw text-dark"></i>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header bg-warning border-0">
                        Transaksi
                    </h6>
                    <!-- TRANSAKSI USER -->
                    <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/transaksi_jasa')?>">
                        Jasa Tukang
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/transaksi_produk')?>">
                        Produk
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="<?= base_url('user/status_pemesanan')?>">
                        Status Pemesanan
                    </a>

                    <div class="dropdown-divider"></div>
                    <!-- TRANSAKSI TUKANG -->
                    <a class="dropdown-item d-flex align-items-center" href="<?= base_url('tukang/pesanan')?>">
                        Pesanan
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="<?= base_url('tukang/historyjob')?>">
                        Riwayat Pekerjaan
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="<?= base_url('tukang/saldo')?>">
                        Saldo
                    </a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link text-dark" href="<?= base_url('chat')?>">
                    <i class="fas fa-envelope fa-fw"></i>
                </a>
            </li>

            <!-- Nav Item - CART -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart fa-fw text-dark"></i>
                    <span class="badge badge-danger navbar-badge  font-weight-light qty-cart">10</span>
                </a>
                <!-- Dropdown - Cart -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="cartDropdown">
                    <h6 class="dropdown-header bg-warning border-0">
                        Keranjang Belanja
                    </h6>
                    <div class="card-body dropdown-cart p-0">
                        <p class="m-0 font-italic text-danger text-center p-3">Keranjang belanja kosong!</p>
                        <!-- <table class="table table-hover table-bordered">
                            <tbody>
                                <tr>
                                    <td class="p-2">
                                    <div class="row col-md-12">
                                        <div class="col-md-10">
                                            <span class="font-weight-bold badge badge-warning">Bor Beton</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="ml-5 text-danger mx-auto" style="border-radius: 50%;">
                                                <button class="close text-danger">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">      
                                        <span style="font-size:13px;">1 x </span>
                                        <span style="font-size:13px;">Rp. 150.000 ,-</span>
                                        <span style="font-size:13px;">| Rp. 150.000 ,-</span>              
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                    <div class="row col-md-12">
                                        <div class="col-md-10">
                                            <span class="font-weight-bold badge badge-warning">Bor Beton</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="ml-5 text-danger mx-auto" style="border-radius: 50%;">
                                                <button class="close text-danger">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">      
                                        <span style="font-size:13px;">1 x </span>
                                        <span style="font-size:13px;">Rp. 150.000 ,-</span>
                                        <span style="font-size:13px;">| Rp. 150.000 ,-</span>              
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                    <div class="row col-md-12">
                                        <div class="col-md-10">
                                            <span class="font-weight-bold badge badge-warning">Bor Beton</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="ml-5 text-danger mx-auto" style="border-radius: 50%;">
                                                <button class="close text-danger">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">      
                                        <span style="font-size:13px;">1 x </span>
                                        <span style="font-size:13px;">Rp. 150.000 ,-</span>
                                        <span style="font-size:13px;">| Rp. 150.000 ,-</span>              
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                    <div class="row col-md-12">
                                        <div class="col-md-10">
                                            <span class="font-weight-bold badge badge-warning">Bor Beton</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="ml-5 text-danger mx-auto" style="border-radius: 50%;">
                                                <button class="close text-danger">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">      
                                        <span style="font-size:13px;">1 x </span>
                                        <span style="font-size:13px;">Rp. 150.000 ,-</span>
                                        <span style="font-size:13px;">| Rp. 150.000 ,-</span>              
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                    </div>
                    <!-- <div class="card-footer">
                        <p class="text-center m-0">Total bayar : Rp. 250.000 ,-</p>
                        <a href="<?= base_url('cart'); ?>" class="btn btn-sm btn-success d-block"><i class="fas fa-money-bill-alt"></i> Bayar Sekarang</a>
                    </div> -->
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nama User</span>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/images/user/user.jpg')?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- PENGATURAN AKUN -->
                    <a class="dropdown-item" href="<?= base_url('user')?>">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-dark-400"></i>
                        Pengaturan
                    </a>
                    <a class="dropdown-item" href="<?= base_url('user/address')?>">
                        <i class="fas fa-home fa-sm fa-fw mr-2 text-dark-400"></i>
                        Alamat
                    </a>
                <!-- PENGATURAN AKUN -->
                    <a class="dropdown-item" href="<?= base_url('user/historyorder')?>">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-dark-400"></i>
                        Riwayat Pemesanan
                    </a>
                    <a class="dropdown-item" href="<?= base_url('tukang')?>">
                        <i class="fas fa-diagnoses fa-sm fa-fw mr-2 text-dark-400"></i>
                        Jasa Tukang
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
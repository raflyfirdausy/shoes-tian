<header class="header-area" id="header-area">
    <div class="dope-nav-container breakpoint-off" style="background-color: #000;">
        <div class="container">
            <div class="row">
                <!-- dope Menu -->
                <nav class="dope-navbar justify-content-between" id="dopeNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?= base_url() ?>">
                        <img width="70px" src="<?= asset("img/logo_white.png") ?>" alt="logo shoes and care" width="100%" height="100%" />
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="dope-navbar-toggler">
                        <span class="navbarToggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>

                    <!-- Menu -->
                    <div class="dope-menu">

                        <!-- close btn -->
                        <div class="dopecloseIcon">
                            <div class="cross-wrap">
                                <span class="top"></span>
                                <span class="bottom"></span>
                            </div>
                        </div>

                        <!-- Nav Start -->
                        <div class="dopenav">
                            <ul id="nav">
                                <li>
                                    <a href="<?= base_url("home") ?>">Beranda</a>
                                </li>
                                <li>
                                    <a href="<?= base_url("home/layanan") ?>">Daftar Harga</a>
                                </li>
                                <li>
                                    <a class="" href="<?= base_url("auth/register") ?>">Daftar</a>
                                </li>
                                <li>
                                    <a class="pricelist" href="<?= base_url("auth") ?>">Masuk</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
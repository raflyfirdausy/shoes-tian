<!DOCTYPE html>
<html lang="id" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset("img/logo_white.png") ?>">
    <meta name="author" content="Shoes and Care Indonesia">
    <meta name="description" content="Dapatkan perawatan cuci sepatu terbaik di Indonesia.Telah terbukti sejak tahun 2013.">
    <meta name="keywords" content="cuci sepatu, cuci sepatu murah di Indonesia, shoes care Indonesia, cuci topi murah, cuci tas murah, peralatan sepatu murah">
    <meta charset="UTF-8">
    <title>Shoes and Care - The Best Shoes Treatment in the Country</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148363864-1"></script>
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/themify-icons.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/animate.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/style.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/responsive.css">
    <link rel="stylesheet" href="<?= asset("shoes/") ?>assets/front/css/custom-style.css">
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #222}";
            document.body.appendChild(css);
        };
    </script>

    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2930349,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>

    <?php $this->load->view("home/template/header") ?>

    <div class="main-content">
        <section class="main-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 w-full index-z">
                        <div>
                            <h1 class="white-color" style="margin-top: 150px;">Price List Shoes and Care</h1>
                            <p class=" txt-16">Kami menawarkan berbagai macam layanan terbaik untuk andan dengan harga yang ekonomis.</p>
                            <div class="content my-2rem">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-2">
                <div class="row">
                    <?php foreach ($paket as $p) : ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="el-card-item pb-3">
                                    <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center ">
                                        <a class="image-popup-vertical-fit" href="<?= $p["gambar"] ? base_url(LOKASI_PAKET_GAMBAR . $p["gambar"]) : base_url(LOKASI_LOGO) ?>">
                                            <img src="<?= $p["gambar"] ? base_url(LOKASI_PAKET_GAMBAR . $p["gambar"]) : base_url(LOKASI_LOGO) ?>" alt="<?= $p["nama"] ?>" class="d-block position-relative w-100" />
                                        </a>
                                    </div>
                                    <div class="el-card-content text-center">
                                        <h4 class="mb-0"><?= $p["nama"] ?></h4>
                                        <span class="text-muted"><?= $p["deskripsi"] ?></span>
                                        <br>
                                        <a href="<?= base_url("transaksi/order/tambah") ?>" class="badge rounded-pill text-white text-bold bg-success p-2 mt-2">Rp <?= Rupiah3($p["harga"]) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view("home/template/footer") ?>
    <?php $this->load->view("home/template/js") ?>

</body>

</html>
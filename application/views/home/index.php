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

    <section class="main-background">
        <div class="container">
            <div class="row">
                <div class="col-md-5 hidden">
                </div>
                <div class="col-md-7 w-full index-z">
                    <div>
                        <h1 class="white-color mt-420">Pilihan Terbaik untuk Perawatan Barang Kesayangan Anda</h1>
                        <p class=" txt-16">Kami menangani perawatan sepatu. Kami melakukan
                            perawatan secara profesional, dengan teknik khusus, serta menggunakan alat dan bahan premium
                            untuk melakukan perawatan.</p>
                        <div class="content my-2rem">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 hidden">
                </div>
                <div class="col-md-7 index-z w-full">
                    <div class="">
                        <h1 class="second-title-hero-img">Kami Telah Melayani pelanggan dengan service yang terbaik</h1>
                        <div class="our-service-section">
                            <div>
                                <h2 class="why-us-title">5 Layanan</h2>
                                <p>Dengan pelayanan terbaik </p>
                            </div>
                            <div>
                                <h2 class="why-us-title">500+</h2>
                                <p>pasang sepatu telah ditangani </p>
                            </div>
                            <div>
                                <h2 class="why-us-title">100+</h2>
                                <p>pelanggan puas dengan layanan Kami </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="absoulute-position">
        <div class="container">
            <div class="row">
                <img src="<?= asset("shoes/") ?>assets/front/img/hero-img.html" class="hero-image-new" alt="shoes and care - header image" />
            </div>
        </div>
    </section>

    <section class="promo-section">
    </section>

    <section class="service-section" id="service-section">
        <div class="container">
            <div class="flex">
                <div clsass="col-md-8">
                    <h2 class="text-white ml-2">Bagaimana Kami Melakukan Perawatan untuk Barang Kesayangan Anda</h2>
                </div>
                <div clsass="col-md-4">
                    <p class="text-service">Kami merupakan jasa perawatan premium sepatu dengan layanan service terbaik.</p>
                </div>
            </div>
            <div class="col-sm ">
                <div class="center-props">
                    <div class="our-treatment-section">
                        <div class="text-treatment ">
                            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M67.5203 7.51861L61.5726 6.62645L58.8589 1.51514L56.1453 6.62645L50.0768 7.51861L54.4632 11.7935L53.4223 17.797L58.8496 14.9625L64.2769 17.797L63.2361 11.7935L67.5203 7.51861ZM35.8673 7.51861L29.7988 6.62645L27.0851 1.51514L24.3715 6.62645L18.3215 7.51861L22.6894 11.7935L21.6485 17.797L27.0758 14.9625L32.5031 17.797L31.4623 11.7935L35.8673 7.51861Z" fill="#FFCF39" />
                                <path d="M31.4716 11.7935L32.5125 17.797L27.0852 14.9625V1.51514L29.7989 6.62645L35.8674 7.51861L31.4716 11.7935Z" fill="#FFCF39" />
                                <path d="M51.7494 7.51861L45.6809 6.62645L42.9672 1.51514L40.2536 6.62645L34.1851 7.51861L38.5715 11.7935L37.5306 17.797L42.9579 14.9625L48.3852 17.797L47.3444 11.7935L51.7494 7.51861Z" fill="#FFCF39" />
                                <path d="M48.3946 17.797L42.9673 14.9625V1.51514L45.6809 6.62645L51.7495 7.51861L47.363 11.7935L48.3946 17.797Z" fill="#FFCF39" />
                                <path d="M60.3097 27.846C58.6873 27.846 57.4192 26.578 57.4192 24.9556V22.0652H28.4219V24.9556C28.4219 26.578 27.1538 27.846 25.5314 27.846H16.8416V53.4122C16.8416 68.778 27.2657 82.2231 42.2213 85.9899L42.9112 86.1578L43.6012 85.9899C58.5568 82.2231 68.9809 68.7594 68.9809 53.4122V27.846H60.3097Z" fill="#F2F2F2" />
                                <path d="M68.9998 27.8461V53.4123C68.9998 68.7781 58.5757 82.2232 43.6201 85.9901L42.9302 86.1579V22.0466H57.4195V24.937C57.4195 26.5594 58.6876 27.8275 60.31 27.8275H68.9998V27.8461Z" fill="#E7E7F2" />
                                <path d="M60.3096 33.6444C56.5428 33.6444 53.2981 31.2016 52.1419 27.845H33.7178C32.5617 31.2016 29.3169 33.6444 25.5501 33.6444H22.6597V53.4298C22.6597 65.8866 30.9393 76.8515 42.9485 80.2267C54.9391 76.8701 63.2374 65.8866 63.2374 53.4298V33.6444H60.3096Z" fill="#FF8A65" />
                                <path d="M63.2 33.6444V53.4298C63.2 65.8866 54.9203 76.8515 42.9111 80.2267V27.845H52.1232C53.2793 31.2016 56.5241 33.6444 60.2909 33.6444H63.2Z" fill="#FF8A65" />
                                <path d="M53.634 50.354L42.9115 61.1325L40.0211 64.0229L32.189 56.1349L36.2542 52.0696L40.0211 55.7806L42.9115 52.8902L49.5687 46.2888L53.634 50.354Z" fill="#F2F2F2" />
                                <path d="M53.6339 50.3537L42.9114 61.1322V52.9085L49.5687 46.3071L53.6339 50.3537Z" fill="#E7E7F2" />
                            </svg>

                            <h2>Expert Technician</h2>
                            <p class="secondary-text-color">Berpengalaman di industri cuci sepatu
                            </p>
                        </div>
                        <div class="text-treatment">
                            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M63.2501 85.25H24.7501C24.5263 85.2531 24.3054 85.1991 24.1082 85.0933C23.9109 84.9875 23.7438 84.8332 23.6226 84.6451C23.4876 84.461 23.4037 84.2444 23.3796 84.0173C23.3554 83.7903 23.3918 83.5609 23.4851 83.3525L28.9851 69.6025C29.0851 69.3493 29.2595 69.1322 29.4854 68.9801C29.7112 68.8279 29.9778 68.7477 30.2501 68.7501H57.7501C58.0224 68.7477 58.289 68.8279 58.5149 68.9801C58.7407 69.1322 58.9151 69.3493 59.0151 69.6025L64.5151 83.3525C64.6084 83.5609 64.6448 83.7903 64.6207 84.0173C64.5965 84.2444 64.5126 84.461 64.3776 84.6451C64.2564 84.8332 64.0893 84.9875 63.8921 85.0933C63.6948 85.1991 63.4739 85.2531 63.2501 85.25ZM26.7851 82.5H61.2151L56.8151 71.5001H31.1851L26.7851 82.5Z" fill="#BFBFBF" />
                                <path d="M70.125 85.25H17.875C17.5103 85.25 17.1606 85.1051 16.9027 84.8473C16.6449 84.5894 16.5 84.2397 16.5 83.875C16.5 83.5103 16.6449 83.1606 16.9027 82.9027C17.1606 82.6449 17.5103 82.5 17.875 82.5H70.125C70.4897 82.5 70.8394 82.6449 71.0973 82.9027C71.3551 83.1606 71.5 83.5103 71.5 83.875C71.5 84.2397 71.3551 84.5894 71.0973 84.8473C70.8394 85.1051 70.4897 85.25 70.125 85.25Z" fill="white" />
                                <path d="M78.375 16.5H9.625C5.82804 16.5 2.75 19.578 2.75 23.375V64.625C2.75 68.422 5.82804 71.5 9.625 71.5H78.375C82.172 71.5 85.25 68.422 85.25 64.625V23.375C85.25 19.578 82.172 16.5 78.375 16.5Z" fill="#FFCF39" />
                                <path d="M83.875 65.9992H15.125C14.2222 65.9992 13.3282 65.8214 12.4941 65.4759C11.66 65.1304 10.9021 64.624 10.2637 63.9856C9.62528 63.3472 9.11887 62.5893 8.77337 61.7552C8.42787 60.921 8.25004 60.0271 8.25004 59.1242V17.8742C8.20655 17.4629 8.20655 17.0481 8.25004 16.6367C6.69478 16.9489 5.29613 17.7913 4.29301 19.0201C3.28988 20.249 2.74451 21.7879 2.75004 23.3742V64.6242C2.75004 66.4476 3.47437 68.1963 4.76368 69.4856C6.05299 70.7749 7.80168 71.4992 9.62504 71.4992H78.375C79.9847 71.5371 81.5563 71.0065 82.8136 70.0006C84.071 68.9947 84.9336 67.578 85.25 65.9992C84.7933 66.0529 84.3318 66.0529 83.875 65.9992Z" fill="#D09E00" />
                                <path d="M19.25 53.625C19.25 54.719 19.6846 55.7682 20.4582 56.5418C21.2318 57.3154 22.281 57.75 23.375 57.75H70.125C71.219 57.75 72.2682 57.3154 73.0418 56.5418C73.8154 55.7682 74.25 54.719 74.25 53.625V17.875C74.2522 17.6947 74.2166 17.5159 74.1456 17.3501C74.0745 17.1843 73.9696 17.0353 73.8375 16.9125L73.4525 16.5H19.25V53.625Z" fill="#D09E00" />
                                <path d="M64.625 2.75H23.375C19.578 2.75 16.5 5.82804 16.5 9.625V48.125C16.5 51.922 19.578 55 23.375 55H64.625C68.422 55 71.5 51.922 71.5 48.125V9.625C71.5 5.82804 68.422 2.75 64.625 2.75Z" fill="#FF8A65" />
                                <path d="M19.25 50.875V16.5C19.25 13.5826 20.4089 10.7847 22.4718 8.72183C24.5347 6.65893 27.3326 5.5 30.25 5.5H67.375C68.5192 5.51183 69.643 5.80458 70.6475 6.3525C70.0574 5.26841 69.1875 4.36238 68.1282 3.72877C67.069 3.09517 65.8593 2.75717 64.625 2.75H23.375C21.5516 2.75 19.803 3.47433 18.5136 4.76364C17.2243 6.05295 16.5 7.80164 16.5 9.625V48.125C16.5072 49.3593 16.8452 50.569 17.4788 51.6282C18.1124 52.6875 19.0184 53.5574 20.1025 54.1475C19.5546 53.143 19.2618 52.0192 19.25 50.875Z" fill="#C05331" />
                                <path d="M59.125 37.125C58.7603 37.125 58.4106 36.9801 58.1527 36.7223C57.8949 36.4644 57.75 36.1147 57.75 35.75V27.5C57.75 24.2179 56.4462 21.0703 54.1254 18.7496C51.8047 16.4288 48.6571 15.125 45.375 15.125C42.0929 15.125 38.9453 16.4288 36.6246 18.7496C34.3038 21.0703 33 24.2179 33 27.5V35.75C33 36.1147 32.8551 36.4644 32.5973 36.7223C32.3394 36.9801 31.9897 37.125 31.625 37.125C31.2603 37.125 30.9106 36.9801 30.6527 36.7223C30.3949 36.4644 30.25 36.1147 30.25 35.75V27.5C30.25 23.4886 31.8435 19.6415 34.68 16.805C37.5165 13.9685 41.3636 12.375 45.375 12.375C49.3864 12.375 53.2335 13.9685 56.07 16.805C58.9065 19.6415 60.5 23.4886 60.5 27.5V35.75C60.5 36.1147 60.3551 36.4644 60.0973 36.7223C59.8394 36.9801 59.4897 37.125 59.125 37.125Z" fill="#C05331" />
                                <path d="M33 30.25H30.25C27.9718 30.25 26.125 32.0968 26.125 34.375V42.625C26.125 44.9032 27.9718 46.75 30.25 46.75H33C35.2782 46.75 37.125 44.9032 37.125 42.625V34.375C37.125 32.0968 35.2782 30.25 33 30.25Z" fill="#C05331" />
                                <path d="M60.5 30.25H57.75C55.4718 30.25 53.625 32.0968 53.625 34.375V42.625C53.625 44.9032 55.4718 46.75 57.75 46.75H60.5C62.7782 46.75 64.625 44.9032 64.625 42.625V34.375C64.625 32.0968 62.7782 30.25 60.5 30.25Z" fill="#C05331" />
                                <path d="M57.75 35.75C57.3853 35.75 57.0356 35.6051 56.7777 35.3473C56.5199 35.0894 56.375 34.7397 56.375 34.375V26.125C56.375 22.8429 55.0712 19.6953 52.7504 17.3746C50.4297 15.0538 47.2821 13.75 44 13.75C40.7179 13.75 37.5703 15.0538 35.2496 17.3746C32.9288 19.6953 31.625 22.8429 31.625 26.125V34.375C31.625 34.7397 31.4801 35.0894 31.2223 35.3473C30.9644 35.6051 30.6147 35.75 30.25 35.75C29.8853 35.75 29.5356 35.6051 29.2777 35.3473C29.0199 35.0894 28.875 34.7397 28.875 34.375V26.125C28.875 22.1136 30.4685 18.2665 33.305 15.43C36.1415 12.5935 39.9886 11 44 11C48.0114 11 51.8585 12.5935 54.695 15.43C57.5315 18.2665 59.125 22.1136 59.125 26.125V34.375C59.125 34.7397 58.9801 35.0894 58.7223 35.3473C58.4644 35.6051 58.1147 35.75 57.75 35.75Z" fill="#FAF7F5" />
                                <path d="M31.625 28.875H28.875C26.5968 28.875 24.75 30.7218 24.75 33V41.25C24.75 43.5282 26.5968 45.375 28.875 45.375H31.625C33.9032 45.375 35.75 43.5282 35.75 41.25V33C35.75 30.7218 33.9032 28.875 31.625 28.875Z" fill="#F7F7F7" />
                                <path d="M59.125 28.875H56.375C54.0968 28.875 52.25 30.7218 52.25 33V41.25C52.25 43.5282 54.0968 45.375 56.375 45.375H59.125C61.4032 45.375 63.25 43.5282 63.25 41.25V33C63.25 30.7218 61.4032 28.875 59.125 28.875Z" fill="#F7F7F7" />
                                <path d="M35.1451 30.8826C34.5098 30.4611 33.7624 30.2407 33.0001 30.2501H30.2501C29.1561 30.2501 28.1069 30.6847 27.3333 31.4583C26.5597 32.2319 26.1251 33.2811 26.1251 34.3751V42.6251C26.1157 43.3874 26.3361 44.1349 26.7576 44.7701C26.1428 44.4119 25.6334 43.8979 25.2809 43.2798C24.9285 42.6617 24.7453 41.9616 24.7501 41.2501V33.0001C24.7501 31.9061 25.1847 30.8569 25.9583 30.0833C26.7319 29.3097 27.7811 28.8751 28.8751 28.8751H31.6251C32.3366 28.8703 33.0367 29.0535 33.6548 29.4059C34.2729 29.7584 34.7869 30.2678 35.1451 30.8826ZM62.6451 30.8826C62.0098 30.4611 61.2624 30.2407 60.5001 30.2501H57.7501C56.6561 30.2501 55.6069 30.6847 54.8333 31.4583C54.0597 32.2319 53.6251 33.2811 53.6251 34.3751V42.6251C53.6157 43.3874 53.8361 44.1349 54.2576 44.7701C53.6428 44.4119 53.1334 43.8979 52.7809 43.2798C52.4284 42.6617 52.2453 41.9616 52.2501 41.2501V33.0001C52.2501 31.9061 52.6847 30.8569 53.4583 30.0833C54.2319 29.3097 55.2811 28.8751 56.3751 28.8751H59.1251C59.8366 28.8703 60.5367 29.0535 61.1548 29.4059C61.7728 29.7584 62.2869 30.2678 62.6451 30.8826Z" fill="#AEAEAE" />
                            </svg>

                            <h2>Customer Service</h2>
                            <p class="secondary-text-color">Dukungan customer service yang responsif </p>
                        </div>
                        <div class="text-treatment">
                            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M75.625 77C75.625 79.188 74.7558 81.2864 73.2086 82.8336C71.6614 84.3808 69.563 85.25 67.375 85.25H55C53.1766 85.25 51.4279 84.5257 50.1386 83.2363C48.8493 81.947 48.125 80.1984 48.125 78.375H39.875C39.875 80.1984 39.1506 81.947 37.8613 83.2363C36.572 84.5257 34.8233 85.25 33 85.25H20.625C19.3152 85.2541 18.0233 84.9463 16.8562 84.3521C15.689 83.7579 14.68 82.8943 13.9128 81.8328C13.1456 80.7713 12.6421 79.5424 12.444 78.2477C12.2459 76.9531 12.3589 75.6298 12.7737 74.3875L20.3225 50.875C21.1989 48.0882 22.9401 45.6529 25.2938 43.9223C27.6474 42.1917 30.4911 41.2557 33.4125 41.25H38.6787C38.9863 42.427 39.6755 43.4688 40.6384 44.2123C41.6012 44.9559 42.7834 45.3592 44 45.3592C45.2165 45.3592 46.3987 44.9559 47.3616 44.2123C48.3244 43.4688 49.0136 42.427 49.3212 41.25H54.5875C57.5089 41.2557 60.3525 42.1917 62.7062 43.9223C65.0598 45.6529 66.801 48.0882 67.6775 50.875L75.2262 74.3875C75.4961 75.2318 75.6307 76.1136 75.625 77Z" fill="#FFCF39" />
                                <path d="M60.5 49.5H27.5V78.375H60.5V49.5Z" fill="#FF8A65" />
                                <path d="M39.875 78.375C39.875 80.1984 39.1507 81.947 37.8614 83.2364C36.572 84.5257 34.8234 85.25 33 85.25H20.625V75.625C20.625 73.8016 21.3493 72.053 22.6386 70.7636C23.928 69.4743 25.6766 68.75 27.5 68.75V78.375H39.875Z" fill="#F3D9B2" />
                                <path d="M67.375 75.625V85.25H55C53.1766 85.25 51.428 84.5257 50.1386 83.2364C48.8493 81.947 48.125 80.1984 48.125 78.375H60.5V68.75C62.3234 68.75 64.072 69.4743 65.3614 70.7636C66.6507 72.053 67.375 73.8016 67.375 75.625Z" fill="#F3D9B2" />
                                <path d="M49.5002 37.3457V39.8757C49.5043 40.3401 49.4442 40.8028 49.3214 41.2507C49.0138 42.4277 48.3247 43.4695 47.3618 44.213C46.3989 44.9566 45.2167 45.3599 44.0002 45.3599C42.7837 45.3599 41.6015 44.9566 40.6386 44.213C39.6757 43.4695 38.9866 42.4277 38.6789 41.2507C38.5562 40.8028 38.4961 40.3401 38.5002 39.8757V37.3457C40.2337 38.1077 42.1066 38.5012 44.0002 38.5012C45.8938 38.5012 47.7667 38.1077 49.5002 37.3457Z" fill="#F3D9B2" />
                                <path d="M57.75 19.25V24.75C57.7486 27.4242 56.9674 30.04 55.5021 32.2771C54.0368 34.5141 51.951 36.2753 49.5 37.345C47.7665 38.107 45.8936 38.5005 44 38.5005C42.1064 38.5005 40.2335 38.107 38.5 37.345C36.049 36.2753 33.9632 34.5141 32.4979 32.2771C31.0326 30.04 30.2514 27.4242 30.25 24.75V19.25C30.8904 20.1038 31.7208 20.7969 32.6754 21.2742C33.63 21.7515 34.6827 22 35.75 22H52.25C53.1534 22.0016 54.0483 21.8251 54.8835 21.4807C55.7187 21.1362 56.4779 20.6305 57.1175 19.9925C57.3468 19.7613 57.5582 19.5131 57.75 19.25Z" fill="#FFCF39" />
                                <path d="M59.1249 15.125H28.8749C28.8652 13.1485 29.3372 11.1994 30.2499 9.44625C30.8303 8.31219 31.5868 7.27728 32.4911 6.38C33.6408 5.2289 35.0062 4.31579 36.5091 3.69292C38.012 3.07004 39.623 2.74962 41.2499 2.75H46.7499C49.0214 2.7491 51.2493 3.37342 53.1896 4.55455C55.1298 5.73568 56.7075 7.42805 57.7499 9.44625C58.6626 11.1994 59.1346 13.1485 59.1249 15.125Z" fill="#FF8A65" />
                                <path d="M59.1249 15.125C59.129 15.6483 59.069 16.1701 58.9462 16.6788C58.7305 17.6097 58.3231 18.4854 57.7499 19.25C57.5582 19.5131 57.3467 19.7613 57.1174 19.9925C56.4778 20.6305 55.7187 21.1362 54.8835 21.4807C54.0483 21.8251 53.1534 22.0016 52.2499 22H35.75C34.1968 21.9998 32.6895 21.4737 31.4736 20.5075C30.2576 19.5412 29.4047 18.1917 29.0537 16.6788C28.9309 16.1701 28.8709 15.6483 28.875 15.125H59.1249Z" fill="#D8613B" />
                                <path d="M61.875 20.6259V22.0009C61.875 23.095 61.4404 24.1442 60.6668 24.9178C59.8932 25.6913 58.844 26.1259 57.75 26.1259V19.2509C58.3231 18.4863 58.7305 17.6106 58.9462 16.6797C59.7931 16.9363 60.535 17.4585 61.0624 18.1691C61.5898 18.8797 61.8747 19.741 61.875 20.6259Z" fill="#CBAC4B" />
                                <path d="M30.25 19.2509V26.1259C29.156 26.1259 28.1068 25.6913 27.3332 24.9178C26.5596 24.1442 26.125 23.095 26.125 22.0009V20.6259C26.1253 19.741 26.4102 18.8797 26.9376 18.1691C27.465 17.4585 28.2069 16.9363 29.0537 16.6797C29.2695 17.6106 29.6769 18.4863 30.25 19.2509Z" fill="#CBAC4B" />
                                <path d="M48.125 49.5H39.875V57.75H48.125V49.5Z" fill="#FFCF39" />
                            </svg>

                            <h2>Free Pickup Delivery</h2>
                            <p class="secondary-text-color">Pickup delivery gratis dengan jarak maksimal 5 km </p>
                        </div>
                        <div class="text-treatment">
                            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_619_5762)">
                                    <path d="M62.3492 50.9844L72.4555 82.0044L61.1255 78.4569L54.0717 87.9994L44.7148 59.2825" fill="#FF8A65" />
                                    <path d="M24.8669 51.6582L15.5444 82.0045L26.8744 78.457L33.9282 87.9995L42.6732 59.427" fill="#FF8A65" />
                                    <path d="M46.7979 2.19918L49.3829 0.734802C50.0446 0.360026 50.7749 0.121974 51.5303 0.0347704C52.2858 -0.0524335 53.051 0.0129868 53.7807 0.22715C54.5104 0.441313 55.1897 0.799856 55.7782 1.28151C56.3667 1.76316 56.8524 2.35811 57.2067 3.03105L58.5817 5.66417C59.0379 6.53123 59.7108 7.26548 60.5348 7.79555C61.3588 8.32561 62.306 8.63347 63.2842 8.68917L66.2542 8.85417C67.0154 8.89715 67.7601 9.09297 68.444 9.42996C69.128 9.76695 69.737 10.2382 70.2349 10.8156C70.7327 11.3931 71.1092 12.0648 71.3419 12.7909C71.5746 13.5169 71.6587 14.2824 71.5892 15.0417L71.3348 18.0048C71.2502 18.9812 71.4197 19.963 71.8269 20.8545C72.2341 21.746 72.8651 22.5169 73.6585 23.0923L76.0648 24.8385C76.6797 25.2847 77.1989 25.8497 77.5915 26.5001C77.9841 27.1505 78.2422 27.8731 78.3506 28.6251C78.4589 29.3771 78.4153 30.1431 78.2222 30.8779C78.0292 31.6127 77.6906 32.3013 77.2267 32.9029L75.4117 35.2542C74.8126 36.0295 74.4243 36.9466 74.2845 37.9164C74.1448 38.8862 74.2583 39.8756 74.6142 40.7885L75.6935 43.5385C75.9695 44.2463 76.1006 45.0022 76.0792 45.7615C76.0577 46.5208 75.8842 47.2681 75.5688 47.9591C75.2534 48.6502 74.8026 49.2709 74.243 49.7846C73.6834 50.2983 73.0265 50.6945 72.311 50.9498L69.5129 51.9467C68.5891 52.2751 67.766 52.8372 67.1239 53.5781C66.4817 54.3191 66.0423 55.2136 65.8485 56.1748L65.2642 59.0898C65.114 59.8368 64.815 60.546 64.385 61.175C63.955 61.8041 63.4028 62.3402 62.7613 62.7514C62.1198 63.1626 61.4022 63.4405 60.651 63.5685C59.8999 63.6966 59.1306 63.6721 58.3892 63.4967L55.4948 62.8092C54.54 62.5857 53.5437 62.6132 52.6027 62.8891C51.6618 63.165 50.8083 63.6799 50.1254 64.3835L48.0629 66.5148C47.5336 67.0597 46.9004 67.4929 46.2007 67.7886C45.501 68.0844 44.7491 68.2368 43.9895 68.2368C43.2298 68.2368 42.4779 68.0844 41.7782 67.7886C41.0785 67.4929 40.4453 67.0597 39.916 66.5148L37.8535 64.3835C37.1706 63.6799 36.3172 63.165 35.3762 62.8891C34.4353 62.6132 33.4389 62.5857 32.4842 62.8092L29.5898 63.4967C28.8483 63.6721 28.0791 63.6966 27.3279 63.5685C26.5768 63.4405 25.8591 63.1626 25.2176 62.7514C24.5761 62.3402 24.0239 61.8041 23.5939 61.175C23.1639 60.546 22.865 59.8368 22.7148 59.0898L22.1304 56.1748C21.9366 55.2136 21.4972 54.3191 20.8551 53.5781C20.2129 52.8372 19.3899 52.2751 18.466 51.9467L15.6679 50.9498C14.9525 50.6945 14.2955 50.2983 13.7359 49.7846C13.1764 49.2709 12.7255 48.6502 12.4101 47.9591C12.0947 47.2681 11.9212 46.5208 11.8998 45.7615C11.8783 45.0022 12.0095 44.2463 12.2854 43.5385L13.3648 40.7885C13.7206 39.8756 13.8341 38.8862 13.6944 37.9164C13.5546 36.9466 13.1664 36.0295 12.5673 35.2542L10.7523 32.9029C10.2883 32.3013 9.94977 31.6127 9.75671 30.8779C9.56366 30.1431 9.52001 29.3771 9.62835 28.6251C9.73669 27.8731 9.99482 27.1505 10.3874 26.5001C10.7801 25.8497 11.2992 25.2847 11.9141 24.8385L14.3204 23.0923C15.1138 22.5169 15.7448 21.746 16.152 20.8545C16.5592 19.963 16.7288 18.9812 16.6441 18.0048L16.3898 15.0417C16.3203 14.2824 16.4043 13.5169 16.637 12.7909C16.8697 12.0648 17.2462 11.3931 17.7441 10.8156C18.2419 10.2382 18.851 9.76695 19.5349 9.42996C20.2188 9.09297 20.9636 8.89715 21.7248 8.85417L24.6948 8.68917C25.673 8.63347 26.6201 8.32561 27.4441 7.79555C28.2681 7.26548 28.941 6.53123 29.3973 5.66417L30.7723 3.03105C31.1264 2.35535 31.613 1.75792 32.2031 1.27443C32.7932 0.790941 33.4747 0.431303 34.2068 0.216986C34.9389 0.00266771 35.7068 -0.061936 36.4644 0.0270309C37.2221 0.115998 37.9541 0.356711 38.6167 0.734802L41.2017 2.19918C42.0551 2.68241 43.0191 2.9364 43.9998 2.9364C44.9805 2.9364 45.9445 2.68241 46.7979 2.19918Z" fill="#FFCF39" />
                                    <path d="M44.0002 48.2563C51.8029 48.2563 58.1283 41.9309 58.1283 34.1281C58.1283 26.3254 51.8029 20 44.0002 20C36.1974 20 29.8721 26.3254 29.8721 34.1281C29.8721 41.9309 36.1974 48.2563 44.0002 48.2563Z" fill="white" />
                                    <path d="M44.0002 20C46.7945 20 49.526 20.8286 51.8494 22.381C54.1727 23.9334 55.9836 26.14 57.0529 28.7215C58.1222 31.3031 58.402 34.1438 57.8569 36.8844C57.3117 39.625 55.9662 42.1424 53.9903 44.1182C52.0145 46.0941 49.4971 47.4397 46.7565 47.9848C44.0159 48.5299 41.1752 48.2501 38.5936 47.1808C36.012 46.1115 33.8055 44.3007 32.2531 41.9773C30.7007 39.6539 29.8721 36.9224 29.8721 34.1281C29.8721 30.3811 31.3606 26.7876 34.0101 24.138C36.6597 21.4885 40.2532 20 44.0002 20ZM44.0002 14.5C40.1181 14.5 36.3232 15.6512 33.0954 17.8079C29.8676 19.9647 27.3518 23.0302 25.8662 26.6168C24.3806 30.2033 23.9919 34.1499 24.7492 37.9574C25.5066 41.7649 27.376 45.2623 30.121 48.0073C32.8661 50.7524 36.3635 52.6218 40.171 53.3791C43.9784 54.1365 47.925 53.7478 51.5116 52.2622C55.0981 50.7766 58.1636 48.2608 60.3204 45.0329C62.4772 41.8051 63.6283 38.0102 63.6283 34.1281C63.6229 28.9241 61.5532 23.9348 57.8734 20.255C54.1936 16.5752 49.2042 14.5055 44.0002 14.5Z" fill="#FFB74D" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_619_5762">
                                        <rect width="88" height="88" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <h2>Garansi Layanan</h2>
                            <p class="secondary-text-color">Jaminan garansi apabila terjadi kerusakan selama layanan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="detail-service-section" id="about-section">
        <div class="container">
            <div class="row">
                <div>
                    <h1 class="text-center mb-15">Layanan Kami</h1>
                    <p class="text-center">Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan anda
                        yang akan dikerjakan oleh tim kami yang sudah berpengalaman dan professional.</p>
                </div>
            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="middle-button"><a href="<?= base_url("home/layanan") ?>" class="btn-black">Lihat Selengkapnya <i style="font-size:12px;margin-left:20px;" class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>

    </section>

    <section class="about-us-section" id="about-section">
        <div class="container">
            <h1 class="text-about-us my-3">Tentang Kami</h1>
            <div class="row  justify-content-between">
                <div class="col-md-6  about-left">
                    <img class="img-fluid bg-radius" src="<?= asset("shoes/") ?>assets/front/img/icon-founder.jpg" alt="founder shoes and care" width="568px" height="398px">
                </div>
                <div class="col-md-6 secondary-text-color about-right">
                    <h1 class="secondary-text-color">Shoes and Care</h1>

                    <div>
                        <p class="secondary-text-color" style="text-align: justify;margin-bottom:2rem;">
                            merupakan jasa perawatan premium sepatu dengan pelayanan terbaik di Indonesia. Untuk melayani pelanggan,
                            saat ini Shoes and Care sudah memiliki lebih dari 5 layanan terbaik.
                        </p>
                    </div>
                </div>
            </div>

    </section>

    <?php $this->load->view("home/template/footer") ?>
    <?php $this->load->view("home/template/js") ?>

</body>

</html>
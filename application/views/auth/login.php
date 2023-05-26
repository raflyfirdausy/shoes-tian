<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset("img/logo.png") ?>">
    <title>Login | <?= env("APP_SIMPLE_NAME") ?></title>
    <link href="<?= template_nice_admin() ?>dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= asset("img/bg.jpg") ?>) no-repeat; background-size: cover;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img height="150" src="<?= asset("img/logo.png") ?>" alt="logo" /></span>
                        <h4 class="font-medium m-b-20">Masuk Aplikasi</h4>
                        <?php if ($this->session->flashdata("gagal")) : ?>
                            <div class="alert bg-danger alert-dismissible fade show" role="alert">
                                <strong class="text-white">Gagal !</strong>
                                <br>
                                <span class="text-white"><?= $this->session->flashdata("gagal") ?></span>
                                <button type="button" class="close" style="position: absolute;top: 0;right: 0;padding: 0.75rem 1.25rem;background-color:transparent;border:0;font-size: 1.5rem;font-size: 1.5rem;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;opacity: .5;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata("sukses")) : ?>
                            <div class="alert bg-success alert-dismissible fade show" role="alert">
                                <strong class="text-white">Sukses !</strong>
                                <br>
                                <span class="text-white"><?= $this->session->flashdata("sukses") ?></span>
                                <button type="button" class="close" style="position: absolute;top: 0;right: 0;padding: 0.75rem 1.25rem;background-color:transparent;border:0;font-size: 1.5rem;font-size: 1.5rem;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;opacity: .5;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <hr>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="<?= $URL_LOGIN ?>" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input name="email" class="form-control form-control-lg" type="email" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input name="password" class="form-control form-control-lg" type="password" required placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">MASUK</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-12 text-center ">
                                        Belum punya akun ? <a href="<?= base_url("auth/register") ?>" class="text-info m-l-5 "><b>Daftar disini</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= template_nice_admin() ?>assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="<?= template_nice_admin() ?>assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="<?= template_nice_admin() ?>assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $('[data-toggle="tooltip "]').tooltip();
        $(".preloader ").fadeOut();
    </script>
</body>

</html>
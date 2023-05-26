<div class="container-fluid">
    <div class="row el-element-overlay">

        <?php foreach ($paket as $p) : ?>
            <div class="col-md-3">
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
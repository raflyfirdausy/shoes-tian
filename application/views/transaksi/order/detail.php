<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="<?= back() ?>" type="button" class="btn btn-primary float-left"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('transaksi/order/detail/update') ?>" id="form_detail" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Kode Transaksi </label>
                            <input readonly type="text" class="form-control" name="kode_transaksi" id="kode_transaksi" value="<?= $transaksi["kode_transaksi"] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Tanggal Pemesanan </label>
                            <input readonly type="text" class="form-control" name="tanggal" id="tanggal" value="<?= $transaksi["tanggal"] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php
                            $statusTransaksi = $transaksi["status_transaksi"];
                            $today      = new DateTime('');
                            $expired    = $transaksi["batas_pembayaran"] ? new DateTime($transaksi["batas_pembayaran"]) : $now;
                            if ($today->format("Y-m-d H:i:s") > $expired->format("Y-m-d H:i:s")) {
                                $statusTransaksi = "EXPIRED";
                            }
                            ?>
                            <label class="mb-0 control-label"> Status Transaksi </label>
                            <input readonly type="text" class="form-control" name="status_transaksi" id="status_transaksi" value="<?= $statusTransaksi ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Status Bayar </label>
                            <input readonly type="text" class="form-control" name="status_bayar" id="status_bayar" value="<?= $transaksi["status_bayar"] ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Layanan</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $transaksi["detail"]["nama"] ?></td>
                                    <td><?= $transaksi["detail"]["jumlah"] ?></td>
                                    <td>Rp <?= Rupiah3($transaksi["detail"]["harga"]) ?></td>
                                    <td>Rp <?= Rupiah3($transaksi["detail"]["harga"] * $transaksi["detail"]["jumlah"]) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Batas Pembayaran </label>
                            <input readonly type="text" class="form-control" name="status_transaksi" id="status_transaksi" value="<?= $transaksi["batas_pembayaran"] ? datetime_indo($transaksi["batas_pembayaran"], TRUE) : "" ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Keterangan </label>
                            <textarea <?= $this->session->userdata(SESSION)["role"] == USER ? "" : "disabled" ?> name="keterangan" class="form-control"><?= $transaksi["keterangan"] ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if ($this->session->userdata(SESSION)["role"] == USER) : $enable = TRUE; ?>
                                <label class="mb-0 control-label"> Pilih Bank Transfer </label>
                            <?php else : $enable = FALSE; ?>
                                <label class="mb-0 control-label"> Bank Transfer </label>
                            <?php endif ?>
                            <select <?= $enable ? "" : "disabled" ?> style="width:100%" class="form-control select2" name="id_bank" id="id_bank">
                                <option value="">Pilih Bank</option>
                                <?php foreach ($bank as $b) : ?>
                                    <option <?= $transaksi["id_bank"] == $b["id"] ? "selected" : "" ?> value="<?= $b["id"] ?>"><?= $b["norek"] . " (" . $b["bank"] . " a.n " . $b["atas_nama"] . ")" ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <?php if ($this->session->userdata(SESSION)["role"] == USER) : ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="mb-0 control-label"> Upload Bukti Transfer </label>
                                <input accept="image/*" type="file" class="form-control" name="bukti_bayar" id="bukti_bayar">
                                <small class="text-info">File Accept : PNG, JPG, JPEG</small>
                            </div>
                        </div>
                    <?php endif ?>

                    <?php if (!empty($transaksi["bukti_bayar"])) : ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a target="_blank" href="<?= base_url(LOKASI_BUKTI . $transaksi["bukti_bayar"]) ?>" type="button" class="btn btn-md btn-primary"> Lihat Bukti Transfer </a>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a target="_blank" href="#" type="button" class="btn btn-md disabled btn-primary"> Lihat Bukti Transfer (BELUM ADA) </a>
                            </div>
                        </div>
                    <?php endif ?>



                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="id_data" value="<?= $transaksi["id"] ?>">

                        <?php if ($this->session->userdata(SESSION)["role"] == USER) : ?>
                            <?php if ($transaksi["status_transaksi"] == STATUS_BOOKING) : ?>
                                <?php if ($statusTransaksi === "EXPIRED") : ?>
                                    <button disabled type="submit" class="btn btn-md btn-success">EXPIRED</button>
                                    <button type="button" class="btn btn-md btn-danger" onclick="batalkanPesanan()"> Batalkan Pemesanan </button>
                                <?php else : ?>
                                    <button type="submit" class="btn btn-md btn-success"> <?= $statusTransaksi == "EXPIRED" ? "EXPIRED" : "Simpan Bukti Pembayaran" ?> </button>
                                    <button type="button" class="btn btn-md btn-danger" onclick="batalkanPesanan()"> Batalkan Pemesanan </button>
                                <?php endif ?>
                            <?php else : ?>
                                <button disabled type="button" class="btn btn-md btn-success"> Simpan Bukti Pembayaran </button>
                                <button disabled type="button" class="btn btn-md btn-danger"> Batalkan Pemesanan </button>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const batalkanPesanan = () => {
        Swal.fire({
                type: 'question',
                title: 'Peringatan',
                html: 'Apakah kamu akan membatalkan orderan ini ?',
                showCancelButton: true,
                confirmButtonText: 'Ya, batalkan',
                cancelButtonText: "Tidak"
            })
            .then((response) => {
                if (response.value) {
                    prosesHapus()
                }
            })
    }

    const prosesHapus = () => {
        Swal.fire({
            title: 'Mohon Tunggu Beberapa Saat',
            html: 'Proses membatalkan orderan',
            onBeforeOpen: () => {
                Swal.showLoading()
                let _form = $("#form_detail")
                let _url = "<?= base_url("transaksi/order/detail/batal_proses") ?>"
                $.ajax({
                    type: "POST",
                    url: _url,
                    data: _form.serialize(),
                    dataType: "JSON",
                    success: function(result) {
                        if (result["code"] == 200) {
                            Swal.close();
                            Swal.fire({
                                    type: 'success',
                                    customClass: 'swal-custom',
                                    title: 'Berhasil!',
                                    html: '<pre>' + JSON.stringify(result.message, null, " ").replace(/{|}|,|"/g, "") + '</pre>',
                                    confirmButtonText: 'Tutup',
                                })
                                .then((response) => {
                                    window.location = "<?= current_url() ?>"
                                })
                        } else {
                            Swal.fire({
                                type: 'info',
                                customClass: 'swal-custom',
                                title: 'Info',
                                html: '<pre>' + JSON.stringify(result.message, null, " ").replace(/{|}|,|"/g, "") + '</pre>',
                                confirmButtonText: 'Tutup',
                            })
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        Swal.fire("Gagal", xhr.responseText, "error")
                    }
                });
            }
        })
    }

    $("#form_detail").submit(e => {
        e.preventDefault()
        simpanPesanan()
    })

    const simpanPesanan = () => {
        Swal.fire({
                type: 'question',
                title: 'Peringatan',
                html: 'Apakah kamu akan menyimpan data pemesanan ini ?',
                showCancelButton: true,
                confirmButtonText: 'Ya, Simpan',
                cancelButtonText: "Tidak"
            })
            .then((response) => {
                if (response.value) {
                    prosesSimpan()
                }
            })
    }

    const prosesSimpan = () => {
        Swal.fire({
            title: 'Mohon Tunggu Beberapa Saat',
            html: 'Proses menyimpan orderan',
            onBeforeOpen: () => {
                Swal.showLoading()
                let _form = $("#form_detail")
                var formData = new FormData(_form[0]);
                let _url = "<?= base_url("transaksi/order/detail/simpan_proses") ?>"
                $.ajax({
                    type: "POST",
                    url: _url,
                    data: formData,
                    contentType: false, //this is requireded please see answers above
                    processData: false, //this is requireded please see answers above
                    dataType: "JSON",
                    success: function(result) {
                        if (result["code"] == 200) {
                            Swal.close();
                            Swal.fire({
                                    type: 'success',
                                    customClass: 'swal-custom',
                                    title: 'Berhasil!',
                                    html: '<pre>' + JSON.stringify(result.message, null, " ").replace(/{|}|,|"/g, "") + '</pre>',
                                    confirmButtonText: 'Tutup',
                                })
                                .then((response) => {
                                    window.location = "<?= current_url() ?>"
                                })
                        } else {
                            Swal.fire({
                                type: 'info',
                                customClass: 'swal-custom',
                                title: 'Info',
                                html: '<pre>' + JSON.stringify(result.message, null, " ").replace(/{|}|,|"/g, "") + '</pre>',
                                confirmButtonText: 'Tutup',
                            })
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        Swal.fire("Gagal", xhr.responseText, "error")
                    }
                });
            }
        })
    }
</script>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="<?= back() ?>" type="button" class="btn btn-primary float-left"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('transaksi/order/tambah/add') ?>" id="form_profile" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Tanggal Pemesanan<span style="color: red">*</span> </label>
                            <input type="date" min="<?= date("Y-m-d") ?>" class="form-control" value="" name="tanggal" id="tanggal" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Pilih Paket Layanan </label>
                            <select style="width:100%" class="form-control select2" name="id_paket" id="id_paket">
                                <option value="">Pilih Jenis Paket Layanan</option>
                                <?php foreach ($paket as $p) : ?>
                                    <option data-harga="<?= $p["harga"] ?>" value="<?= $p["id"] ?>"><?= $p["nama"] . " (Rp " . Rupiah3($p["harga"]) . ")" ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Jumlah Pemesanan <span style="color: red">*</span> </label>
                            <input type="number" min="1" class="form-control" name="jumlah" id="jumlah" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Total Pemesanan (Rupiah)</label>
                            <input readonly type="text" class="form-control" name="totalRp" id="totalRp">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Catatan </label>
                            <textarea name="keterangan" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-md btn-success" onclick="tambahPemesanan()"> Tambah Pemesanan </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#id_paket").change(e => {
        calculate()
    })

    $("#jumlah").keyup(e => {
        calculate()
    })

    const calculate = () => {
        let harga = $('#id_paket option:selected').attr('data-harga')
        let jumlah = $("#jumlah").val()
        let total = harga * jumlah
        $("#totalRp").val(total)
    }

    function tambahPemesanan() {
        Swal.fire({
            title: 'Mohon Tunggu Beberapa Saat',
            html: 'Proses ubah profile',
            onBeforeOpen: () => {
                Swal.showLoading()
                let _form = $("#form_profile")
                let _url = _form.attr('action')
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
                                    confirmButtonText: 'Lanjutkan Pembayaran',
                                })
                                .then((response) => {
                                    window.location = "<?= base_url("transaksi/order/detail/kode/") ?>" + result.data.kode
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
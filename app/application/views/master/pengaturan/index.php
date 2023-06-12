<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="<?= back() ?>" type="button" class="btn btn-primary float-left"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('master/pengaturan/ubah') ?>" id="form_profile" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> No Whatsapp <span style="color: red">*</span> </label>
                            <input type="phone" class="form-control" value="<?= $data['nowa'] ?>" name="nowa" id="nowa" required>
                            <small class="text-info">Gunakan Format 62xxxx</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0 control-label"> Aktifkan Konsultasi ? </label>
                            <select style="width:100%" class="form-control select2" name="enable_konsultasi" id="enable_konsultasi">
                                <option value="">Pilih</option>
                                <option value="YA" <?= $data['enable_konsultasi'] == "YA" ? "selected" : "" ?>>YA</option>
                                <option value="TIDAK" <?= $data['enable_konsultasi'] == "TIDAK" ? "selected" : "" ?>>TIDAK</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-md btn-success" onclick="ubahProfile()"> Simpan </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function ubahProfile() {
        Swal.fire({
            title: 'Mohon Tunggu Beberapa Saat',
            html: 'Proses ubah pengaturan no whatsapp',
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
                                    confirmButtonText: 'Tutup',
                                })
                                .then((response) => {
                                    window.location = "<?= current_url() ?>";
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
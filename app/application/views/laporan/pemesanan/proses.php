<?php
$tampil = $this->input->get("jenis_laporan");

$tanggal = $this->input->get('tanggal');
$bulan_tanggal = $this->input->get('bulan_tanggal');

$jenis_laporan  = $this->input->get("jenis_laporan");
$range_awal     = $this->input->get('range_awal');
$range_akhir    = $this->input->get('range_akhir');
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="<?= back() ?>" type="button" class="btn btn-primary float-left"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Range Awal (Tanggal)</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input autocomplete="off" type="text" class="form-control float-right" value="<?= $tampil == 'PER_HARI' ? $this->input->get('range_awal') : '' ?>" name="awal_hari" id="awal_hari">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Range Akhir (Tanggal)</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input autocomplete="off" type="text" class="form-control float-right" value="<?= $tampil == 'PER_HARI' ? $this->input->get('range_akhir') : '' ?>" name="akhir_hari" id="akhir_hari">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-md btn-primary" style="margin-top: 10px; width:100%" onclick="lihatLaporan()">
                        LIHAT LAPORAN
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body table-responsive">
            <table id="table_data" class="table nowrap table-bordered table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Tanggal</th>
                        <th colspan="2">Diproses</th>
                      
                    </tr>
                    <tr>
                        <?php for ($i = 0; $i < 1; $i++) : ?>
                            <th>Total</th>
                            <th>Nominal</th>
                        <?php endfor ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $d) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d["tanggal"] ?></td>
                           

                            <td><?= $d["diproses"]["total_transaksi"] ?></td>
                            <td><?= $d["diproses"]["total_rp"] ?></td>

                         
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot style="background-color: black; color:white">
                    <th colspan="2">TOTAL</th>
                   
                    <th><?= $total["diproses"]["total_transaksi"] ?></th>
                    <th><?= $total["diproses"]["total_rp"] ?></th>

                  
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script src="<?= lte("plugins/moment/moment.min.js") ?>"></script>
<script src="<?= lte("plugins/daterangepicker/daterangepicker.js") ?>"></script>
<link href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
    // $("#table_data").DataTable({})
</script>

<script>
    $("#awal_hari").keypress(function(event) {
        event.preventDefault();
    });

    $("#akhir_hari").keypress(function(event) {
        event.preventDefault();
    });

    $('#awal_hari').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
    });

    $('#akhir_hari').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
    });

    const lihatLaporan = () => {
        let awalHari = $('#awal_hari').val()
        let akhirHari = $('#akhir_hari').val()

        if (awalHari == "") {
            return Swal.fire({
                title: 'Oopss',
                text: "Silahkan pilih tanggal awal terlebih dahulu",
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Oke Siap !'
            })
        }

        if (akhirHari == "") {
            return Swal.fire({
                title: 'Oopss',
                text: "Silahkan pilih tanggal akhir terlebih dahulu",
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Oke Siap !'
            })
        }

        window.location = `<?= base_url("laporan/pemesanan?jenis_laporan=PER_HARI") ?>&range_awal=${awalHari}&range_akhir=${akhirHari}`
    }
</script>
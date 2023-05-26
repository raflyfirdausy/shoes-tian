<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends RFL_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            "User_model"                => "user",
            "Paket_model"               => "paket",
            "Transaksi_model"           => "transaksi",
            "TransaksiDetail_model"     => "transaksiDetail",
            "Bank_model"                => "bank"
        ]);

        $configUpload['allowed_types']    = 'jpg|jpeg|png';
        $configUpload['max_size']         = 1024 * 50; //? 5MB
        $configUpload['remove_space']     = TRUE;
        $configUpload['overwrite']        = TRUE;
        $configUpload['encrypt_name']     = TRUE;
        $configUpload['upload_path']      = LOKASI_BUKTI;
        if (!file_exists($configUpload['upload_path'])) {
            mkdir($configUpload['upload_path'], 0777, TRUE);
        }
        $this->configUpload     = $configUpload;
    }

    public function kode($kode = NULL)
    {
        // $id_user            = $this->session->userdata(SESSION)["id"];
        $transaksi          = $this->transaksi->with_detail()->where(["kode_transaksi" => $kode])->get();
        if (!$transaksi) {
            redirect(base_url("transaksi/order/riwayat"));
        }

        // d($transaksi);
        $bank               = $this->bank->where(["is_aktif" => "YA"])->get_all();

        $data = [
            "title"         => "Detail Pemesanan",
            "transaksi"     => $transaksi,
            "bank"          => $bank,
            "paket"         => $this->paket->get_all() ?: []
        ];
        // d($data);
        $this->loadRFLView("transaksi/order/detail", $data);
    }

    public function batal_proses()
    {
        $id_data        = $this->input->post("id_data");
        $batal          = $this->transaksi->where(["id" => $id_data])->update(["status_transaksi" => STATUS_DIBATALKAN]);
        if (!$batal) {
            d_error([
                "message"   => "Terjadi kesalahan saat membatalkan pemesanan",
                "data"      => []
            ]);
        }

        d_success([
            "message"   => "Berhasil melakukan pembatalan pemesanan",
            "data"      => []
        ]);
    }

    public function simpan_proses()
    {
        $id_data        = $this->input->post("id_data");
        $id_bank        = $this->input->post("id_bank");
        $keterangan     = $this->input->post("keterangan");

        if (empty($id_bank)) {
            d_error([
                "message"   => "Terjadi kesalahan saat menyimpan pemesanan. Keterangan : Data bank tidak boleh kosong",
                "data"      => []
            ]);
        }

        $data           = [
            "id_bank"       => $id_bank,
            "keterangan"    => $keterangan,
            "status_bayar"  => SUDAH
        ];

        $formNameFile                     = "bukti_bayar";
        if (!empty($_FILES[$formNameFile]["name"])) {
            $this->upload->initialize($this->configUpload);
            $upload     = $this->upload->do_upload($formNameFile);
            if ($upload) {
                $dataUpload             = $this->upload->data();
                $data[$formNameFile]    = $dataUpload["file_name"];
            } else {
                echo json_encode([
                    "code"      => 503,
                    "message"   => "Terjadi kesalahan saat menambahkan data $this->module. Keterangan : " . $this->upload->display_errors("", "")
                ]);
                die;
            }
        } else {
            d_error([
                "message"   => "Terjadi kesalahan saat menyimpan pemesanan. Keterangan : Bukti bayar tidak boleh kosong",
                "data"      => []
            ]);
        }

        $update = $this->transaksi->where(["id" => $id_data])->update($data);
        if (!$update) {
            d_error([
                "message"   => "Terjadi kesalahan saat menyimpan pemesanan",
                "data"      => []
            ]);
        }


        d_success([
            "message"   => "Berhasil menyimpan data pemesanan",
            "data"      => []
        ]);
    }
}

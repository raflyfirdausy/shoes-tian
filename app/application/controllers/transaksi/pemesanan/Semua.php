<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Semua extends RFL_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            "User_model"                => "user",
            "Paket_model"               => "paket",
            "Transaksi_model"           => "transaksi",
            "TransaksiDetail_model"     => "transaksiDetail",
            "TransaksiView_model"       => "vTransaksi",
            "Bank_model"                => "bank"
        ]);

        $this->module           = "Riwayat Transaksi";
        $this->model            = $this->transaksi;
        $this->modelView        = $this->vTransaksi;
        $this->fieldForm        = $this->_getFieldForm();
        // $this->kondisiGetData   = ["id_user" => $this->session->userdata(SESSION)["id"]];
    }

    private function _getFieldForm()
    {
        return [
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "kode_transaksi",
                "name_alias"        => "kode_transaksi",
                "label"             => "Kode Transaksi",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "nama_user",
                "name_alias"        => "nama_user",
                "label"             => "Nama Pelanggan",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "status_transaksi",
                "name_alias"        => "status_transaksi",
                "label"             => "Status Transaksi",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "status_bayar",
                "name_alias"        => "status_bayar",
                "label"             => "Status Bayar",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "bukti_bayar",
                "name_alias"        => "bukti_bayar",
                "label"             => "Bukti Bayar",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "nama_paket",
                "name_alias"        => "nama_paket",
                "label"             => "Nama Paket",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "jumlah",
                "name_alias"        => "jumlah",
                "label"             => "Jumlah",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "harga",
                "name_alias"        => "harga",
                "label"             => "Harga",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
            [
                "col"               => 6,
                "type"              => "text",
                "name"              => "total",
                "name_alias"        => "total",
                "label"             => "Total",
                "numberOnly"        => false,
                "required"          => true,
                "hideFromTable"     => false,
                "hideFromEdit"      => false,
                "hideFromCreate"    => false,
            ],
        ];
    }

    public function index()
    {
        $data = [
            "FIELD_FORM"            => $this->_getFieldForm(),
            "title"                 => $this->module,
            "ENABLE_ADD_BUTTON"     => FALSE
        ];
        $this->loadRFLView("transaksi/pemesanan/semua", $data);
    }

    public function proses($id)
    {
        $this->transaksi->where(["id" => $id])->update(["status_transaksi" => STATUS_DIPROSES]);
        d_success([
            "message"   => "Berhasil melakukan proses booking pemesanan",
            "data"      => []
        ]);
    }

    public function tolak($id)
    {
        $this->transaksi->where(["id" => $id])->update(["status_transaksi" => STATUS_DITOLAK]);
        d_success([
            "message"   => "Berhasil melakukan tolak booking pemesanan",
            "data"      => []
        ]);
    }

    public function selesai($id)
    {
        $this->transaksi->where(["id" => $id])->update(["status_transaksi" => STATUS_SELESAI]);
        d_success([
            "message"   => "Berhasil menyelesaikan pemesanan",
            "data"      => []
        ]);
    }
}

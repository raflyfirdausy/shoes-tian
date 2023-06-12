<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends RFL_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            "User_model"                => "user",
            "Paket_model"               => "paket",
            "Transaksi_model"           => "transaksi",
            "TransaksiDetail_model"     => "transaksiDetail",
        ]);
    }

    public function index()
    {
        $data = [
            "title"         => "Tambah Pemesanan",
            "profile"       => $this->user->where(["id" => $this->session->userdata(SESSION)["id"]])->get(),
            "paket"         => $this->paket->get_all() ?: []
        ];
        // d($data);
        $this->loadRFLView("transaksi/order/tambah", $data);
    }

    public function add()
    {
        $id_user        = $this->session->userdata(SESSION)["id"];
        $tanggal        = $this->input->post("tanggal");
        $id_paket       = $this->input->post("id_paket");
        $jumlah         = $this->input->post("jumlah");
        $keterangan     = $this->input->post("keterangan");

        $config = [
            [
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'id_paket',
                'label' => 'Paket Layanan',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'jumlah',
                'label' => 'Jumlah',
                'rules' => 'required|trim|numeric|min[1]'
            ],
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $_paket     = $this->paket->where(["id" => $id_paket])->get();
            if (!$_paket) {
                d_error([
                    "message"   => "Data paket tidak ditemukan",
                    "data"      => []
                ]);
            }

            $batasPembayaran        = date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s") . ' +1 day'));
            $dataSimpan = [
                "id_user"           => $id_user,
                "kode_transaksi"    => $this->generateKode(),
                "tanggal"           => $tanggal,
                "status_transaksi"  => STATUS_BOOKING,
                "status_bayar"      => BELUM,
                "keterangan"        => $keterangan,
                "batas_pembayaran"  => $batasPembayaran
            ];

            $simpan = $this->transaksi->insert($dataSimpan);

            if (!$simpan) {
                d_error([
                    "message"   => "Gagal mengubah data profil! Silahkan coba lagi",
                    "data"      => []
                ]);
            }

            $detailSimpan = [
                "id_transaksi"  => $simpan,
                "id_paket"      => $_paket["id"],
                "nama"          => $_paket["nama"],
                "jumlah"        => $jumlah,
                "harga"         => $_paket["harga"]
            ];

            $detailInsert = $this->transaksiDetail->insert($detailSimpan);
            if (!$detailInsert) {
                d_error([
                    "message"   => "Data paket tidak ditemukan",
                    "data"      => []
                ]);
            }

            //TODO : 
            d_success([
                "message"   => "Berhasil melakukan booking pemesanan. Silahkan lakukan pembayaran",
                "data"      => [
                    "kode"  => $dataSimpan["kode_transaksi"]
                ]
            ]);
        } else {
            d_error([
                "message"   => $this->form_validation->error_array(),
                "data"      => []
            ]);
        }
    }

    private function generateKode()
    {
        $kode   = generator(5);
        $cek    = $this->transaksi->where(["kode_transaksi" => $kode])->get();
        if ($cek) {
            return $this->generateKode();
        }
        return $kode;
    }
}

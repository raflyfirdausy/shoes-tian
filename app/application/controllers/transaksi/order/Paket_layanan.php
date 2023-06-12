<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_layanan extends RFL_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            "Paket_model"    => "paket"
        ]);
    }

    public function index()
    {
        $data = [
            "title"         => "Paket Layanan",
            "paket"         => $this->paket->get_all()
        ];
        // d($data);
        $this->loadRFLView("transaksi/order/paket_layanan", $data);
    }
}

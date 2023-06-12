<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            "Paket_model"       => "paket",
            "Setting_model"     => "setting"
        ]);
    }

    public function index()
    {
        $data   = [
            "paket"     => $this->paket->limit(3)->order_by("id", "RANDOM")->get_all()
        ];

        // die($this->db->last_query());
        $this->load->view("home/index", $data);
    }

    public function layanan()
    {
        $data   = [
            "paket"     => $this->paket->get_all()
        ];
        $this->load->view("home/layanan", $data);
    }
}

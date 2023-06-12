<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends APP_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "Setting_model"     => "setting"
        ]);
    }

    public function index()
    {
        $data = [
            "title"         => "Pengaturan No Whatsapp",
            "data"          => $this->setting->order_by("id", "DESC")->get()
        ];        
        $this->loadViewBack("master/pengaturan/index", $data);
    }

    public function ubah()
    {
        $config = [
            [
                'field' => 'nowa',
                'label' => 'No WhatsApp',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'enable_konsultasi',
                'label' => 'Enable Konsultasi',
                'rules' => 'trim',
            ],
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $dataSimpan = [
                "nowa"                      => $this->input->post("nowa"),
                "enable_konsultasi"         => $this->input->post("enable_konsultasi"),
            ];

            $simpan = $this->setting->insert($dataSimpan);
            if ($simpan) {
                d_success([
                    "message"   => "Berhasil mengubah data no Whatsapp!",
                    "data"      => []
                ]);
            } else {
                d_error([
                    "message"   => "Gagal mengubah data no Whatsapp! Silahkan coba lagi",
                    "data"      => []
                ]);
            }
        } else {
            d_error([
                "message"   => $this->form_validation->error_array(),
                "data"      => []
            ]);
        }
    }
}

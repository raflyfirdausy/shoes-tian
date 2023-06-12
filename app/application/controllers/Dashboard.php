<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends APP_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "User_model"        => "user",
            "Transaksi_model"   => "transaksi",
            "Paket_model"       => "paket"
        ]);
    }

    public function index()
    {

        $role                   = $this->session->userdata(SESSION)["role"];
        if ($role == ADMIN) {
            $this->admin();
        } else {
            $this->user();
        }
    }

    private function user()
    {
        $view                   = "dashboard/user";
        $id                     = $this->session->userdata(SESSION)["id"];

        $_user                  = $this->user->where(["id" => $id])->get();
        $nama                   = $_user["nama"];

        $totalCustomer          = $this->user->where(["role" => USER])->count_rows();
        $totalOrder             = $this->transaksi->where(["id_user" => $id])->count_rows();
        $totalOrderSelesai      = $this->transaksi->where(["status_transaksi" => STATUS_SELESAI, "id_user" => $id])->count_rows();
        $totalOrderDibatalkan      = $this->transaksi->where(["status_transaksi" => STATUS_DIBATALKAN, "id_user" => $id])->count_rows();

        $data = [
            "title"             => "Hi $nama, selamat datang di aplikasi Shoes and Care",
            "totalCustomer"     => $totalCustomer,
            "totalOrder"        => $totalOrder,
            "totalOrderSelesai" => $totalOrderSelesai,
            "totalOrderDibatalkan" => $totalOrderDibatalkan
        ];
        $this->loadViewBack($view, $data);
    }

    private function admin()
    {
        $view                   = "dashboard/admin";
        $id                     = $this->session->userdata(SESSION)["id"];

        $_user                  = $this->user->where(["id" => $id])->get();
        $nama                   = $_user["nama"];

        $totalCustomer          = $this->user->where(["role" => USER])->count_rows();
        $totalOrder             = $this->transaksi->count_rows();
        $totalOrderSelesai      = $this->transaksi->where(["status_transaksi" => "SELESAI"])->count_rows();
        $totalPaketLayanan      = $this->paket->count_rows();

        $data = [
            "title"             => "Hi $nama, selamat datang di aplikasi Shoes and Care",
            "totalCustomer"     => $totalCustomer,
            "totalOrder"        => $totalOrder,
            "totalOrderSelesai" => $totalOrderSelesai,
            "totalPaketLayanan" => $totalPaketLayanan
        ];
        $this->loadViewBack($view, $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends APP_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "GrafikView_model"  => "grafik",
        ]);
    }

    public function index()
    {
        $jenis_laporan  = $this->input->get('jenis_laporan');
        $range_awal     = $this->input->get('range_awal');
        $range_akhir    = $this->input->get('range_akhir');

        if ($jenis_laporan !== "PER_HARI" || empty($range_awal) || empty($range_akhir)) {
            redirect(base_url('laporan/pemesanan?jenis_laporan=PER_HARI&range_awal=' . date('Y-m-01') . '&range_akhir=' . date('Y-m-t')));
        }

        $firstDateInCurrentMonth    = new DateTime(date($range_awal));
        $lastDateInCurrentMonth     = new DateTime(date($range_akhir));
        $dateRange                  = new DatePeriod($firstDateInCurrentMonth, new DateInterval('P1D'), $lastDateInCurrentMonth);
        $defaultValue               = ["total_transaksi" => "0", "total_rp" => "0"];
        $dataGrafik                 = [];
        $dataTotal                  = [
            "booking"   => [
                "total_transaksi"   => "0",
                "total_rp"          => "0",
            ],
            "diproses"   => [
                "total_transaksi"   => "0",
                "total_rp"          => "0",
            ],
            "selesai"   => [
                "total_transaksi"   => "0",
                "total_rp"          => "0",
            ],
            "ditolak"   => [
                "total_transaksi"   => "0",
                "total_rp"          => "0",
            ],
            "dibatalkan"   => [
                "total_transaksi"   => "0",
                "total_rp"          => "0",
            ],
            "expired"   => [
                "total_transaksi"   => "0",
                "total_rp"          => "0",
            ],
        ];
        foreach ($dateRange as $dr) {
            $date           = $dr->format("Y-m-d");
            $booking        = $this->grafik->fields(["total_transaksi", "total_rp"])->where(["tanggal" => $date, "status_transaksi" => "BOOKING"])->get()       ?: $defaultValue;
            $diproses       = $this->grafik->fields(["total_transaksi", "total_rp"])->where(["tanggal" => $date, "status_transaksi" => "DIPROSES"])->get()      ?: $defaultValue;
            $selesai        = $this->grafik->fields(["total_transaksi", "total_rp"])->where(["tanggal" => $date, "status_transaksi" => "SELESAI"])->get()       ?: $defaultValue;
            $ditolak        = $this->grafik->fields(["total_transaksi", "total_rp"])->where(["tanggal" => $date, "status_transaksi" => "DITOLAK"])->get()       ?: $defaultValue;
            $dibatalkan     = $this->grafik->fields(["total_transaksi", "total_rp"])->where(["tanggal" => $date, "status_transaksi" => "DIBATALKAN"])->get()    ?: $defaultValue;
            $expired        = $this->grafik->fields(["total_transaksi", "total_rp"])->where(["tanggal" => $date, "status_transaksi" => "EXPIRED"])->get()       ?: $defaultValue;

            $item   = [
                "tanggal"       => longdate_indo($date),
                "booking"       => $booking,
                "diproses"      => $diproses,
                "selesai"       => $selesai,
                "ditolak"       => $ditolak,
                "dibatalkan"    => $dibatalkan,
                "expired"       => $expired
            ];
            array_push($dataGrafik, $item);

            $dataTotal["booking"]["total_transaksi"]    += $booking["total_transaksi"];
            $dataTotal["booking"]["total_rp"]           += $booking["total_rp"];

            $dataTotal["diproses"]["total_transaksi"]   += $diproses["total_transaksi"];
            $dataTotal["diproses"]["total_rp"]          += $diproses["total_rp"];

            $dataTotal["selesai"]["total_transaksi"]    += $selesai["total_transaksi"];
            $dataTotal["selesai"]["total_rp"]           += $selesai["total_rp"];

            $dataTotal["ditolak"]["total_transaksi"]    += $ditolak["total_transaksi"];
            $dataTotal["ditolak"]["total_rp"]           += $ditolak["total_rp"];

            $dataTotal["dibatalkan"]["total_transaksi"] += $dibatalkan["total_transaksi"];
            $dataTotal["dibatalkan"]["total_rp"]        += $dibatalkan["total_rp"];

            $dataTotal["expired"]["total_transaksi"]    += $expired["total_transaksi"];
            $dataTotal["expired"]["total_rp"]           += $expired["total_rp"];
        }

        // d([
        //     "data"  => $dataGrafik,
        //     "total" => $dataTotal
        // ]);

        $data = [
            "title"     => "Laporan Pendapatan",
            "data"      => $dataGrafik,
            "total"     => $dataTotal
        ];
        $this->loadViewBack("laporan/pemesanan/index", $data);
    }
}

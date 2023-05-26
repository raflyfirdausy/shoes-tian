<li class="nav-small-cap">
    <i class="mdi mdi-dots-horizontal"></i>
    <span class="hide-menu">DASHBOARD</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">Dashboard</span>
    </a>
</li>

<li class="nav-small-cap">
    <i class="mdi mdi-dots-horizontal"></i>
    <span class="hide-menu">Master Data</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('master/pengaturan') ?>" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">Pengaturan No Whatsapp</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('master/user') ?>" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">User</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('master/rekening') ?>" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">Data Rekening Bank</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('master/paket') ?>" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">Paket Layanan</span>
    </a>
</li>


<li class="nav-small-cap">
    <i class="mdi mdi-dots-horizontal"></i>
    <span class="hide-menu">Transaksi</span>
</li>


<li class="sidebar-item">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">Pemesanan</span>
    </a>
    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item">
            <a href="<?= base_url('transaksi/pemesanan/semua') ?>" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Semua Pemesanan </span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?= base_url('transaksi/pemesanan/belum') ?>" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Pemesanan Belum Diproses</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?= base_url('transaksi/pemesanan/proses') ?>" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Pemesanan Sedang Diproses</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?= base_url('transaksi/pemesanan/selesai') ?>" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Pemesanan Selesai Diproses</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?= base_url('transaksi/pemesanan/ditolak') ?>" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Pemesanan Ditolak</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?= base_url('transaksi/pemesanan/dibatalkan') ?>" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Pemesanan Dibatalkan</span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-small-cap">
    <i class="mdi mdi-dots-horizontal"></i>
    <span class="hide-menu">Laporan</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('laporan/pemesanan') ?>" aria-expanded="false">
        <i class="mdi mdi-code-equal"></i>
        <span class="hide-menu">Data Pemesanan</span>
    </a>
</li>
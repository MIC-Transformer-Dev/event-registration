<nav class="pcoded-navbar menupos-fixed ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="#" class="b-brand">
                <div class="b-bg">
                    ER
                </div>
                <span class="b-title">EVENT REGISTRATION</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Copyright © 2022 <a href='https://mictransformer.com/' title='mictransformer.com' target='_blank'>MIC Transformer</a>, All Rights Reserved. 
					</label>
                </li>
                <li data-username="home" class="nav-item"><a href="<?= site_url('home') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>
                <li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Master Data</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="<?= site_url('mahasiswa') ?>" class="">Data Peserta</a></li>
                        <li class=""><a href="<?= site_url('prodi') ?>" class="">Data Perusahaan</a></li>
                        <li class=""><a href="<?= site_url('konsentrasi') ?>" class="">Data Divisi</a></li>
                        <li class=""><a href="<?= site_url('jenjang') ?>" class="">Data Jabatan</a></li>
                    </ul>
                </li>
                <li data-username="widget statistic data chart" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-mic"></i></span><span class="pcoded-mtext">Data Event</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="<?= site_url('seminar') ?>" class="">Data Event</a></li>
                        <li class=""><a href="<?= site_url('tiket') ?>" class="">Data Tiket</a></li>
                        <li class=""><a href="<?= site_url('pembicara') ?>" class="">Data Pembicara</a></li>
                        <li class=""><a href="<?= site_url('sponsor') ?>" class="">Data Sponsor</a></li>
                    </ul>
                </li>
                <li data-username="pendaftaran" class="nav-item"><a href="<?= site_url('pendaftaran') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Pendaftaran Event</span></a></li>
                <li data-username="extra components session timeout session idle timeout offline" class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-grid"></i></span><span class="pcoded-mtext">Data QR Code</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="<?= site_url('genqr') ?>" class="">Ambil QR Code</a></li>
                        <li class=""><a href="<?= site_url('scan') ?>" class="">Scan QR Code</a></li>
                    </ul>
                </li>
                <li data-username="animations" class="nav-item"><a href="<?= site_url('laporan') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Laporan Presensi</span></a></li>
            </ul>
        </div>
    </div>
</nav>

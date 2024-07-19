<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />
    @yield('styles')
</head>
<body>    <div class="top-navbar">
        <button class="toggle-navbar" id="toggle-navbar" style="background: none; border: none; cursor: pointer;">
            <img src="img/icon-toggle.png" alt="Toggle Navbar" style="width: 45px; height: 45px;">
        </button>
        <h2>Klipaa</h2>
        <div class="profile">
            <img src="img/profil.webp" alt="Profile Picture">
            <button class="logout-btn" onclick="showLogoutPopup()">Log Out</button>
        </div>
    </div>

    <div class="navbar" id="navbar">
        <div class="navbar-content">
            <button class="dropdown-btn">
                <img src="img/entri.png" alt="Home Icon"> Entri data umum
            </button>
            <div class="dropdown-container">
                <a href="#Data Umum Desa">Umum Desa</a>
                <a href="#Data Aparatur Desa">Aparatur Desa</a>
                <a href="#Data Pelaksanaan Kegiatan Anggaran(PKA)">PKA</a>
                <a href="#Data Tim Pelaksana Kegiatan">Tim Pelaksana Kegiatan</a>
                <a href="#Data Pemasok">Penyedia</a>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Front Page</li>
                        </ol>
                        <div class="row">
                        @if(isset($jumlahLaporan))
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><h3>Jumlah Data</h3></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <p class="small text-white stretched-link" href="#">{{ $jumlahLaporan }}</p>
                                    <div class="small text-white"></div>
                                </div>
                            </div>
                        </div>
                        @endif

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h3>Warning Card</h3></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h3>Success Card</h3></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><h3>Danger Card</h3></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div> -->
                        </div>
                        
                        @yield('content')

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Web Dessa 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </footer>
    <script src="js/scripts.js"></script>
</body>
</html>
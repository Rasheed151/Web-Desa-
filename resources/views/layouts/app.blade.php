<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet" />
</head>
<body>  
      <div class="top-navbar">
            <button class="toggle-navbar" id="toggle-navbar" style="background: none; border: none; cursor: pointer;">
                <img src="{{asset('/img/icon-toggle.png')}}" alt="Toggle Navbar" style="width: 45px; height: 45px;">
            </button>
            <h2>Klipaa</h2>
            <div class="profile">
                <a href="{{ route('tes.index') }}">
            <img src="{{ asset('img/profil.webp') }}" alt="Profile Picture">
                </a>
                <button class="logout-btn" onclick="showLogoutPopup()">
                    Log Out 
                </button>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <div class="navbar" id="navbar">
            <div class="navbar-content">
                

                <button class="dropdown-btn">
                    <img src="{{asset('/img/perencanaan.png')}}" alt="Services Icon"> Tahap perencanaan
                </button>
                <div class="dropdown-container">
                    <a href="/beritaAcara">Berita Acara</a>
                    <a href="/rkp">RKP Desa</a>
                    <a href="/pengumuman">Pengumuman Perencanaan</a>
                </div>

            <button class="dropdown-btn">
                <img src="{{asset('/img/persiapan.png')}}" alt="Services Icon"> Tahap persiapan
            </button>
            <div class="dropdown-container">
                <a href="/siapswa">Secara Swakelola</a>
                <a href="/siapsedia">Melalui Penyedia</a>
            </div>

            <button class="dropdown-btn">
                <img src="{{asset('/img/pelaksanaan.png')}}" alt="Services Icon"> Tahap pelaksanaan
            </button>
            <div class="dropdown-container">
                <a href="/laksanaSwa">Secara Swakelola</a>
                <a href="#contact2">Melalui Pembelian Langsung</a>
                <a href="#contact3">Melalui Pembelian Penawaran</a>
                <a href="#contact4">Melalui Lelang</a>
            </div>

                <button class="dropdown-btn">
                    <img src="{{asset('/img/pelaporan.png')}}"  alt="Services Icon"> Pelaporan & Serah terima
                </button>
                <div class="dropdown-container">
                    <a href="#contact1">Contact 1</a>
                    <a href="#contact2">Contact 2</a>
                    <a href="#contact3">Contact 3</a>
                </div>
            </div>
        </div>

    <div class="content">
        @yield('content')
        <form>
            
        </form>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Pt.Klipaa. Semua hak dilindungi.</p>
            <ul class="footer-links">
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>
    </footer>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script>
    function showLogoutPopup() {
        if (confirm("Are you sure you want to log out?")) {
            document.getElementById('logout-form').submit();
        }
    }
    </script>

</body>
</html>
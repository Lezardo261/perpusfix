<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('zan/style.css') }}">
    <style>
        /* Custom styles for the dashboard */
        .wrapper {
            display: flex;
        }

        #sidebar {
            width: 250px;
            min-height: 100vh;
            background: #f8f9fa;
        }

        .main {
            flex-grow: 1;
            padding: 20px;
            background: #ffffff;
        }

        .textheader {
            margin-bottom: 20px;
        }

        .content {
            padding: 20px;
            background: #ffffff;
        }

        .status-box {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .status-box .card {
            flex: 1;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="border rounded expand">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="{{ asset('svg/logo.svg') }}" alt="" class="logo">
                </button>
                <div class="sidebar-logo">
                    <a href="#">PerpusGo</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <img src="pp.png" alt="" width="22" height="22" class="border rounded">
                        <span>Profile</span>
                    </a>
                </li>
                <div class="menu">
                    <li class="sidebar-item active">
                        <a href="#" class="sidebar-link bor">
                            <img src="{{ asset('svg/dash.svg') }}" alt="" class="svg">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <img src="{{ asset('svg/book.svg') }}" alt="" class="svg">
                            <span>Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#" class="sidebar-link">
                            <img src="{{ asset('svg/pinjam.svg') }}" alt="" class="svg">
                            <span>Peminjaman</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="" class="sidebar-link">
                            <img src="{{ asset('svg/pengunjung.svg') }}" alt="" class="svg">
                            <span>Pengunjung</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('pengaturan.profile') }}" class="sidebar-link">
                            <img src="{{ asset('svg/settings.svg') }}" alt="" class="svg">
                            <span>Setting</span>
                        </a>
                    </li>
                </div>
            </ul>
            <div class="sidebar-footer">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{ route('logout') }}" class="sidebar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="{{ asset('svg/logout.svg') }}" alt="" class="svg">
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <div class="text-start textheader border border-top-0 border-start-0 border-end-0 border-bottom-3 lh-sm">
                <h5 class="ps-3 pt-3 headerh">
                    Selamat datang di <span>Perpus</span></h5>
                <p class="headerp ps-3">Halo Super Admin 👋</p>
            </div>
            <div class="status-box">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Dipinjam</h5>
                        <p class="card-text">100 buku</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Tersedia</h5>
                        <p class="card-text">200 buku</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text">100 buku</p>
                    </div>
                </div>
            </div>
            <div class="content border rounded border-0">
                <h5>Daftar Peminjaman</h5>
                <table class="table border">
                    <thead>
                        <tr>
                            <th class="table-no table-light text-center" id="nomor">No</th>
                            <th class="table-nama table-light" id="namatab">Nama</th>
                            <th class="table-buku table-light" id="buku">Buku</th>
                            <th class="table-tanggal table-light" id="tanggal">Tanggal Meminjam</th>
                            <th class="table-sisa table-light" id="sisa">Sisa Waktu</th>
                            <th class="table-aksi table-light" id="aksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Data -->
                        <tr>
                            <td scope="row" class="text-center texttable">1</td>
                            <td class="texttable">Davis Rosser <br><span class="kelas">XI SIA 2</span></td>
                            <td class="texttable">Ayat Ayat Cinta</td>
                            <td class="texttable">14 Feb 2023</td>
                            <td class="texttable text-danger">lewat 1 hari</td>
                            <td><button class="btn btn-primary">Kembalikan</button></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center texttable">2</td>
                            <td class="texttable">Terry Dorwart <br><span class="kelas">XI SIA 2</span></td>
                            <td class="texttable">Dasar Komputer</td>
                            <td class="texttable">15 Feb 2023</td>
                            <td class="texttable text-success">1 hari lagi</td>
                            <td><button class="btn btn-primary">Kembalikan</button></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center texttable">3</td>
                            <td class="texttable">Chance Korsgaard <br><span class="kelas">XI SIA 2</span></td>
                            <td class="texttable">100 Resep Masak Jepang</td>
                            <td class="texttable">15 Feb 2023</td>
                            <td class="texttable text-success">1 hari lagi</td>
                            <td><button class="btn btn-primary">Kembalikan</button></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center texttable">4</td>
                            <td class="texttable">Dulce Siphron <br><span class="kelas">XI SIA 2</span></td>
                            <td class="texttable">Cinta Brontosaurus</td>
                            <td class="texttable">16 Feb 2023</td>
                            <td class="texttable text-success">3 hari lagi</td>
                            <td><button class="btn btn-primary">Kembalikan</button></td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center texttable">5</td>
                            <td class="texttable">Emery Aminoff <br><span class="kelas">XI SIA 2</span></td>
                            <td class="texttable">Pulang</td>
                            <td class="texttable">17 Feb 2023</td>
                            <td class="texttable text-success">4 hari lagi</td>
                            <td><button class="btn btn-primary">Kembalikan</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('zan/script.js') }}"></script>
</body>

</html>

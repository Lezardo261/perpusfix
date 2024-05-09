<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengunjung</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('zan/style.css')}}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="border rounded expand">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="{{asset('svg/logo.svg')}}" alt="" class="logo">
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

                    <li class="sidebar-item ">
                        <a href="#" class="sidebar-link bor">
                            <img src="{{ asset('svg/dash.svg')}}" alt="" class="svg">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <img src="{{asset('svg/book.svg')}}" alt="" class="svg">
                            <span>Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#" class="sidebar-link">
                            <img src="{{ asset('svg/pinjam.svg')}}" alt="" class="svg">
                            <span>Peminjaman</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="#" class="sidebar-link">
                            <img src="{{ asset('svg/pengunjung.svg')}}" alt="" class="svg">
                            <span>Pengunjung</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <img src="{{ asset('svg/settings.svg')}}" alt="" class="svg">
                            <span>Setting</span>
                        </a>
                    </li>
                </div>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <img src="{{asset('svg/logout.svg')}}" alt="" class="svg">
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
            <div class="content border rounded border-0">
                    <!-- form -->
                    <form action="" method="get" class=" formh">

                        <div class="container-lg d-flex  h-header">
                            <h5 class="pt-2 daftarpengun">Daftar Pengunjung</h5>
                            <input type="date" class="form-control dateinput" id="" >
                        </div>
                    </form>
                    <div class="container-lg ">

                        <table class="table border">
                            <thead>
                                <tr >
                                    <th rowspan="2" class="table-no table-light text-center" id="nomor">No</th>
                                    <th rowspan="2" class="table-nama table-light" id="namatab">Nama</th>
                                    <th colspan="2" class="jam-table text-center table-active" id="waktu ">Jam</th>
                                    <th rowspan="2" class="kegiatan table-light" id="keg">kegiatan</th>
                                </tr>
                                <tr>
                                    <th class="jam-masuk table-light" id="waktu">Masuk</th>
                                    <th class="jam-keluar table-light" id="waktu">Keluar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td scope="row" class="text-center texttable">1</td>
                                <td class="texttable">Mark <br><span class="kelas">XI PPL 1</span></td>
                                <td class="texttable text-center">08:00</td>
                                <td class="texttable text-center">12:00</td>
                                <td class="texttable kegiatantd">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                </tr>
                                <tr>
                                <td scope="row" class="text-center texttable">1</td>
                                <td class="texttable">Mark <br><span class="kelas">XI PPL 1</span></td>
                                <td class="texttable text-center">08:00</td>
                                <td class="texttable text-center">12:00</td>
                                <td class="texttable kegiatan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('zan/script.js')}}"></script>
</body>

</html>
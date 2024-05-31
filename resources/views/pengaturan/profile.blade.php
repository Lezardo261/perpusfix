<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("zan/style.css")}}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="border rounded expand">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="{{("svg/logo.svg")}}" alt="" class="logo">
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
                            <img src="{{asset('svg/dash.svg')}}" alt="" class="svg">
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
                            <img src="{{asset('svg/pinjam.svg')}}" alt="" class="svg">
                            <span>Peminjaman</span>
                        </a>
                    </li>
                    <li class="sidebar-item  ">
                        <a href="#" class="sidebar-link">
                            <img src="{{asset('svg/pengunjung.svg')}}" alt="" class="svg">
                            <span>Pengunjung</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="#" class="sidebar-link">
                            <img src="{{asset('svg/settings.svg')}}" alt="" class="svg">
                            <span>Setting</span>
                        </a>
                    </li>
                </div>
            </ul>
            <div class="sidebar-footer border-top">
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
                    <div class="container-lg d-flex ">
                        <h5 class="pt-2 daftarpengun">Pengaturan</h5>
                    </div>
                    <ul class=" d-flex ulcontent mt-2 ms-1" >
                        <div class=" d-flex gap-5 border border-end-0 border-start-0 border-top-0">
                            <li><a href="{{route('pengaturan.profile')}}" class="list activep">Profile</a></li>
                            <li><a href="{{route('pengaturan.rak')}}" class="list ">Nomor Rak</a></li>
                            <li><a href="{{route('pengaturan.subjek')}}" class="list ">Subjek</a></li>
                            <li><a href="{{ route('pengaturan.karya')}}" class="list">Bentuk Karya</a></li>
                            <li><a href="{{ route('pengaturan.matpel')}}" class="list">Mata Pelajaran</a></li>
                        </div>
                    </ul>
                    <div class="container-lg  p-3">
                        <div class="d-flex">
                            <div class="content-foto border border-bottom-0 border-start-0 border-end-1 border-top-0">
                                <h6 class="mb-4 textfoto">Foto</h6>
                                <img src="pp.png" alt="" class="img border rounded">
                                <p class=""><!-- Button trigger modal -->
                                    <button type="button" class="btn btn-foto mt-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      Ganti Foto
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form action="" method="post">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div></p>

                            </div>
                            <div class=" ms-5 ">
                                <div class="informasi ">
                                    <div class="info-header d-flex  ">
                                        <h6 class="-info">Informasi</h6>
                                        <a href="{{route('ubahinfo')}}" class="text-btn p-1 border rounded ps-2 pe-2 me-5">Ubah</a>
                                    </div>
                                    <div class="showinfo lh-1 mt-4 ">
                                        <div class="namanya d-flex justify-content-between">
                                            <p class="judulinfo">Nama</p>
                                            <p class="ini-show">Super Admin</p>
                                        </div>
                                        <div class="nomornya d-flex justify-content-between">

                                            <p class="judulinfo">Nomor WhatsApp</p>
                                            <p class="ini-show">085951420702</p>
                                        </div>
                                    </div>
                                    <div class="d-flex password mt-4">
                                        <h6 class="-pw">Ubah Password</h6>
                                        <a href="" class="text-btn p-1 border rounded ps-2 pe-2 me-5">Ubah</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{asset('zan/script.js')}}"></script>
</body>

</html>
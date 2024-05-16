<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Rak</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('zan/style.css')}}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="border rounded expand">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="{{ asset('svg/logo.svg')}}" alt="" class="logo">
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
                            <img src="{{ asset('svg/pengunjung.svg')}}" alt="" class="svg">
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
                    <img src="{{('svg/logut.svg')}}" alt="" class="svg">
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
                            <li><a href="{{route('pengaturan.profile')}}" class="list  ">Profile</a></li>
                            <li><a href="{{route('pengaturan.rak')}}" class="list activep">Nomor Rak</a></li>
                            <li><a href="{{route('pengaturan.subjek')}}" class="list">Subjek</a></li>
                            <li><a href="{{ route('pengaturan.karya')}}" class="list">Bentuk Karya</a></li>
                            <li><a href="{{ route('pengaturan.matpel')}}" class="list">Mata Pelajaran</a></li>
                        </div>
                    </ul>
                    <div class="container-lg  p-3 nomorrak d-block">
                        <div class="d-flex ">
                            <h6 class="justify-content-between h6rak pt-1 ps-2">Nomor Rak</h6>
                            <div class="me-3">
                                <input type="search" class="form-control" id="inputSearch" aria-describedby="search">
                            </div>
                            <a href="{{route('pengaturan.tambah')}}" class="me-4 pt-2 border ps-3 pe-3 pb-2 rak-tambah text-center">Tambah</a>
                        </div>    
                        <table class="table mt-3">
                            <thead>
                              <tr>
                                <th scope="col" class="table-light  rakno text-center">No</th>
                                <th scope="col" class="table-light ">Nomor Rak</th>
                                <th scope="col" class="table-light ">Jumlah Buku</th>
                                <th scope="col" class="table-light text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>

                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($rak as $item)
                                <tr>
                                  <th scope="row" class="text-center">{{++$no}}</th>
                                  <td>{{ $item->nomorrak}}</td>
                                  <td>{{ $item->jumlahbuku}} <span>Buku</span></td>
                                  <td class="d-flex justify-content-evenly">
                                      <a href="{{ route("pengaturan.rakedit", $item->id)}}" class="border rounded p-1 ps-2 pe-2 text-black">
                                          <i class="lni lni-pencil"></i>
                                      </a>
                                  
                                      <form action="" method="" class=" p-1 ps-2 pe-2 border rounded">
                                          @csrf
                                          @method('DELETE')
                                          <a href="{{route('pengaturan.hapus', $item->id)}}" class=" text-black"><i class="lni lni-trash-can"></i></a>
                                      </form>
                                  </td>
                                </tr>
                                @endforeach
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
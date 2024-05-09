
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Tambah Subjek</title>
    <link rel="stylesheet" href="{{ asset('style1.css')}}">
</head>
<body>
    <nav>
        <img src="{{asset('logo.svg')}}" alt="" class="logo">

        <div class="dropdown">
            <img src="" alt="">
            <h5>Super Admin</h5>
        </div>
        
        <div class="super-menu">
            <li> <i class="fa-regular fa-house"></i> <a href="" >Dashboard</a></li>
            <li><i class="fa-light fa-book"></i> <a href="">Buku</a></li>
            <li><i class="fa-light fa-book-open"></i> <a href="">Peminjaman</a></li>
            <li></span><i class="fa-light fa-user"></i><a href="" >Pengunjung</a></li>
            <li><span class="active-span"></span><i class="fa-light fa-gear" class="active"></i><a href="">Pengaturan</a></li>
            <li class="garis"></li>
        </div>



        <div class="logout">
            <span></span>
            <li><img src="logout.svg" alt=""> <a href="">dashboard</a></li>
        </div>
    </nav>
    
    <div class="topbar">
        <div class="judul">
            <h5 >Selamat datang di <span>Perpus</span></h5>
            <p >Selamat datang di Super Admin 👋</p>

        </div>
    </div>

    <main>
        <div class="container">
            <div class="navbar-profil">
                <h5>Pengaturan</h5>
                <li><a href="{{ asset("pengaturan.profile")}}" >Profil</a>
                <li><a href="{{ asset('pengaturan.rak')}}" >Nomor Rak</a>
                <li><a href="{{ asset('pengaturan.subjek')}}" class="active">Subjek</a>
                {{-- <li><a href="{{ asset('pengaturan.bentuk')}}">Bentuk Karya</a>
                <li><a href="{{ asset("pengaturan.matpel")}}">Mata Pelajaran</a> --}}
                </li>

            </div>

            <div class="main">
                <div class="rak">
                    <h6>Subjek</h6>
                    <input type="search">
                    <button><a href="{{ route('pengaturan.tambahsub')}}">Tambah</a></button>
                </div>  
                <table >
                    <tr>
                        <th  class="table-no" id="nomor">No</th>
                        <th  class="table-nama">Nama</th>
                        
                        <th class="table-aksi">Aksi</th>
                    </tr>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($subjek as $item)
                        
                    <tr class="content-table">
                        <td class="nomortable">{{ ++$nomor}}</td>
                        <td>{{ $item->nama_subjek}}</td>
                        <td class="aksi">
                            <a href="" class="edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form action="" method="post" class="delete">
                                @csrf
                                @method('DELETE')
                              <a href="{{ route('pengaturan.destroysub', $item->id)}}"><i class="fa-solid fa-trash"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    
        
                </table>
                  
            </div>
        </div>
          
          
    </main>
</body>
</html>
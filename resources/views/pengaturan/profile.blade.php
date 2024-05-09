<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('style1.css')}}">
</head>
<body>
    <nav>
        <img src="{{ asset('logo.svg')}}" alt="" class="logo">

        <div class="dropdown">
            <img src="" alt="">
            <h5>Super Admin</h5>
        </div>
        
        <div class="super-menu">
            <li> <i class="fa-regular fa-house"></i> <a href="" >Dashboard</a></li>
            <li><i class="fa-light fa-book"></i> <a href="">Buku</a></li>
            <li><i class="fa-light fa-book-open"></i> <a href="">Peminjaman</a></li>
            <li></span><i class="fa-light fa-user"></i><a href="index.html" >Pengunjung</a></li>
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
                <li><a href="{{ route('pengaturan.profile')}}" class="active">Profil</a>
                <li><a href="{{ route('pengaturan.rak')}}">Nomor Rak</a>
                <li><a href="subjek.html">Subjek</a>
                <li><a href="Bentukkarya.html">Bentuk Karya</a>
                <li><a href="matapelajaran.html">Mata Pelajaran</a>
                </li>

            </div>

            <div class="main">
                <div class="foto">
                    <h6>Foto</h6>
                    <img src="{{ asset('storage/photo-user/'. $user->image)}}" alt="foto">
                    <p>Ubah Foto</p>
                </div>
                <div class="informasi">
                    <div class="info">
                        <h6>Informasi</h6>
                        <button><a href="">Ubah</a></button>
                    </div>
                    <div class="superinfo">
                        <div class="shownama">
                            <p class="judul-profil1">Nama</p> 
                            <p class="namanya">{{ $user->name }}</p>

                        </div>
                        <div class="showWA">
                            <p class="judul-profil">Nomor WhatsApp</p>
                            <p class="namanya">{{ $user->nomorwa }}</p>
                        </div>
                    </div>

                    <div class="password">
                        <h6>Password</h6>
                        <button><a href="">Ubah</a></button>
                    </div>
                </div>

            </div>
        </div>
          
          
    </main>
</body>
</html>
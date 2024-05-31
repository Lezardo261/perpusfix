
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah password</title>
    <link rel="stylesheet" href="{{asset("form/styles.css")}}">
</head>
<body>

    <div class="container">
        <div class="head">
            <h5 class="title">Ubah Password</h5>
            <i class="fa-solid fa-xmark fa-lg"></i>
        </div>
        <form class="form" action="{{route('pwstore')}}" method="POST">
            @csrf

            @if (session('status'))
            <div class="alert alert-success">{{ session('status')}}</div>
            @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error')}}</div>
            @endif
        <div class="form-field">
        <label for="current_password">Password Lama</label>
        <input type="password" id="current_password" name="current_password" placeholder="Password lama" >
        </div>
        <div class="form-field">
        <label for="newpassword">Password baru</label>
        <input type="password" id="newpassword" name="newpassword" placeholder="Password Baru">
        </div>
        <div class="form-field">
        <label for="repeatpassword">Konfirmasi Password</label>
        <input type="password" id="repeatpassword" name="repeatpassword" placeholder="Konfirmasi Password">
        </div>
        
        <button type="submit" class="submit-button">Simpan</button>
    </form>
    <button type="submit" class="submit-button2"><a href="{{route('pengaturan.profile')}}">Kembali</a></button>
    </div>
</body>
</html>
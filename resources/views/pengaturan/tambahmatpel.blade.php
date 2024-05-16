
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matpel Page</title>
    <link rel="stylesheet" href="{{asset('form/styles.css')}}">
</head>
<body>
    <div class="container">
        <div class="head">
            <h5 class="title">Tambah Matapelajaran</h5>
            <i class="fa-solid fa-xmark fa-lg"></i>
        </div>
        <form class="form" method="POST" action="{{route('pengaturan.matpelstore')}}">
            @csrf
            <div class="form-field">
            <label for="name">Matapelajaran</label>
            <input type="text" id="name" name="matpel" placeholder="Matapelajaran">
            </div>
            <button type="submit" class="submit-button">Simpan</button>
         </form>
    <button type="submit" class="submit-button2"><a href="{{ route('pengaturan.matpel')}}">Kembali</a></button>
    </div>
</body>
</html>
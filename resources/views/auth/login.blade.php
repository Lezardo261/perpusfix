<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="left-div">

                    <h4 class="header">Selamat datang di <span>PerpusGo</span></h4>
                    <h5 class="header1">Masuk dengan akun yang terdaftar</h5>
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h6 class="hnomor">Nomor WhatsApp</h6>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input class="input-box" type="number" id="nomorwa" name="nomorwa"
                            placeholder="Tuliskan nomor WhatsApp"><br>
                        <h6 class="hnomor">Password</h6>
                        <input class="input-box" type="password" id="password" name="password" required
                            placeholder="Tuliskan password"><br>
                        <div class="masuk">
                            <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
                        </div>
                    </form>

                    <!-- Isi untuk div sebelah kiri -->
                </div>
            </div>
            <div class="col-sm">
                <div class="right-div">
                    <img class="image" src="/image/image.png" alt="">
                    <!-- Isi untuk div sebelah kanan -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>

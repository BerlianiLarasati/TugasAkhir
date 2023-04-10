<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Surabaya</title>
    <link rel="shortcut icon" href="{{asset('/adminto/images/surabaya-shortcuticon.png')}}">

    <!-- CDN Vue JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script> --}}

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href=" {{ asset('assets/css/register.css') }} ">
</head>

<body>

    <div class="container">
        <form action="{{ route('prosesRegister') }}" method="POST" class="register-email">
            {{-- csrf Token laravel --}}
            @csrf
            <div class="logo">
                <a href="{{ route('home')}}">
                    <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="" />
                </a>
            </div>
            <p class="title-text"><b>REGISTER</b></p>
            <div class="input-group"><input type="text" placeholder="Name" name="name" value="" required></div>
            <div class="input-group"><input type="email" placeholder="E-mail Adress" name="email" value="" required></div>
            <div class="input-group"><input type="password" placeholder="Password" name="password" value="" required></div>
            {{-- <div class="input-group"><input type="password" placeholder="Confirm Password" name="cpassword" value= "" required></div>
            <div class="input-group"><input type="date" placeholder="Date" name="date" required></div> --}}
            <button class="button" style="vertical-align:middle"><span> Register </span></button>
            <p class="register-text">Already Have an Account?
            <a href="{{ route('login') }}">Log In!</a></p>
        </form>
    </div>

    {{-- <div class="container">
        <div class="text-center">
            <h1 class="mb-2">Register Form</h1>
            <hr>
        </div>
        <form action="{{ route('prosesRegister') }}" method="POST"> --}}
    {{-- <div class="mb-3">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                    </div>
                    <div class="col-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="mb-2"> Nama </label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <div>
                        <label for="role"> Role </label>
                    </div>
                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="role" value="administrator"
                            id="vbtn-radio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="vbtn-radio1">Admin</label>
                        <input type="radio" class="btn-check" name="role" value="contributor" id="vbtn-radio2"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="vbtn-radio2">Contributor</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary"> Register</button>
                    </div>
                </div>
            </div>
        </form>
        <p style="font-weight: 500"> Sudah Punya Akun? <a href="{{ route('login') }}"> LOGIN </a></p>
    </div> --}}
    {{-- Bootstrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

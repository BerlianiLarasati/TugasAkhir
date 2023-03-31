<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Rek!</title>
    <link rel="shortcut icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/City_of_Surabaya_Logo.svg/1200px-City_of_Surabaya_Logo.svg.png" />
    <link rel="stylesheet" href="{{ asset('register.css') }} ">
</head>

<body>

    <div class="container">
        <form action="{{ route('register.registration') }}" method="post" class="register-email">
            @csrf
            <div class="logo">
                <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="" />
                <p class="title-text"><b>REGISTER</b></p>
                <div class="input-group">
                    <input type="text" placeholder="Username" name="name"
                        value="" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="E-mail Adress" name="email" value="" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="button"><span> Register </span></button>
                </div>
                <p class="register-text">Already Have an Account?
                    <a href="{{ route('login') }}">Log In!</a>
                </p>
        </form>
    </div>

</body>

</html>

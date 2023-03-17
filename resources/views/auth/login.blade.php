<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Rek!</title>
        <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/City_of_Surabaya_Logo.svg/1200px-City_of_Surabaya_Logo.svg.png" />
        <link rel="stylesheet" href="{{asset('register.css')}} ">
    </head>
    <body>
    
    <div class="container">
            <div class="logo">
            <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="" />
            <p class="title-text"><b>Log In</b></p>
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <form action="/" method="post" class="register-email">
                @csrf
                <div class="input-group">
                    <input type="email" placeholder="E-mail Adress" name="email" value="" required class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="input-group">
                    <input input type="password" placeholder="Password" name="password" value="" required  class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                </div>
                <button class="button" style="vertical-align:middle" type="submit"><span> Login </span></button>
                <p class="register-text">Already Have an Account?
                <a href="{{ route('register') }}">Sign Up!</a></p>
            </form>
    </div>

    </body>
</html>
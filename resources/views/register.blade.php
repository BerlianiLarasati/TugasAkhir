
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
            <form action="" method="POST" class="register-email">
                <div class="logo">
                    <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="" />
                <p class="title-text"><b>REGISTER</b></p>
                <div class="input-group"><input type="text" placeholder="Name" name="username" value="" required></div>
                <div class="input-group"><input type="email" placeholder="E-mail Adress" name="email" value="" required></div>
                <div class="input-group"><input type="password" placeholder="Password" name="password" value="" required></div>
                <div class="input-group"><input type="password" placeholder="Confirm Password" name="cpassword" value= "" required></div>
                <div class="input-group"><input type="date" placeholder="Date" name="date" required></div>
                <button class="button" style="vertical-align:middle"><span> Register </span></button>
                <p class="register-text">Already Have an Account?
                <a href="{{ route('login') }}">Log In!</a></p>
            </form>
    </div>

    </body>
</html>
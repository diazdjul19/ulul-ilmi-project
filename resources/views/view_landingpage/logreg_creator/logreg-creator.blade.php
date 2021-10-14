<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Register</title>
    <link rel="shortcut icon" href="/assets-ululilmi/jenjang_pendidikan/Logo-Ponpes-Redesign.png">
    <style type="text/css">
        body {
            padding-top: 90px;
        }
        .panel-login {
            border-color: #ccc;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        }
        .panel-login>.panel-heading {
            color: #00415d;
            background-color: #fff;
            border-color: #fff;
            text-align:center;
        }
        .panel-login>.panel-heading a{
            text-decoration: none;
            color: #666;
            font-weight: bold;
            font-size: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login>.panel-heading a.active{
            color: #029f5b;
            font-size: 18px;
        }
        .panel-login>.panel-heading hr{
            margin-top: 10px;
            margin-bottom: 0px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        }
        .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
            height: 45px;
            border: 1px solid #ddd;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login input:hover,
        .panel-login input:focus {
            outline:none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color: #ccc;
        }
        .btn-login {
            background-color: #59B2E0;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #59B2E6;
        }
        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #53A3CD;
            border-color: #53A3CD;
        }
        .forgot-password {
            text-decoration: underline;
            color: #888;
        }
        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }

        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }

    </style>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  --}}

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="login-logo text-center">
            {{-- <a href="/assets-admin/index2.html"><b>Ulul</b>Ilmi</a> --}}
            <img src="/assets-ululilmi/logo.svg" style="width: 300px" alt="">
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>    
                        @if ($message = Session::get('success_register'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading"><strong>Registrasi Berhasil &#128519;</strong></h4>
                                <p>Data anda akan segera di periksa oleh ADMIN <br> Segera cek alamat email anda untuk melihat status registrasi anda</p>
                            </div>
                        @endif

                        @if ($message = Session::get('galog_email_or_password'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading"><strong>Gagal Login &#128553;</strong></h4>
                                <p>{{$message}}</p>
                            </div>
                        @endif

                        @if ($message = Session::get('galog_no_email'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading"><strong>Gagal Login &#128580;</strong></h4>
                                <p>{{$message}}</p>
                            </div>
                        @endif

                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="{{route('login-store-creator')}}" method="post" role="form" style="display: block;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="login_email" id="" tabindex="1" class="form-control" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" name="login_password" id="password_login" tabindex="2" class="form-control" placeholder="Password" required>
                                            <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye_login" onclick="toggle_login()"></i></div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Login </button>
                                                {{-- <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In"> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>



                                <form id="register-form" action="{{route('regist-creator')}}" method="post" role="form" style="display: none;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name_creator" id="name_creator" tabindex="1" class="form-control" placeholder="Nama Lengkap" value="" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="login_email" id="login_email" tabindex="1" class="form-control" placeholder="Email" value="" required> 
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input id="password" name="password" tabindex="2" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" required>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            
                                            <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye1" onclick="toggle1()"></i></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input id="password-confirm" tabindex="2" type="password" class="form-control" name="password_confirmation" required  placeholder="Password Confirmation">
                                            <div class="input-group-addon"><i class="glyphicon glyphicon-lock" arial-hidden="true" id="eye2" onclick="toggle2()"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Register Now </button>
                                                {{-- <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });
</script>

<script>
    var state= false;

    function toggle_login() {
        if (state) {
            document.getElementById(
                "password_login").
                setAttribute("type", "password");
            document.getElementById(
                "eye_login").style.color='#7a797e';
            state = false;
        }else{
            document.getElementById(
                "password_login").
                setAttribute("type", "text");
            document.getElementById(
                "eye_login").style.color='#5887ef';
            state = true;
        }
    }

    function toggle1() {
        if (state) {
            document.getElementById(
                "password").
                setAttribute("type", "password");
            document.getElementById(
                "eye1").style.color='#7a797e';
            state = false;
        }else{
            document.getElementById(
                "password").
                setAttribute("type", "text");
            document.getElementById(
                "eye1").style.color='#5887ef';
            state = true;
        }
    }

    function toggle2() {
        if (state) {
            document.getElementById(
                "password-confirm").
                setAttribute("type", "password");
            document.getElementById(
                "eye2").style.color='#7a797e';
            state = false;
        }else{
            document.getElementById(
                "password-confirm").
                setAttribute("type", "text");
            document.getElementById(
                "eye2").style.color='#5887ef';
            state = true;
        }
    }
</script>

@include('sweetalert::alert')
</html>
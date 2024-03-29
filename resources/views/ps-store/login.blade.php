@extends('ps-store.MasterIndex')

<head>
    <title>Login V6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login-form/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-form/css/util.css">
    <link rel="stylesheet" type="text/css" href="login-form/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <body class="is-preload">
        @section('header')

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-85 p-b-20">
                    <form class="login100-form validate-form" action="/cu-login" method="POST">
                        <span class="login100-form-title p-b-70">
                            Welcome
                        </span>
                        <!-- <span class="login100-form-avatar">
						<img src="login-form/images/avatar-01.jpg" alt="AVATAR">
					</span> -->

                        <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                            <input class="input100" type="text" name="name">
                            <span class="focus-input100" data-placeholder="Username"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <ul class="login-more p-t-190">
                            <li class="m-b-8">
                                <span class="txt1">
                                    Forgot
                                </span>

                                <a href="#" class="txt2">
                                    Username / Password?
                                </a>
                            </li>

                            <li>
                                <span class="txt1">
                                    Don’t have an account?
                                </span>

                                <a href="/pagesignup" class="txt2">
                                    Sign up
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="login-form/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="login-form/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="login-form/vendor/bootstrap/js/popper.js"></script>
        <script src="login-form/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="login-form/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="login-form/vendor/daterangepicker/moment.min.js"></script>
        <script src="login-form/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="login-form/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="login-form/js/main.js"></script>
        @endsection

    </body>

    </html>